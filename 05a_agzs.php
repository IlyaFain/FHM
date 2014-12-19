<?
	define('PAGE_TITLE', 'Резервуары АГЗС - Продукция');
?>

<? require_once('templates/header.php'); ?>


<div class="page-gasholders" data-type-prefix="agzs">




	<div class="b-promo" style="background-image: url(img/content/promo_gasholders.jpg)">
		<div class="b-promo__top-line"></div>
		<h1 class="b-promo__title">Резервуары для АГЗС</h1>
		<div class="b-promo__description">
			ООО «Фасхиммаш» является единственным полномочным неделимым и независимым дилером немецкой компании FAS.
			<br><br>
			Оборудование, которым мы комплектуем наши газгольдеры, проходит самую строгую проверку немецкими инженерами
			и имеет длительную заводскую гарантию.
		</div>
		<div class="b-promo__bottom-line"></div>
	</div>





	<section id="ground_bg" class="b-section _no-padding-bottom b-g__ground-bg">

		<h2 class="b-section__title">Мы производим резервуары для АГЗС двух исполнений:</h2>

		<div class="b-g__ground-switch">
			<a data-ground-prefix="no" class="h2 b-g__ground-switch-item _current" href="#">наземные</a>
			<a data-ground-prefix="po" class="h2 b-g__ground-switch-item" href="#">подземные</a>
		</div>



		<div class="b-section__content">


			<div class="b-g__pic">
				<div class="b-g__pic-holder"><img src="" alt=""></div>
				<div class="b-g__pic-weighter"></div>
				<div class="b-g__pic-weight">
					<span id="counter"><i></i></span> кг
					<i class="b-g__pic-weight-arrow"></i>
				</div>
				<div class="b-g__pic-dimensions"><img src="" alt=""></div>
			</div> 


			<div class="b-g__spec">

				<div class="h3">Технические характеристики резервуаров</div>

				<div class="b-tabs">
					<ul class="b-tabs__buttons">
						
					</ul>
					<ul class="b-tabs__contents">
						
					</ul>

					<script type="text/template" id="template_tab-button">
						<li data-id="<%=id%>">
							<%=type%>
						</li>
					</script>

					<script type="text/template" id="template_tab-content">
						<li>
							<dl>
								<% for (var param in spec) { %>
									<dt><%=param%></dt><dd><%=spec[param]%></dd>
								<% } %>
							</dl>
						</li>
					</script>
				</div>
			</div>


		</div>

	</section>






	<section class="b-section">

		<h2 class="b-section__title _bottom-bar">Преимущества</h2>

		<div class="b-section__content">

			<div class="b-advantages">
				<ul class="b-advantages__list">
					<li class="b-advantages__item _montage">
						<span>Быстрый монтаж и&nbsp;наладка</span>
					</li>
					<li class="b-advantages__item _review">
						<span>Возможность наружного осмотра поверхности резервуара</span>
					</li>
					<li class="b-advantages__item _defence">
						<span>Нет&nbsp;необходимости в&nbsp;установке протекторной защиты </span>
					</li>
					<li class="b-advantages__item _system">
						<span>Возможность применения в&nbsp;составе любой технологической системы</span>
					</li>
					<li class="b-advantages__item _cold">
						<span>Возможность применения в&nbsp;климатических зонах с&nbsp;низкой температурой</span>
					</li>
				</ul>

				<div class="b-advantages__text">Свободное движение СУГ&nbsp;к насосному оборудованию обеспечивает его&nbsp;стабильную работу и&nbsp;подачу газа на&nbsp;ТРК (Топливо раздаточную колонку) и&nbsp;ПНБ (Пункт наполнения балонов), в&nbsp;независимости от&nbsp;качества газа Соблюдение требований Промышленной безопасности как&nbsp;при разработке конструкции резервуара, так&nbsp;и в&nbsp;процессе изготовления, обеспечивают надежность и&nbsp;безопасность резервуара и&nbsp;всей системы. При&nbsp;регистрации резервуаров и&nbsp;получении лицензии на&nbsp;эксплуатацию системы не&nbsp;возникнет сложностей даже в&nbsp;случае ужесточения действующих норм и&nbsp;Правил.</div>
			</div>

		</div>
	</section>






	<section class="b-section _top-line">

		<h2 class="b-section__title _bottom-bar">Примеры установки</h2>

		<div class="b-section__content">

			<div class="b-examples">
				<a href="#"><img src="img/examples/1.jpg" alt=""></a>
				<a href="#"><img src="img/examples/2.jpg" alt=""></a>
				<a href="#"><img src="img/examples/3.jpg" alt=""></a>
				<a href="#"><img src="img/examples/4.jpg" alt=""></a>
				<a href="#"><img src="img/examples/5.jpg" alt=""></a>
				<a href="#"><img src="img/examples/6.jpg" alt=""></a>
				<a href="#"><img src="img/examples/7.jpg" alt=""></a>
			</div>

		</div>
	</section>








	<section class="b-section _no-padding-top">

		<h2 class="b-section__title _bottom-bar">Сертификаты</h2>

		<div class="b-section__content">

			<div class="b-cert">
				<a data-litebox href="img/certificates/big-1.jpg"><img src="img/certificates/small-1.jpg" alt=""></a>
				<a data-litebox href="img/certificates/big-2.jpg"><img src="img/certificates/small-2.jpg" alt=""></a>
				<a data-litebox href="img/certificates/big-3.jpg"><img src="img/certificates/small-3.jpg" alt=""></a>
			</div>

		</div>
	</section>







</div>


<? antiCache('js/pages/gasholders.js'); ?>


<? require_once('templates/footer.php'); ?>