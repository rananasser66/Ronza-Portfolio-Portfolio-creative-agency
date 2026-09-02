document.addEventListener('DOMContentLoaded', function () {
	const stats = document.querySelectorAll('.about-stat__number');

	if (!stats.length || !('IntersectionObserver' in window)) {
		return;
	}

	if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		stats.forEach(function (stat) {
			stat.textContent = stat.dataset.target;
		});
		return;
	}

	const animateCounter = function (element) {
		const target = element.dataset.target;
		const number = parseInt(target.replace(/[^0-9]/g, ''), 10);
		const suffix = target.replace(/[0-9]/g, '');

		if (isNaN(number)) {
			return;
		}

		const duration = 1800;
		const start = performance.now();

		const updateCounter = function (currentTime) {
			const progress = Math.min((currentTime - start) / duration, 1);
			const easedProgress = 1 - Math.pow(1 - progress, 3);
			const currentNumber = Math.floor(number * easedProgress);

			element.textContent = currentNumber + suffix;

			if (progress < 1) {
				requestAnimationFrame(updateCounter);
			} else {
				element.textContent = number + suffix;
			}
		};

		requestAnimationFrame(updateCounter);
	};

	const observer = new IntersectionObserver(function (entries, observer) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				animateCounter(entry.target);
				observer.unobserve(entry.target);
			}
		});
	}, {
		threshold: 0.5
	});

	stats.forEach(function (stat) {
		observer.observe(stat);
	});
});