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
		function checkWidth(){
			var top = $(window).scrollTop();
			var width = $(window).width();
			console.log('top: '+top+' width: '+width);
			if ( width > 992 ) {
				if (top >= 200) {
					$('.menu-integration').addClass('small-nav');
					$('nav.second-navbar').removeClass('d-lg-block').fadeOut(1000);
				} 
				if (top < 200) {
					$('.menu-integration').removeClass('small-nav');
					$('nav.second-navbar').addClass('d-lg-block').fadeIn(1000);
				}
			} 

		}
		// top navigation hide on scroll down
		var isMobile = ajax_object.isMobile;
		if (isMobile == '' || isMobile == 'false') {
			$(window).on('scroll load resize', function () {
				checkWidth();
			});

		} 
	});
})();
