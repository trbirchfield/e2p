/**
 * Avoid console errors in browsers that lack a console.
 */
(function() {
	var method;
	var noop = function() {};
	var methods = [
		'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});

	while (length--) {
		method = methods[length];
		if (!console[method]) {
			console[method] = noop;
		}
	}
})();

window.sr = new scrollReveal({
	vFactor:  0.15,
});

(function() {
	// Init Fancybox
	$('.fancybox').fancybox({
		openEffect: 'elastic',
		closeEffect: 'elastic',
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	$('.fancybox-media').fancybox({
		openEffect: 'elastic',
		closeEffect: 'elastic',
		helpers : {
			overlay: {
				locked: false
			},
			media : {}

		}
	});

	// Init localScroll
	$('[data-scroll]').localScroll();

	// Hide search field and mobile menu when "sign up" button is clicked
	$('[href*="#signup"]').on('click', function() {
		$('body').removeClass('search-open');
		$('body').removeClass('menu-open');
	});

	// Toggle events
	$('[data-toggle]').on('click', function(e) {
		e.preventDefault();
		var self = $(this);
		if (self.data('toggle') === 'mobile-search') {
			$('body').removeClass('menu-open');
			$('body').toggleClass('mobile-search-open');
		} else if (self.data('toggle') === 'primary-nav') {
			$('body').removeClass('search-open');
			$('body').toggleClass('menu-open');
		}
	});

	// Manual modal closing
	$('[data-modal-close]').on('click', function(e) {
		e.preventDefault();
		var modal = $(this).data('modal-close');
		$('#' + modal).foundation('reveal', 'close');
	});

	// Toggle submenus
	$('.has-dropdown > a').on('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).parent('li').toggleClass('active');
	});

	$('html').click(function() {
		$('.has-dropdown').removeClass('active');
	});
}());

/**
 * Growl notifications
 */
(function($) {
	$.growl = function(userOptions) {
		var defaultOptions = {
			title: 'Please enter a title.',
			message: 'Please enter a message.',
			type: '',
			target: '.growls'
		};

		var options  = $.extend({}, defaultOptions, userOptions || {});
		var $item    = $('<li></li>').addClass('growl').addClass(options.type);
		var $title   = $('<div></div>').addClass('growl-title').html(options.title);
		var $message = $('<div></div>').addClass('growl-message').html(options.message);

		$item.on('click', function() {
			$(this).remove();
		});

		$(options.target).append($item.append($title).append($message));
	};

	$.fn.growl = function() {
		this.find('.growl:not([ng-click])').on('click', function() {
			$(this).remove();
		});
	};
})(jQuery);

/**
 * Global loading animation
 */
var showLoader = function() {
	$('.loading-global-container').addClass('visible');
};
var hideLoader = function() {
	$('.loading-global-container').removeClass('visible');
};


/**
 * Bootstrap Foundation.
 */
$(document).foundation();

/**
 * Bootstrap Growl messages.
 */
$('.growls').growl();

// Add a growl message.
// $.growl({
// 	title: 'jQuery plugin',
// 	message: '$.growl({ title:\'\', message:\'\', type: \'\' });',
// 	type: 'success',
// 	target: '.growls'
// });
