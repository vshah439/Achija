/*
	Dopetrope by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel
		.breakpoints({
			desktop: '(min-width: 737px)',
			tablet: '(min-width: 737px) and (max-width: 1200px)',
			mobile: '(max-width: 736px)'
		})
		.viewport({
			breakpoints: {
				tablet: {
					width: 1080
				}
			}
		});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on mobile.
			skel.on('+mobile -mobile', function() {
				$.prioritize(
					'.important\\28 mobile\\29',
					skel.breakpoint('mobile').active
				);
			});

		// Dropdowns.
			$('#nav > ul').dropotron({
				mode: 'fade',
				noOpenerFade: true,
				alignment: 'center'
			});

		// Off-Canvas Navigation.

			// Title Bar.
				$(
					'<div id="titleBar">' +
						'<a href="#navPanel" class="toggle"></a>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel" class="mobile-menu">' +
						'<table class="menu-table"><tr><img classs="image" style="width:7.5em;height:4em;border-radius:50%" src="images/Achija.png" /> </tr><tr><td class="current"><a href="index.html">Home</a></td></tr>'+
						'<tr ><td class="opener" ><a href="#">Our Collection</a></td></tr>'+
						'<tr><td class="mobile-sub-menu"><a>Shirts</a></td></tr>'+
						'<tr><td class="mobile-sub-menu"><a>Short Kurta</a></td></tr>'+
						'<tr><td class="mobile-sub-menu"><a>Shervani</a></td></tr>'+
						'<tr><td class="mobile-sub-menu"><a>Kurta Payajama</a></td></tr>'+
						
						'<tr><td><a ui-sref="about" href="no-sidebar.html">About Us</a></td></tr>'+
						'<tr><td><a ui-sref="contact" href="no-sidebar.html">Contact Us</a></td> </tr> </table>'+

								
						
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#titleBar, #navPanel, #page-wrapper')
						.css('transition', 'none');

	});

})(jQuery);
function scrollTo(element)
{
	
	$('html, body').animate({
        scrollTop: element.offset().top-20
    }, 2000);
}
function scrollToTop()
{
	console.log("okkk");
	$('html, body').animate({
        scrollTop: $("body").offset().top
    }, 500);
}
function toggleSubMenu()
{
	
	 document.getElementById("myDropdown").classList.toggle("show");
}


