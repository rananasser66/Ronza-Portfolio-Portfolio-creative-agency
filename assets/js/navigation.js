document.addEventListener('DOMContentLoaded', function () {
	const toggle = document.querySelector('.menu-toggle');
	const navigation = document.querySelector('.site-navigation');
	const actions = document.querySelector('.site-header__actions');
	const search = document.querySelector('.site-header__search');
	const searchToggle = document.querySelector('.search-toggle');
	const searchForm = document.querySelector('.header-search-form');
	const searchInput = searchForm?.querySelector('input[type="search"]');
	const searchSubmit = searchForm?.querySelector('button[type="submit"]');

	const mobileBreakpoint = 900;
	const isMobile = () => window.innerWidth <= mobileBreakpoint;

	const updateNavigationState = function () {
		if (toggle && navigation) {
			navigation.inert = isMobile() && toggle.getAttribute('aria-expanded') !== 'true';
		}
	};

	const closeSearch = function (returnFocus = false) {
		if (!search || !searchToggle || !searchForm || !searchInput || !searchSubmit) {
			return;
		}

		search.classList.remove('is-open');
		searchToggle.setAttribute('aria-expanded', 'false');
		searchToggle.querySelector('.screen-reader-text').textContent = 'Open search';
		searchForm.setAttribute('aria-hidden', 'true');
		searchInput.setAttribute('tabindex', '-1');
		searchSubmit.setAttribute('tabindex', '-1');

		if (returnFocus) {
			searchToggle.focus();
		}
	};

	const openSearch = function () {
		if (!search || !searchToggle || !searchForm || !searchInput || !searchSubmit) {
			return;
		}

		search.classList.add('is-open');
		searchToggle.setAttribute('aria-expanded', 'true');
		searchToggle.querySelector('.screen-reader-text').textContent = 'Close search';
		searchForm.setAttribute('aria-hidden', 'false');
		searchInput.removeAttribute('tabindex');
		searchSubmit.removeAttribute('tabindex');
		searchInput.focus();
	};

	const closeMenu = function () {
		if (!toggle || !navigation) {
			return;
		}

		toggle.setAttribute('aria-expanded', 'false');
		toggle.querySelector('.screen-reader-text').textContent = 'Open menu';
		navigation.classList.remove('is-open');
		actions?.classList.remove('is-open');
		document.body.classList.remove('menu-open');
		updateNavigationState();
	};

	const openMenu = function () {
		if (!toggle || !navigation) {
			return;
		}

		toggle.setAttribute('aria-expanded', 'true');
		toggle.querySelector('.screen-reader-text').textContent = 'Close menu';
		navigation.classList.add('is-open');
		actions?.classList.add('is-open');
		document.body.classList.add('menu-open');
		updateNavigationState();
	};

	const header=document.querySelector('.site-header');
	const transparentStickyHeader=header?.classList.contains('site-header--transparent')&&header?.classList.contains('site-header--sticky');

	const updateHeaderAppearance=function(){
		if(!transparentStickyHeader)return;

		header.classList.toggle('is-scrolled',window.scrollY>20);
	};

	updateHeaderAppearance();

	window.addEventListener('scroll',updateHeaderAppearance,{passive:true});

	updateNavigationState();

	toggle?.addEventListener('click', function () {
		if (toggle.getAttribute('aria-expanded') === 'true') {
			closeMenu();
		} else {
			openMenu();
		}
	});

	searchToggle?.addEventListener('click', function () {
		if (searchToggle.getAttribute('aria-expanded') === 'true') {
			closeSearch(true);
		} else {
			openSearch();
		}
	});

	searchForm?.addEventListener('submit', function (event) {
		if (!searchInput.value.trim()) {
			event.preventDefault();
			searchInput.focus();
		}
	});

	navigation?.querySelectorAll('a').forEach(function (link) {
		link.addEventListener('click', function () {
			if (isMobile()) {
				closeMenu();
			}
		});
	});

	document.addEventListener('click', function (event) {
		if (search?.classList.contains('is-open') && !search.contains(event.target)) {
			closeSearch();
		}
	});

	document.addEventListener('keydown', function (event) {
		if (event.key !== 'Escape') {
			return;
		}

		if (search?.classList.contains('is-open')) {
			closeSearch(true);
			return;
		}

		if (toggle?.getAttribute('aria-expanded') === 'true') {
			closeMenu();
			toggle.focus();
		}
	});

	window.addEventListener('resize', function () {
		updateNavigationState();

		if (!isMobile() && toggle?.getAttribute('aria-expanded') === 'true') {
			closeMenu();
		}
	});
});