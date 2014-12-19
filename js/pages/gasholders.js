"use strict";



$(function()
{
	var $window = $(window),
		$body = $('body'),
		$buttons = $('.b-tabs__buttons'),
		$contents = $('.b-tabs__contents'),
		$holder = $('.b-g__pic-holder'),
		$dimensions = $('.b-g__pic-dimensions'),
		$arrow = $('.b-g__pic-weight-arrow'),
		$counter = $('#counter'),
		template_button = _.template($('#template_tab-button').html()),
		template_content = _.template($('#template_tab-content').html()),
		typePrefix = "", // "agzs", "rez"
		groundPrefix = "", // "no", "po"
		gasholdersData = {};

	/* независимые фрагменты кода - в раздельных самовызывающихся функциях. */





	(function Prefix()
	{
		typePrefix = $('[data-type-prefix]').data("typePrefix");

		var $ground = $('[data-ground-prefix]');
		groundPrefix = $ground.filter('._current').data("groundPrefix");

		$ground.click(function(event)
		{
			event.preventDefault();
			var $this = $(this);

			if ($this.hasClass('_current')) return;
			$ground.removeClass('_current');
			$this.addClass('_current');
			groundPrefix = $this.data("groundPrefix");
			LoadGasholders();

			$('#ground_bg').toggleClass('_underground', groundPrefix == "po")
		})

	})();





	function LoadGasholders()
	{

		$.ajax({
			url: "js/pages/" + typePrefix + ".json",
			dataType: "json",
			success: function(response)
			{
				switch(groundPrefix)
				{
					case "no": drawGasholders(response["наземные"]); break;
					case "po": drawGasholders(response["подземные"]); break;
					default: console.warn("wrong ground prefix");
				}
				
			},
			error: function(jqxhr, textStatus, errorThrown)
			{
				console.error(errorThrown)
			},
		})

	}

	LoadGasholders();





	function drawGasholders(gasholders)
	{
		gasholdersData = gasholders;

		$buttons.html("");
		$contents.html("");

		for (var type in gasholdersData)
		{
			$buttons.append(template_button({ type: type, id: type.substr(4,100).slice(0,-3) }));
			$contents.append(template_content({ spec: gasholdersData[type] }));
		}

		// начальное отображение
		showTab(0);
		showImage("4.6");
		showWeight("4.6");
	}







	(function onTab()
	{
		$buttons.on("click", 'li', function()
		{
			var $this = $(this);
			showTab($this.index());
			showImage($this.attr("data-id"));
			showWeight($this.attr("data-id"));
		})
	})();








	function showTab(index)
	{
		$buttons
			.children('li')
			.removeClass('_current')
			.eq(index)
			.addClass('_current');

		$contents
			.children('li')
			.removeClass('_current')
			.eq(index)
			.addClass('_current');
	}







	function showImage(id)
	{
		$holder.removeClass('_loaded');
		$dimensions.removeClass('_loaded');

		setTimeout(function()
		{
			$holder.css("background-image", "url(img/gasholders/" + typePrefix + "_" + groundPrefix + "/" + id + ".png)").addClass('_loaded');
			$dimensions.css("background-image", "url(img/gasholders/" + typePrefix + "_" + groundPrefix + "/" + id + "size.png)").addClass('_loaded');
		}, 800);
	}





	function showWeight(id)
	{
		$arrow.removeClass('_center');
		
		setTimeout(function()
		{
			$counter.find('i').remove();
			$counter.html('<i>0</i>');
		}, 500);

		var weightText = gasholdersData["FAS-" + id + (groundPrefix == "po" ? "-ПО" : "-НО")]["Вес"],
			weightValue = parseInt(weightText, 10);

		setTimeout(function()
		{
			$arrow.addClass('_center');
			$counter
				.find('i')
				.html(weightValue)
				.countimator({duration:800, max:weightValue});
		}, 800);
	}







});