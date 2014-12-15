
<? if (!defined('NO_HEADER_FOOTER')) { ?>
	<footer class="b-footer">
		
		<div class="b-footer__top">
			<div class="b-footer__wrapper">
				<div class="b-footer__phone">
					<div><i class="icon-phone"></i> 8 800 775-12-49</div>
					<div><a class="b-footer__button" href="#">Прошу перезвонить мне</a></div>
				</div>
				<a id="goto_top" class="b-footer__goto-top _uppercase" href="#">наверх</a>
			</div>
		</div>

		<div class="b-footer__bottom">
			<div class="b-footer__wrapper">
				<div class="b-footer__bottom-left">© 2014 Фасхиммаш</div>
				<div class="b-footer__bottom-right">Разработка сайта &mdash; <a class="_underline" href="http://xdes.ru/">xDesign</a></div>
			</div>
		</div>

	</footer>
<? } ?>


</body>
</html>

<?
	if (isset($_GET['html']) || SAVE_HTML)
	{
		$html = ob_get_contents();
		ob_end_clean();
		$filename = str_replace('.php', '.html', basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

		header('Content-Type: text/html; charset=utf-8');
		if (file_put_contents($filename, $html)) echo '<h1>'.$filename.' сохранён.</h1>';
		else echo '<h1 style="color:red">Не удалось сохранить '.$filename.'</h1>';
	}
?>