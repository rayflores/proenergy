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
			if ( width > 767 ) {
				if (top >= 220 && !$('#menu-top-menu').hasClass('d-none')) {
					$('nav#header').addClass('small-nav');
					$('#menu-top-menu').addClass('d-none').fadeOut(1000);
					$('.mega-container.show').css('top', '60px');
				} 
				if (top < 220 && $('#menu-top-menu').hasClass('d-none')) {
					$('nav#header').removeClass('small-nav');
					$('.mega-container.show').css('top', '100px');
					setTimeout(function(){
						$('#menu-top-menu').removeClass('d-none').fadeIn(3000);
					},300);
				}
			}
		}
		// top navigation hide on scroll down
		var isMobile = ajax_object.isMobile;
		if (isMobile == '' || isMobile == 'false') {
			$(window).on('scroll load', function () {
				checkWidth();
			});
			$(window).on('resize', function () {
				var newWidth = $(window).width();
				var newTop = $(window).scrollTop();
				if ( newWidth > 767 ) {
					if (newTop >= 220 && !$('#menu-top-menu').hasClass('d-none')) {
						$('nav#header').addClass('small-nav');
						$('#menu-top-menu').addClass('d-none').fadeOut(1000);
						$('.mega-container.show').css('top', '60px');
					} 
					if (newTop < 220 && $('#menu-top-menu').hasClass('d-none')) {
						$('nav#header').removeClass('small-nav');
						$('.mega-container.show').css('top', '100px');
						setTimeout(function(){
							$('#menu-top-menu').removeClass('d-none').fadeIn(3000);
						},300);
					}
				}
			});
		}
		$('.nav-link.dropdown-toggle').on('show.bs.dropdown', function () {
			var theWidth = $(window).width();
			var theTop = $(window).scrollTop();
			if ( theTop >= 220 && theWidth > 767 ) {
				$('ul.dropdown-menu.mega-container').css('top', '60px');
			} else {
				$('ul.dropdown-menu.mega-container').css('top', '100px');
			}
		});

		$(document).ready(function() {
			$('.dropdown-here').hover(function() {
			  $(this).addClass('show');
			  $(this).find('.dropdown-menu').addClass('show').fadeIn(500);
			}, function() {
			  $(this).removeClass('show');
			  $(this).find('.dropdown-menu').removeClass('show');
			}).on('click', function(e) {
				$('li').removeClass('current-menu-item');
				$(this).find('.dropdown-toggle').addClass('active');
			});
	  });
	});
})();
