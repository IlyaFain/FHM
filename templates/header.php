<?
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	date_default_timezone_set('Europe/Moscow');

	define('SITE_TITLE', 'ФХМ');

	define('SAVE_HTML', false);
	if (isset($_GET['html']) || SAVE_HTML) ob_start();
?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=PAGE_TITLE;?> | <?=SITE_TITLE;?></title>

	<script src="js/libs/jquery-1.10.2.min.js"></script>
	<script src="js/libs/underscore-1.7.0.min.js"></script>
	<script src="js/libs/modernizr.all.min.js"></script>

	<link href="css/default/reset.css" rel="stylesheet">
	<link href="fonts/stylesheet.css" rel="stylesheet">
	<link href="img/icon/font/styles.css" rel="stylesheet">

	<link href="css/default/fxfullwidth.css" rel="stylesheet">
	<script src="js/modules/slider.js"></script>

	<link href="css/default/fx-modal.css" rel="stylesheet">
	<script src="js/modules/fx-modal.js"></script>

	<script src="js/libs/masonry.pkgd.min.js"></script>
	<script src="js/libs/imagesloaded.pkgd.min.js"></script>

	<script src="js/libs/litebox.min.edit.js"></script>
	<link href="css/default/litebox.edit.css" rel="stylesheet">

	<script src="js/libs/jquery.countimator.js"></script>

	<script src="js/libs/waypoints.min.js"></script>


	<?
		require_once("anticache.php");
		antiCache('css/common.css');
		antiCache('js/script.js');
	?>
</head>
<body>
	<noscript><b>В вашем браузере выключен javascript!</b> Полная функциональность сайта может быть недоступна.</noscript>

<div class="md-perspective">

<? if (!defined('NO_HEADER_FOOTER')) { ?>
	<header class="b-header">
		
		<a class="b-header__logo" href="#"><img src="img/logo/b-header__logo.png" alt="ФХМ"></a>

		<div class="b-header__top-line">
			<a data-modal-show="#modal_callback" class="b-header__feedback _width-180 _underline" href="#">Обратная связь</a>
			
			<div class="b-header__search">
				<form action="" method="post">
					<input class="b-header__search-field" type="text" placeholder="Поиск по сайту">
					<button class="b-header__search-button"><img src="img/icon/b-header__search.png" alt=""></button>
				</form>
			</div>
			
			<div class="b-header__phone"><i class="icon-phone"></i> 8 800 775-12-49</div>
		</div>

		<nav class="b-nav">
			
			<ul class="b-nav__list">
				<li class="b-nav__item _width-140"><a href="#" class="b-nav__link">Примеры исполнения</a></li>
				<li class="b-nav__item _width-120"><a href="#" class="b-nav__link">Продукция</a></li>
				<li class="b-nav__item _width-180 _current"><a href="#" class="b-nav__link">Оборудование и&nbsp;комплектующие</a></li>
				<li class="b-nav__item _width-140"><a href="#" class="b-nav__link">Установка комплексов</a></li>
				<li class="b-nav__item _width-140"><a href="#" class="b-nav__link">Регистрация установок</a></li>
				<li class="b-nav__item _width-180"><a href="#" class="b-nav__link">Экономическая эффективность СУГ</a></li>
				<li class="b-nav__item _width-120"><a href="#" class="b-nav__link">Контактная информация</a></li>
			</ul>

		</nav>

	</header>
<? } ?>
