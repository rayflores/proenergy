// Webpack Imports
import { viewport } from '@popperjs/core';
import * as bootstrap from 'bootstrap';

(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});
	// scroll behavior smooth to left. bir and bil 
	const revealObserver = new IntersectionObserver((entries) => {
		entries.forEach((entry, index) => {
			if (entry.intersectionRatio === 1) {
			//   console.log(index + "image is fully visible");
			} else if (!entry.isIntersecting) {
			entry.target.classList.remove("animating");
			//   console.log(index + " image has left the viewport");
			} else if (entry.intersectionRatio > 0.5) {
			//   let ratio = entry.intersectionRatio.toFixed(4);
			//   console.log(index + "image has started leaving the viewport (ratio "+ratio+")");
			} else if (entry.intersectionRatio < 0.5) {
			// let ratio = entry.intersectionRatio.toFixed(4);
			entry.target.classList.add("animating");
			// console.log(index + "image has started entering the viewport (ratio "+ratio+")");
			}
		});
	}, {
		root: null,
		threshold: [ 0.4, 0.9 ]
	});
	document.querySelectorAll(".reveal").forEach((reveal) => {
		revealObserver.observe(reveal);
	});
	
	jQuery(function ($) {
		// top navigation hide on scroll down
		var isMobile = ajax_object.isMobile;
		if (isMobile == '' || isMobile == 'false') {
			$(window).on('scroll', function () {
				var top = $(window).scrollTop();
				var width = $(window).width();
				if ( width > 767 ) {
					if (top >= 220 && !$('#menu-top-menu').hasClass('d-none')) {
						$('#navbar').removeClass('align-items-start');
						$('#menu-top-menu').addClass('d-none');
						$('nav#header').addClass('small-nav');
					} 
					if (top < 220 && $('#menu-top-menu').hasClass('d-none')) {
						$('#navbar').addClass('align-items-start');
						$('#menu-top-menu').removeClass('d-none');
						$('nav#header').removeClass('small-nav');
					}
				}
			});
			$(window).on('resize', function () {
				var newWidth = $(window).getWidth();
				var newTop = $(window).scrollTop();
				if ( newWidth > 767 ) {
					if (newTop >= 220 && !$('#menu-top-menu').hasClass('d-none')) {
						$('#menu-top-menu').addClass('d-none');
					} 
					if (newTop < 220 && $('#menu-top-menu').hasClass('d-none')) {
						$('#menu-top-menu').removeClass('d-none');
					}
				}
			});
		}
	});
})();
