jQuery(document).ready(function($){
	function fadeHeader() {
		if ($(window).width() > 300) {
			window_scroll = $(this).scrollTop();
			if (window_scroll > $('#header').height()) {
				$('#secondary-header').fadeIn();
			} else {
				$('#secondary-header').fadeOut('fast');
			}
		}
	}
	// Fading welcome message
	function detectBrowserWidth() {
		if ($(window).width() > 800) {
			$('#header').addClass('fade');
		} else {
			$('#header').removeClass('fade');
		}
	}
	detectBrowserWidth();

	function fadeWelcome() {
		if ($(window).width() > 800) {
			window_scroll = $(this).scrollTop();
			$(".welcome").css({
				'opacity' : 1-(window_scroll/300)
			});
		}
	}
	$(window).on('scroll', function() {
		fadeWelcome();
	});

	//Scroll to anchor
	$(".scrolltoanchor").on('click', function(e) {
		e.preventDefault();
		$.scrollTo($($(this).attr("href")), {
			duration: 950
		});
	});

	$(document).on('ready', function() {
		$('#selection-door .accordion').on('click', function(e) {
			e.preventDefault();
			$(this).closest('li').find('.content').not(':animated').slideToggle();
			$(this).toggleClass('entry entry-open');
			$('.final-marker').toggleClass('final-marker final-marker-extended');
		});

		$('#selection-door .accordion2').on('click', function(e) {
			e.preventDefault();
			$(this).closest('li').find('.content').not(':animated').slideToggle();
			$(this).toggleClass('entry entry-open');
			$('.marker-end').toggleClass('marker-end marker-end-extended');
			$(this).toggleClass('green green-no-margin');
		});
	});

	// Resize expanded menus
	var headerHeight = $('.document header').height();
	function positionFooterTabs() {
		var topHeight = $(window).height() - headerHeight;
		$('.info-menu-horizontal').css('height', topHeight);

		// Make sure the tabs meet the bottom of the header
		$('.info-menu-bottom').css('bottom', -1 * topHeight);
		$('.info-menu-bottom2').css('bottom', -1 * topHeight);

		// Ensure open tabs are always on bottom
		$('.info-menu-open').css('bottom', 0);
	}
	positionFooterTabs();

	// Handle functions on window resize
	$(window).on('resize', function(e) {
		positionFooterTabs();
		detectBrowserWidth();
	});

	// Menu toggles
	var $menuBottom  = $('#info-menu-tc');
	var $showBottom  = $('#info-menu-btn');
	var $menuBottom2 = $('#info-menu-gt');
	var $showBottom2 = $('#info-menu-btn2');
	var $body        = $('body');

	// Handle toggling of menu tabs
	$showBottom.on('click', function(e) {
		e.preventDefault();

		// Reset the bottom on all to the bottom of the menu
		$('.info-menu-bottom').css('bottom', -1 * ($(window).height() - headerHeight));

		// Swap the open tags
		$('#info-menu-gt').removeClass('info-menu-open');
		classie.toggle(this, 'active');
		classie.toggle($menuBottom[0], 'info-menu-open');

		// Ensure open ones get full display
		$('.info-menu-open').css('bottom', 0);
	});
	$showBottom2.on('click', function(e) {
		e.preventDefault();

		// Reset the bottom on all to the bottom of the menu
		$('.info-menu-bottom').css('bottom', -1 * ($(window).height() - headerHeight));

		// Swap the open tags
		$('#info-menu-tc').removeClass('info-menu-open');
		classie.toggle(this, 'active');
		classie.toggle($menuBottom2[0], 'info-menu-open');

		// Ensure open ones get full display
		$('.info-menu-open').css('bottom', 0);
	});
});
