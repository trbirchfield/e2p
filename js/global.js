jQuery(document).ready(function($){

	function fade_header() {

		if ( $(window).width() > 300 ) {

			window_scroll = $(this).scrollTop();

			if ( window_scroll > $('#header').height() ) {

				$('#secondary-header').fadeIn();

			} else {
				
				$('#secondary-header').fadeOut('fast');

			}
		}
	}
	
	// Fading welcome message

	function detect_browser_width() {
		if ( $(window).width() > 800 ) {
			$('#header').addClass('fade');
		} else {
			$('#header').removeClass('fade');
		}	
	}
	detect_browser_width();

	$(window).resize(function() {
		detect_browser_width()
	});

	function fade_welcome() {
		if ( $(window).width() > 800 ) {

        window_scroll = $(this).scrollTop();

	   		$(".welcome").css({
				  'opacity' : 1-(window_scroll/300)
	    	});
		}
	}

	$(window).scroll(function() { fade_welcome(); });
	

	//Scroll to anchor
    $(".scrolltoanchor").click(function() {
        $.scrollTo($($(this).attr("href")), {
            duration: 950
        });
        return false;
    });

    $(document).ready(function(){
			$('#selection-door .accordion').click(function(e){
				e.preventDefault();
				$(this).closest('li').find('.content').not(':animated').slideToggle();
				$(this).toggleClass('entry entry-open');
				$('.final-marker').toggleClass('final-marker final-marker-extended');
			});
			$('#selection-door .accordion2').click(function(e){
				e.preventDefault();
				$(this).closest('li').find('.content').not(':animated').slideToggle();
				$(this).toggleClass('entry entry-open');
				$('.marker-end').toggleClass('marker-end marker-end-extended');
				$(this).toggleClass('green green-no-margin');
			});
		});
	

	
	
});