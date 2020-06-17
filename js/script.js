$('document').ready(function() {
	$(window).scroll(function() {
		scrolled = window.pageYOffset || document.documentElement.scrollTop;
	    if(scrolled > 50){
	        $("#header-menu").addClass('bg-white');
	    }
	    if(50 > scrolled){
	        $("#header-menu").removeClass('bg-white');     
	    }

	})
	var offset = ($("#header-menu").offset().top);
	if (offset != 0) {
		$("#header-menu").addClass('bg-white');
	}
	$('#mobile-menu-button').click(function() {
		$('#mobile-menu').css({
			transform: 'translateX(-80vw)',

		});
	})
	$('#close-mobile-menu').click(function() {
		$('#mobile-menu').css({
			transform: 'translateX(80vw)',

		});
	})
	$('#mobile-menu').mouseleave(function() {
		$('#mobile-menu').css({
			transform: 'translateX(80vw)',

		});
	})
	$('#mobile-menu').click(function(event){
		event.stopPropagation();
	})
	$('#mobile-menu-button').click(function(event){
		event.stopPropagation();
	})
});