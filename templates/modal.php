

<div id="modals_container" class="b-modals md-overlay" style="display:none">





	<section id="modal_callback" class="b-modal b-callback md-modal md-effect-2">

		<a data-modal-hide="#modal_callback" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="h2 b-modal__title">Обратная связь</div><br>
		<div>Здесь вы можете оставить свое сообщение. Мы ответим вам в течение суток.</div>

		<form class="b-modal__form" name="callback" action="" method="post">
			<ul class="b-modal__fields">
				<li>
					<input name="callback_name" type="text" class="b-modal__input" placeholder="Имя" required>
				</li>
				<li>
					<input name="callback_phone" type="tel" class="b-modal__input" placeholder="Телефон" required>
				</li>
				<li>
					<input name="callback_email" type="email" class="b-modal__input" placeholder="E-mail" required>
				</li>
				<li>
					<textarea name="callback_message" class="b-modal__textarea" placeholder="Сообщение" required></textarea>
				</li>
				<li>
					<button type="submit" class="b-button b-modal__submit">Отправить</button>
				</li>
			</ul>
		</form>

	</section>










	<section id="modal_photo" class="b-modal b-fotorama md-modal md-effect-2">

		<a data-modal-hide="#modal_photo" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<button id="modal_photo_prev" class="b-fotorama__prev">prev</button>
		<button id="modal_photo_next" class="b-fotorama__next">next</button>

		<div class="fotorama" 
			data-nav="thumbs"
			data-width="100%"
			data-arrows="false"
			data-fit="cover"
			data-thumbwidth="140"
			data-thumbheight="90">

			<a class="b-examples__link" href="img/examples/1.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/1.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/2.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/2.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/3.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/3.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/4.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/4.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/5.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/5.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/6.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/6.jpg" alt="">
			</a>
		
			<a class="b-examples__link" href="img/examples/7.jpg"
			   data-caption="<span><b class='b-examples__item-title'>Объект автономного газоснабжения частного дома</b><i class='b-examples__item-subtitle'>Поставка оборудования, монтаж, пуско-наладочные работы</i></span>">
				<img src="img/examples/7.jpg" alt="">
			</a>

		</div>

	</section>





	<section id="modal_excursion" class="b-modal b-excursion md-modal md-effect-2">

		<a data-modal-hide="#modal_excursion" class="b-modal__close _invert md-close" href="#" title="Закрыть"></a>

		<div class="h2 b-modal__title">Хочу заказать экскурсию,<br>пожалуйста, перезвоните мне.</div><br>

		<form class="b-modal__form" name="excursion" action="" method="post">
			<ul class="b-modal__fields">
				<li>
					<input name="excursion_name" type="text" class="b-modal__input _thin-border-focus" placeholder="Ваше имя" required>
				</li>
				<li>
					<input name="excursion_phone" type="tel" class="b-modal__input _thin-border-focus" placeholder="Телефон" required>
				</li>
				<li>
					<button type="submit" class="b-button _invert b-modal__submit">Отправить</button>
				</li>
			</ul>
		</form>

	</section>










	<section id="modal_callback_simple" class="b-modal b-callback-simple md-modal md-effect-2">

		<a data-modal-hide="#modal_callback_simple" class="b-modal__close _invert md-close" href="#" title="Закрыть"></a>

		<div class="h2 b-modal__title">Пожалуйста, перезвоните мне.</div><br>
		<div>Укажите ваши имя и телефон, и мы перезвоним вам в течение 5 минут.</div><br>

		<form class="b-modal__form" name="callback_simple" action="" method="post">
			<ul class="b-modal__fields">
				<li>
					<input name="callback_simple_name" type="text" class="b-modal__input _thin-border-focus" placeholder="Имя" required>
				</li>
				<li>
					<input name="callback_simple_phone" type="tel" class="b-modal__input _thin-border-focus" placeholder="Телефон" required>
				</li>
				<li>
					<button type="submit" class="b-button b-modal__submit _invert">Отправить</button>
				</li>
			</ul>
		</form>

	</section>








	<section id="modal_success" class="b-modal b-success md-modal md-effect-2">

		<a data-modal-hide="#modal_success" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="h2 b-modal__title">спасибо, ваша заявка принята,<br>мы вам перезвоним.</div><br>

	</section>








</div>