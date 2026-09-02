document.addEventListener('DOMContentLoaded', function () {
	const stats = document.querySelectorAll('.home-stat__number');
	const statsGrid = document.querySelector('.home-stats__grid');

	if (!stats.length || !statsGrid) {
		return;
	}

	const parseTarget = function (target) {
		const match = target.trim().replace(/,/g, '').match(/^(\d+(?:\.\d+)?)\s*([kKmM]?)(.*)$/);

		if (!match) {
			return null;
		}

		const value = parseFloat(match[1]);
		const unit = match[2].toUpperCase();
		const suffix = match[3];
		const multiplier = unit === 'K' ? 1000 : unit === 'M' ? 1000000 : 1;

		return {
			value: Math.round(value * multiplier),
			unit: unit,
			suffix: suffix,
		};
	};

	const counters = Array.from(stats)
		.map(function (element) {
			const target = parseTarget(element.dataset.target);

			if (!target) {
				return null;
			}

			return {
				element: element,
				target: target,
			};
		})
		.filter(Boolean);

	const formatValue = function (value, target) {
		if (target.unit === 'M' && value >= 1000000) {
			return Math.floor(value / 1000000) + 'M' + target.suffix;
		}

		if (target.unit === 'K' && value >= 1000) {
			return Math.floor(value / 1000) + 'K' + target.suffix;
		}

		return value.toLocaleString() + target.suffix;
	};

	const showFinalValues = function () {
		counters.forEach(function (counter) {
			counter.element.textContent =
				counter.target.unit === 'K'
					? Math.floor(counter.target.value / 1000) + 'K' + counter.target.suffix
					: counter.target.unit === 'M'
						? Math.floor(counter.target.value / 1000000) + 'M' + counter.target.suffix
						: counter.target.value.toLocaleString() + counter.target.suffix;
		});
	};

	if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		showFinalValues();
		return;
	}

	const animateCounters = function () {
		const duration = 1100;
		const startTime = performance.now();

		const updateCounters = function (currentTime) {
			const progress = Math.min((currentTime - startTime) / duration, 1);

			counters.forEach(function (counter) {
				const currentValue = Math.round(counter.target.value * progress);

				counter.element.textContent = formatValue(
					currentValue,
					counter.target
				);
			});

			if (progress < 1) {
				requestAnimationFrame(updateCounters);
			} else {
				showFinalValues();
			}
		};

		requestAnimationFrame(updateCounters);
	};

	if (!('IntersectionObserver' in window)) {
		animateCounters();
		return;
	}

	const observer = new IntersectionObserver(
		function (entries, currentObserver) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					animateCounters();
					currentObserver.unobserve(entry.target);
				}
			});
		},
		{
			threshold: 0.3,
		}
	);

	observer.observe(statsGrid);
});




document.addEventListener('DOMContentLoaded',function(){
    const animated=document.querySelectorAll('[data-rz-reveal],[data-rz-stagger],[data-rz-drift],[data-rz-line],[data-rz-project],[data-rz-blog],[data-rz-stats],[data-rz-cta],.rz-gold-thread');
    if(!animated.length)return;
    if(window.matchMedia('(prefers-reduced-motion: reduce)').matches){
        animated.forEach(el=>el.classList.add('is-visible'));
        return;
    }
    const observer=new IntersectionObserver((entries,obs)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.classList.add('is-visible');
                obs.unobserve(entry.target);
            }
        });
    },{
        threshold:.15,
        rootMargin:'0px 0px -60px 0px'
    });
    animated.forEach(el=>observer.observe(el));
});