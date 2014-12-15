"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');


	/* независимые фрагменты кода - в раздельных самовызывающихся функциях. */


	// описание
	(function GoToTop()
	{
		$('#goto_top').click(function(event)
		{
			event.preventDefault();
			$('html,body').animate({scrollTop:0}, 1000);
		});
	})();




	setTimeout(function()
	{
		$('.b-promo__top-line, .b-promo__bottom-line').addClass('_loaded');
	}, 300);



});