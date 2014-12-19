"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');



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




	// описание
	(function Videos()
	{
		var $videos = $('#videos');

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


});