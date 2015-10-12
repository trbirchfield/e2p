angular.module('app').controller('BaseController', ['$scope', '$timeout', function($scope, $timeout) {
	// Smooth scroll back to the top of the page
	$scope.backToTop = function() {
		$('body').scrollTo('#top', 500, { axis: 'y' });
	};

	// Reveal the back to top button after scrolling more than 140px
	// and stick above the footer once it is in view.
	var stickyBackToTop = function() {
		var body            = $('body');
		var footer          = $('.site-footer');
		var footerOffset    = footer.offset();
		var footerOffsetTop = footerOffset.top;
		var scrollPosition  = body.scrollTop();
		var windowHeight    = $(window).height();

		if (scrollPosition > 140) {
			$('.back-to-top').addClass('visible');
		} else {
			$('.back-to-top').removeClass('visible');
		}

		if (scrollPosition + windowHeight > footerOffsetTop) {
			$('.back-to-top').addClass('absolute');
		} else {
			$('.back-to-top').removeClass('absolute');
		}
	};

	// Set main element min height to avoid ugly gap
	// between footer and bottom of window when there is
	// a lack of content.
	var setMainMinHeight = function() {
		var windowHeight    = $(window).height();
		var headerHeight    = $('.site-header').height();
		var heroHeight      = $('.hero').height();
		var footerHeight    = $('.site-footer').height();
		var remainingHeight = windowHeight - (headerHeight + heroHeight + footerHeight);
		$('.main').css('min-height', remainingHeight + 120);
	};

	// Handle document scroll event
	$(document).on('scroll', function() {
		stickyBackToTop();
	});

	// Handle window resize event
	$(window).on('resize', function() {
		stickyBackToTop();
		setMainMinHeight();
	});

	$timeout(function() {
		stickyBackToTop();
		setMainMinHeight();
	});
}]);
