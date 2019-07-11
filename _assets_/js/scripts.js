/*-----------------------------------------------------------------------------------

	Theme Name: SiteName
	Author Design: Samir Alley @samiralley | Tom Gooden @good3n
	Author URI: http://www.revize.com/
	Date: MONTH DAY, 2015

-----------------------------------------------------------------------------------*/

(function($) {

	'use strict';

	var $window = $(window),
		$body = $('body');

	/*!
	 * IE10 viewport hack for Surface/desktop Windows 8 bug
	 * Copyright 2014-2015 Twitter, Inc.
	 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
	 */

	// See the Getting Started docs for more information:
	// http://getbootstrap.com/getting-started/#support-ie10-width
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement('style');
		msViewportStyle.appendChild(
			document.createTextNode(
			  '@-ms-viewport{width:auto!important}'
			)
		); document.querySelector('head').appendChild(msViewportStyle);
	}

	/*
	* E-Notify Auto submit
	*/
	$.urlParam=function(n){var e=new RegExp("[?&]"+n+"=([^]*)").exec(window.location.href);return null==e?null:e[1]||0};
	var $enotify = $('iframe[src*="/revize/plugins/notify/notify.jsp"]');
	if( $enotify.length > 0 ){
		var emailStr = $.urlParam("email");
		if( emailStr != null ){
			$enotify.attr("src", $enotify.attr("src") + "&email=" + emailStr);
		}
	}

	// RZ Class
	if(typeof RZ !== "undefined"){
	 if(RZ.login){
	  $body.addClass("user-logged-in");
	 } else{
		 $body.addClass("user-not-logged-in");
	 }
	}

		// Keyboard Navigation: Nav, flyout
		var isClick = false;
		$("#nav li a, #flyout  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
			console.log(isClick);
			if( isClick === false ) {
				$(".focused").removeClass("focused");
				$(e.currentTarget).parents("#nav li, #flyout li").addClass("focused");
				$('.opened:not(.focused) ul:visible, .opened2:not(.focused) ul:visible').slideUp().removeClass('opened opened2');
			} else {
				$(".focused").removeClass("focused");
				isClick = false;
			}
		});
		// prevent focused class changes on click - This way arrows wont pop when clicking nav links
		$("#nav a,#flyout a").on('mousedown',function(){
			isClick = true;
		});

	// Search Toggle
	$('#search-toggle').on('click',function(e){
		$('#search').stop().slideToggle(200);
		$(this).toggleClass('fa-search fa-close');
	});

	// Navigation Toggle
	$("#nav-toggle").on("click", function(){
		$("#nav").stop().slideToggle();
		$(this).toggleClass("active");
	});
	// Menu Arrows
		// Menu Toggles
		$("#nav >li>ul,#flyout >li>ul").addClass('first-level')
		$("#nav  li ul ul").addClass('second-level');
		$("#nav>li:has(ul)").each(function(){
			$('<a href="#" class="fa fa-angle-down toggle" tabindex="0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown-toggle-'+$(this).index()+'" aria-label="Show Dropdown for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
			$(this).find('ul:first').attr('aria-labelledby', 'dropdown-toggle-'+$(this).index());
		});
		$('#nav li ul>li:has(ul)').each(function(index) {
			// var subindex = 0;
			console.log(index);
			$('<a href="#" class="fa fa-angle-down toggle2" tabindex="0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="sub-dropdown-toggle-'+index+'" aria-label="Show Dropdown for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
			$(this).find('ul:first').attr('aria-labelledby', 'sub-dropdown-toggle-'+index);
			// subindex++;
		});
		$('#flyout >li:has(ul)').each(function() {
			$('<a href="#" class="fa fa-angle-down toggle" tabindex="0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="flyout-dropdown-toggle-'+$(this).index()+'" aria-label="Show Flyout for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
			$(this).find('ul:first').attr('aria-labelledby', 'flyout-dropdown-toggle-'+$(this).index());
		});

	function addNavClass() {
		if ($window.width() < 992) {
			// Insert needed for mobile
		} else{
			// Insert needed for desktop
			$('#nav ul, #flyout ul').css('display', '');
		}
	}
	addNavClass();
	$window.resize(addNavClass);

	$(".toggle").on("click keydown",function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
				e.preventDefault();
				var $parent = $(this).parent();
				var $parentLi = $parent.parent();
				$parent.toggleClass('opened');
				console.log($parent.addClass('active').next('.first-level').is(':visible'));
				if($parent.addClass('active') && $(this).next('.first-level').is(":visible")){
					$(this).next('.first-level').slideUp();
					$parent.removeClass('active');
					$(this).attr({'aria-expanded': 'false'});
				} else {
					$(this).attr({'aria-expanded': 'true'});
					$(".first-level").slideUp("slow");
					$parent.addClass('active');
					$(this).next('.first-level').slideToggle();
				}
			}
		});
		$(".toggle2").on("click keydown",function(e) {
			if (e.keyCode === 13 || e.type === 'click') {
				e.preventDefault();
				var $parent = $(this).parent();
				var $parentLi = $parent.parent();
				$parent.toggleClass('opened2');
				if($parent.addClass('active') && $(this).next('.second-level').is(":visible")){
					$(this).next('.second-level').slideUp();
					$parent.removeClass('active');
					$(this).attr({'aria-expanded': 'false'});
				} else {
					$(this).attr({'aria-expanded': 'true'});
					$(".second-level").slideUp("slow");
					$parent.addClass('active');
					$(this).next('.second-level').slideToggle();
				}
			}
		});


	// Make sure all calendars have unique ids
	$('iframe[name="calendar"]').each(function (index, calendar) {
		calendar.id = 'calendar-' + index;
	});

	// Start Frame Resizer
	function resizeIframe(height, frameElement) {
		if ( frameElement ) {
			frameElement.height = "";
			frameElement.height = height;
		}
		console.log(frameElement.id + ' Height to: ' + height);
	}

	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventHandler = window[eventMethod];
	var messageEvent = eventMethod === "attachEvent" ? "onmessage" : "message";
	eventHandler(messageEvent, function (e) {
		if ( Array.isArray(e.data) ) {
			if( e.data[0] === "setCalHeight" || e.data[0] === "setNotifyHeight") {
				resizeIframe(e.data[1], e.source.frameElement);
			}
		}
	});
	// End Frame Resizer

	// revizeWeather
	if( typeof $.fn.revizeWeather !== "undefined" ){
		$.fn.revizeWeather({
			zip: '48326',
			city_name: '',
			unit: 'f',
			success: function(weather) {
				var date = new Date();
				date = (date.getMonth() + 1) + "/" + date.getDate() + "/" + date.getFullYear();
				var html = '<span>'+date+'</span> <span class="forecast">'+weather.temp+'&deg; '+weather.forecast+'</span>';
				html += '<i class="'+weather.icon+'"></i>';

				$("#weather").html(html);
			},
			error: function(error) {
				// better to just hide the secion if there is an error
				$('.weather').hide();
				console.log(error);
			}
		});
	}

	// Mega Footer Toggle
	$('.header-toggle').on('click keydown', function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
			var inner = $(this).next('.inner-toggle');
			if (inner.is(':hidden')) {
				inner.slideDown('200');
			} else {
				inner.slideUp('200');
			}
		}
	});

	// Tabs
	$('#tabs li a').on('click keypress', function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
			$('#tabs li, #tabs-content .current').removeClass('current').removeClass('fadeInLeft');
			$(this).parent().addClass('current');

			var currentTab = $(this).attr('href');

			e.preventDefault();
			$(currentTab).addClass('current animated fadeInLeft');
			$(currentTab).find('h2').focus();
		}
	});

	// Twitter Feed
	if(typeof $.fn.tweet !== "undefined"){
		$("#twitterfeed").tweet({
			modpath: '_assets_/plugins/twitter/',
			username: "RevizeSoftware",
			join_text: "auto",
			avatar_size: 0,
			count: 1,
			auto_join_text_default: "",
			auto_join_text_ed: "",
			auto_join_text_ing: "",
			auto_join_text_reply: "",
			auto_join_text_url: "",
			loading_text: "Loading Tweet..."
		});
	}

	// Instafeed Feed
	if(typeof $.fn.Instafeed !== "undefined"){
		var userFeed = new Instafeed({
			get: 'user',
			resolution:'standard_resolution',
			limit:9,
			userId: 223202806,
			accessToken: '303202123.f7e9b72.27c687fbd9c24ecbb29dc92951cdf724'
		});
		userFeed.run();
	}

	// Sticky
	if(typeof $.fn.sticky !== "undefined"){
		$("#sticky").sticky({
			topSpacing:0
		});
	}


	// bxSlider
	if(typeof $.fn.bxSlider !== "undefined"){
		$('.bxslider').bxSlider({
			mode:'fade',
			auto:($('.bxslider').children().length < 2) ? false : true,
			pager: false
		});
	}

	// Owl Slider
	if(typeof $.fn.owlCarousel !== "undefined"){
		$("#owl-slider").owlCarousel();
	}

	// Skip to Content
	$('#skip').click(function(e){
		e.preventDefault();
		$("#main").attr("tabindex","-1");
		$("#main").focus();
		$("#main").removeAttr("tabindex");
	});

	// Responsive Tables
	$('.post table:not(.layout-table):not(.not-responsive)').wrap('<div class="table-responsive"></div>');
	$('.layout-table').attr('role', 'presentation');

	// Preloader
	$window.load(function() {

		setTimeout(function(){
			$body.addClass('loaded');
			 $('#loader-wrapper').fadeOut();
		}, 600);

	});

	$window.ready(function(){

		// matchHeight
		if(typeof $.fn.matchHeight !== "undefined"){
			$('.equal').matchHeight({
				//defaults
				byRow: true,
				property: 'height', // height or min-height
				target: null,
				remove: false
			});
		}

		// Animations http://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
		function onScrollInit( items, trigger ) {
			items.each( function() {
				var osElement = $(this),
					osAnimationClass = osElement.data('os-animation'),
					osAnimationDelay = osElement.data('os-animation-delay');

				osElement.css({
					'-moz-animation-delay':     osAnimationDelay,
					'animation-delay':          osAnimationDelay,
					'-webkit-animation-delay':  osAnimationDelay
				});

				var osTrigger = ( trigger ) ? trigger : osElement;

				if(typeof $.fn.waypoint !== "undefined"){
					osTrigger.waypoint(function() {
						osElement.addClass('animated').addClass(osAnimationClass);
					},{
						triggerOnce: true,
						offset: '100%'
					});
				}
			});
		}
		onScrollInit($('.os-animation'));

		//#Smooth Scrolling
		$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
					&&
					location.hostname == this.hostname
				) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					// Does a scroll target exist?
					if (target.length) {
						// Only prevent default if animation is actually gonna happen
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000, function() {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
								return false;
							} else {
								$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
								$target.focus(); // Set focus again
								$target.removeAttr('tabindex'); // Remove the tabindex so it doesn't show up in Macs Screen Reader Form Controls
							};
						});
					}
				}
			});

		/*global jQuery */
		/*!
		* FlexVerticalCenter.js 1.0
		*
		* Copyright 2011, Paul Sprangers http://paulsprangers.com
		* Released under the WTFPL license
		* http://sam.zoy.org/wtfpl/
		*
		* Date: Fri Oct 28 19:12:00 2011 +0100
		*/
		$.fn.flexVerticalCenter = function( options ) {
			var settings = $.extend({
				cssAttribute:   'margin-top', // the attribute to apply the calculated value to
				verticalOffset: 0,            // the number of pixels to offset the vertical alignment by
				parentSelector: null,         // a selector representing the parent to vertically center this element within
				debounceTimeout: 25,          // a default debounce timeout in milliseconds
				deferTilWindowLoad: false     // if true, nothing will take effect until the $(window).load event
			}, options || {});

			return this.each(function(){
				var $this   = $(this); // store the object
				var debounce;

				// recalculate the distance to the top of the element to keep it centered
				var resizer = function () {
					var parentHeight = (settings.parentSelector && $this.parents(settings.parentSelector).length) ?
						$this.parents(settings.parentSelector).first().height() : $this.parent().height();
					$this.css(
						settings.cssAttribute, ( ( ( parentHeight - $this.height() ) / 2 ) + parseInt(settings.verticalOffset) )
					);
				};
				// Call on resize. Opera debounces their resize by default.
				$(window).resize(function () {
					clearTimeout(debounce);
					debounce = setTimeout(resizer, settings.debounceTimeout);
				});
				if (!settings.deferTilWindowLoad) {
					// call it once, immediately.
					resizer();
				}
				// Call again to set after window (frames, images, etc) loads.
				$(window).load(function () {
					resizer();
				});
			});
		};
		$('.v-align').flexVerticalCenter();

		// Remove matchHeight on document center pages
		if($('#RZdocument_center').length){
			$('.aside,.entry').matchHeight({remove:true});
			if(window.matchMedia("(min-width: 992px)").matches){
				setInterval(function(){
					if($('.post').outerHeight() + 300 > $('.entry').outerHeight()){
						$('.aside').css('height',$('.entry').outerHeight() + 'px');
					}
				}, 200);
			}
		}
	}); // Ready
})(jQuery);
