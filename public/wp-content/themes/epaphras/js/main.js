jQuery(document).ready(function($) {

	$('.drop-menu').hide();
	var menu_open = false;
	$('.open-menu').click(function() {
		if(!menu_open) {
			menu_open = true;
			$(this).addClass('menu-open');
		} else {
			menu_open = false;
			$(this).removeClass('menu-open');
		}
		$('.drop-menu').slideToggle(300);
	});

});