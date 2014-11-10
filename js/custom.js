// ADD MOBILE CLASS IF LESS THAN 514 px
(function($) {
    var $window = $(window);

    $window.resize(function resize(){
        if ($window.width() < 900) {
            return $('body').addClass('hidden');
        }

        $('body').removeClass('hidden');
    }).trigger('resize');
        
})(jQuery);

$( document ).ready(function() {

	$('.sidebar .close').on("click", function(){
		if(!$('body').hasClass('closed')){
			$('body').addClass('closed');
			$('.close .icon').removeClass('icon-menu-close').addClass('icon-menu-open');
			$('.close .title').html('Open Menu');
		} else {
			$('body').removeClass('closed');
			$('.close .icon').removeClass('icon-menu-open').addClass('icon-menu-close');
			$('.close .title').html('Close Menu');
		}
		
	});

})(jQuery);