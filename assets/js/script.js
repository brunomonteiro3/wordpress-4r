(function ($) {
	$('.main-nav__item-parent, .dropdown').hover(function(){
		$(this).parent('li').toggleClass('is-hovered');
	});

	$('.btn-menu-mobile').click(function(){
		$('.main-nav').toggleClass('is-visible');
	});
})(jQuery);