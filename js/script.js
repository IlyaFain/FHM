"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');




	// Ссылка "наверх"
	(function GoToTop()
	{
		$('#goto_top').click(function(event)
		{
			event.preventDefault();
			$('html,body').animate({scrollTop:0}, 1000);
		});
	})();






	// Расположение видео
	(function Videos()
	{
		var $videos = $('#videos');
		if (!$videos.length) return;

		imagesLoaded($videos[0], function()
		{
  			$videos.masonry({ columnWidth: 116, gutter: 0});
		});

		$videos.children().each(function(index, element)
		{
			var $this = $(element),
				src= $this.find('img').attr("src");
				console.log($this, src);
			$this.css("background-image", "url(" + src + ")");
		});
	})();







	// Эффекты на установке комплексов
	(function Videos()
	{
		$('.stages__item').addClass('_faded');

		$('.stages__item').waypoint(function() {
	  		$(this).removeClass('_faded');
		}, { offset: $window.height() - 150 });

	})();







	// Выпадающее меню на "оборудовании"
	(function GearMenu()
	{
		if (!$('.page-gear').length) return;

		var $menu = $('.inside-menu');

		$('.h1--opening').click(function(event)
		{
			event.preventDefault();
			event.stopPropagation();

			$menu.toggleClass('_open');
		});

		$body.click(function()
		{
			if ($menu.hasClass('_open')) $menu.removeClass('_open');
		});

		$menu.click(function(event)
		{
			event.stopPropagation();
		})

	})();






	// Приезжающие полоски
	(function Stripes()
	{
		setTimeout(function()
		{
			$('.b-promo__top-line, .b-promo__bottom-line').addClass('_loaded');
		}, 300);
	})();








});