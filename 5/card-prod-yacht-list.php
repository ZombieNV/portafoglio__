<?php include 'header-1.php'; ?>
					<a href="index.php#avto">Автомобили</a>
					<a href="index.php#house">Недвижимость</a>
					<a href="index.php#yacht">Яхты</a>
<?php include 'header-2.php'; ?>
					<a href="index.php#avto">Автомобили</a>
					<a href="index.php#house">Недвижимость</a>
					<a href="index.php#yacht">Яхты</a>
<?php include 'header-3.php'; ?>
<div class="wrap">
	<ul class="breadcrumb">
		<li><a href="index.php">Главная ></a></li>
		<li><a href="#">Хорватия ></a></li>
		<li><a href="#">Azimut ></a></li>
		<li><a href="#">62 ></a></li>
	</ul>
	<div class="headline-card-prod">
		<p class="top-name-prod">Azimut 62 Fly, 2005</p>
		<div class="nav-card-prod">
			<a href="#" class="prev-card">&larr;&nbsp; Назад</a>
			<a href="#" class="next-card">Следующее авто &nbsp;&rarr;</a>
		</div>
	</div>
</div>


<div class="block-card-wrap">
	<div class="block-drop-down-message drop-yaht">
		<input id="drop-message-visible" name="accordion-1" type="checkbox">
		<label for="drop-message-visible">
			<span class="exclamation-point"></span>
			<span>G2g.com.ua поможет вам полностью привести / растаможить и вы получите вашу яхту у ворот своего дома.</span>
			<span class="red-plus"></span>
		</label>

		<div class="block-drop-down-message-hide">
			<p>Наша Команда произведёт осмотрет пригленувшимуся вами яхте , все изъяны оповестит вас и покажет видиом до приобретения.</p>
			<ul>
				<li>После вашего согласия,</li>
				<li>-яхта будит куплена,</li>
				<li>-поднята с воды,</li>
				<li>-произведена погрузка,</li>
				<li>-транспортировка,</li>
				<li>-растоможка (обмолютно  официальная вы получите все чеки проплаты на руки).</li>
			</ul>
			<p>Доставим до вашего дома или в указаный вами яхт клуб.</p>
			<p class="text-mark">*Если габариты яхты  больше чем <span>9 м</span> в длину, шире чем <span>2.5 м</span>, весом больше чем <span>2500 кг</span> и высота максимум <span>4 м</span> то  напешите нам для получения расчёта стоимости</p>

			<div class="drop-down-message-contact">
				<a href="mailto:G2g.supp.@gmail.com"><div class="ico-email"></div><p>G2g.supp.@gmail.com</p></a>
				<div class="drop-mess-block">
					<a href="viber://chat?number=+380985143906" class="viber"></a>
					<a href="https://wa.me/380985143906" class="whatsapp"></a>
					<a href="#" class="telegram"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="block-card-top">
		<div class="slider-slick">
			<div class="slider-single">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
			</div>
			<div class="slider-nav">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
				<img src="img/yacht-main.jpg" alt="">
			</div>
		</div>
		<div class="block-info-card-1">
			<div class="card-price-mil">
				<div class="price-card">
					<div class="price-usd">10 000S</div>
					<div class="price-ua">239 455 грн.</div>
				</div>
				<div class="block-buttons-modal">
					<div class="block-buttons">
						<div class="ico-calculation"></div>
						<div class="buttons-modal">
							<a href="#" class="calculation link-modal"><p>Рассчитать импорт</p></a>
						</div>
					</div>
				</div>

				<div id="modal" class="modal modal-yaht">
					<form onsubmit="return false">
						<div class="block-modal-head">
							<img src="img/logo-modal.png" alt="">
							<div class="block-modal-head-text">
								<div>
									<span>.</span><p>Купим</p>
								</div>
								<div>
									<span>.</span><p>Растоможим</p>
								</div>
								<div>
									<span>.</span><p>Доставим до дома</p>
								</div>
							</div>
						</div>

						<div class="modal-input">
							<p>Стоимость Яхты в Европе</p>
							<input type="number" step="any"  onkeydown="if (event.keyCode == 69 || event.keyCode == 189) return false" class="input-small">
						</div>
						<div class="block-select-modal-price">
							<p>Валюта</p>
							<input type="radio" id="modal-price-1" name="modal-price" class="del radio_option">
							<label for="modal-price-1">$ Доллар</label>
							<input type="radio" id="modal-price-2" name="modal-price" class="del radio_option" checked>
							<label for="modal-price-2">€ Евро</label>
						</div>
						<div class="modal-input">
							<p>Вес (кг)</p>
							<input max="2500" step="any" type="number" onkeydown="if (event.keyCode == 69 || event.keyCode == 189) return false">
						</div>
						<div class="modal-input">
							<p>Длина (м)</p>
							<input max="9" type="number" step="any" onkeydown="if (event.keyCode == 69 || event.keyCode == 189) return false">
						</div>
						<div class="modal-input">
							<p>Ширина (м)</p>
							<input max="2.5" type="number" step="any" onkeydown="if (event.keyCode == 69 || event.keyCode == 189) return false">
						</div>
						<div class="modal-input">
							<p>Высота борта</p>
							<input max="4" type="number" step="any" onkeydown="if (event.keyCode == 69 || event.keyCode == 189) return false">
						</div>
						<button id="ok" type="submit" class="ok">Расчитать стоимость</button>
						<div class="result-modal"><p>Общая сумма</p><input id="sum" type="text"><p id="hide-modal-price-1" style="display:none;">дол</p><p id="hide-modal-price-2">евро</p></div>
						<p class="text-mark">*Достовляем любого размера яхты, но если габариты яхты  больше чем <span>9 м</span> в длину, шире чем <span>2.5 м</span>, весом больше чем <span>2500 кг</span> и высота максимум <span>4 м</span> то  напешите нам для получения расчёта стоимости</p>


						<div class="drop-down-message-contact">
							<a href="mailto:G2g.supp.@gmail.com"><div class="ico-email"></div><p>G2g.supp.@gmail.com</p></a>
							<div class="drop-mess-block">
								<a href="viber://chat?number=+380985143906" class="viber"></a>
								<a href="https://wa.me/380985143906" class="whatsapp"></a>
								<a href="#" class="telegram"></a>
							</div>
						</div>
					</form>
					<div id="modal-close" class="modal-close"></div>
				</div>
				<div class="overlay"></div>

			</div>
			<div class="card-person">
				<div class="seller-block-1">
					<img src="img/person-6.png" alt="">
					<div class="seller-block-1-1">
						<p>Продавец </p>
						<p class="name-seller">Тимур</p>
						<p>Хорватия</p>
						<div class="last-time"><div class="last-time-img"></div> <p>На сайте был сегодня в 09:46</p></div>
					</div>
				</div>
				<div class="verified-tel"><div class="verified-tel-ico"></div><p>Проверенный телефон</p></div>
				<div class="tel-seller"><div class="ico-tel"></div><p>(066) xxx xx xx</p><a href="tel:+380985143906">Показать</a></div>
				<div class="person-mess">
					<a href="#" class="telegram"></a>
					<a href="viber://chat?number=+380985143906" class="viber"></a>
					<a href="https://wa.me/380985143906" class="whatsapp"></a>
				</div>
				<div class="tel-seller"><div class="ico-tel"></div><p>(066) xxx xx xx</p><a href="tel:+380985143906">Показать</a></div>
				<div class="imail"><div class="ico-imail-card"></div> timur@gmail.com</div>
				<a href="#" class="more-ads">Другие объявления продавца</a>
				<a href="#" class="complaint">Жалоба</a>
			</div>
			<p>Объявление создано 10 мая</p>
			<p>ID авто 26495767</p>
			<p>Просмотров авто 2018</p>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="info-prod-center">
		<div class="block-info-card-2">
			<ul class="block-info-card">
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Брэнд, год:&nbsp;</b><p>Azimut 62 Fly, 2005</p></div></li>
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Тип:&nbsp;</b><p>моторная лодка / моторная яхта</p></div></li>
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Мощность:&nbsp;</b><p>2 x 1.015 л.с. (747 кВт)</p></div></li>
			</ul>

			<ul class="block-info-card">
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Длина:&nbsp;</b><p>19 м (62,3 футов)</p></div></li>
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Ширина:&nbsp;</b><p>19 м (62,3 футов)</p></div></li>
				<li><div class="ul-info-point">.</div><div class="text-c"><b>Материал корпуса:&nbsp;</b><p> Сталь</p></div></li>
			</ul>
		</div>
		<div class="block-info-card-ul-info">
			<ul>
				<li><div class="ul-info-point">.</div><p><b>Топливо: </b>Безин</p></li>
				<li><div class="ul-info-point">.</div><p><b>Осадка: </b>2м</p></li>
				<li><div class="ul-info-point">.</div><p><b>Порт: </b>Шибеник, Хорватия</p></li>
				<li><div class="ul-info-point">.</div><p><b>Год: </b>2005 (обновление 2012, 2019)</p></li>
				<li><div class="ul-info-point">.</div><p><b>Каюты: </b>3 на 6 гостей (+ экипаж)</p></li>
				<li><div class="ul-info-point">.</div><p><b>Есть: </b>туалет, душ, gps, авторулевой, опреснитель, шлюпка, АИС</p></li>
				<li><div class="ul-info-point">.</div><p><b>Скорость: </b>60уз</p></li>
				<li><div class="ul-info-point">.</div><p><b>Площадь паруссов: </b>48м2</p></li>
			</ul>
			<ul>
				<li><div class="ul-info-point">.</div><p><b>Грузоподёмность: </b>32т</p></li>
				<li><div class="ul-info-point">.</div><p><b>Водоизмещение: </b>5т</p></li>
				<li><div class="ul-info-point">.</div><p><b>Состояние: </b>Б/у</p></li>
				<li><div class="ul-info-point">.</div><p><b>Вес лодки: </b>30000кг</p></li>
				<li><div class="ul-info-point">.</div><p><b>Каюты: </b>3 на 6 гостей (+ экипаж)</p></li>
				<li><div class="ul-info-point">.</div><p><b>Вес балласта: </b>70кг</p></li>
				<li><div class="ul-info-point">.</div><p><b>Запасы пресной воды: </b>36л</p></li>
				<li><div class="ul-info-point">.</div><p><b>Запасы топлива: </b>34л</p></li>
			</ul>
		</div>
		<div class="block-info-card-4">
			<div class="description-card">
				<p>Описание</p>
				<div class="ico-leng-card">
					<img src="img/russia.svg" alt="">
					<a href="#"><div class="ico-trans"></div><p>перевод</p></a>
					<img src="img/italy.svg" alt="">
				</div>
			</div>
			<p>Спортивная и элегантная семейная яхта с 3 каютами в Хорватии. Эта яхта сочетает в себе классические линии и современный дизайн, роскошь и комфорт. Она в отличном техническом состоянии, вмещает 6 гостей и предлагает просторный флайбридж для отдыха.</p>
		</div>
		<a href="#" class="print"><div class="ico-print"></div><p>Распечатать объявление</p></a>

		<div class="block-list-torg">
			<p>Предложения</p>
			<p><span>Обмен и торг</span> 3к квартиру 64.3 кв. м на</p>
			<p><span>Тип: </span> Любой</p>

			<div id="list-torg-1" class="list-torg">
				<div class="img-list-torg">
					<img src="img/home-4.jpg" alt="">
					<p>Предлагаю участок со своей доплатой</p>
					<p>(сумма доплаты не указана)</p>
				</div>
				<div class="block-list-torg-comm">
					<div class="list-torg-comm">
						<div class="date-list-torg">
							<p class="name-list-torg">Тимур</p>
							<div>
								<p>18.03. 2020г.,</p>
								<p> 11:28</p>
							</div>
						</div>
						<p>Предлагаю участок со своей доплатой</p>
						<p>Сколько нужно доплатить?</p>
					</div>
					<div class="list-torg-comm">
						<div class="date-list-torg">
							<div>
								<p>18.03. 2020г.,</p>
								<p>14:27</p>
							</div>
							<p class="name-list-torg">Артем</p>
						</div>
						<div class="answer-list-torg">
							<p>Предлагаю участок со своей доплатой</p>
							<p>Сколько нужно доплатить?</p>
						</div>
					</div>
				</div>
			</div>
			<form id="list-torg-1-1" class="form-list-torg">
				<div class="img-list-torg">
					<img src="img/home-4.jpg" alt="">
					<p>Предлагаю участок со своей доплатой</p>
					<p>(сумма доплаты не указана)</p>
				</div>
				<div class="choices-pay">
					<div class="choice-pay pay-but">
						<input type="radio" name="choices-pay" id="no-pay" class="del">
						<label for="no-pay">Отклонить обмен</label>
					</div>
					<div class="choice-pay pay-but">
						<input type="radio" name="choices-pay" id="ok-pay" class="del">
						<label for="ok-pay">Принять обмен</label>
					</div>
					<div class="choice-pay">
						<select id="choice-pay-sel" class="choice-pay-sel">
							<option value="choice-pay-comm">Предложить</option>
							<option value="choice-pay-comm">Равноценный обмен</option>
							<option class="pay-sel-opt-1" value="you-pay">Ваша доплата</option>
							<option class="pay-sel-opt-2" value="my-pay">Моя доплата</option>
						</select>
					</div>
				</div>
				<textarea class="choice-pay-comm" placeholder="Довавить комментарий"></textarea>
				<div class="form-sel user-pay you-pay">
					<p>Ваша доплата</p>
					<input type="number">
					<select class="price-sel">
						<option value="Выбрать" selected>$</option>
						<option value="Выбрать">€</option>
						<option value="Выбрать">₴</option>
						<option value="Выбрать">₽</option>
					</select>
				</div>
				<div class="form-sel user-pay my-pay">
					<p>Моя доплата</p>
					<input type="number">
					<select class="price-sel">
						<option value="Выбрать" selected>$</option>
						<option value="Выбрать">€</option>
						<option value="Выбрать">₴</option>
						<option value="Выбрать">₽</option>
					</select>
				</div>
				<input type="submit" value="Отправить">
			</form>
			<div id="list-torg-2" class="list-torg list-torg-1">
				<div class="img-list-torg">
					<img src="img/home-3.jpg" alt="">
					<p>Предлагаю участок со своей доплатой</p>
					<p>Доплата: <span>10 000$</span></p>
				</div>
				<div class="block-list-torg-comm">
					<div class="list-torg-comm">
						<div class="date-list-torg">
							<p class="name-list-torg">Артем</p>
							<div>
								<p>18.03. 2020г.,</p>
								<p> 11:28</p>
							</div>
						</div>
						<p>Согласен если доплатите <span>20 000$</span></p>
					</div>
					<div class="list-torg-comm">
						<div class="date-list-torg">
							<div>
								<p>18.03. 2020г.,</p>
								<p>14:27</p>
							</div>
							<p class="name-list-torg answer-list-torg">Ваня</p>
						</div>
						<div class="answer-list-torg">
							<p>Согласен доплатить <span>15 000$</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="chats">
		<div class="chat">
			<form class="send-mess">
				<input type="text" placeholder="Написать .....">
				<input type="submit" value="Отправить комментарий" class="search-button-list">
			</form>
		
			<div class="block-coments">
				<div class="user-1">
					<img src="img/person-2.png" alt="" class="photo-user-1">
					<div class="mess-user">
						<div class="info-comm-user">
							<div class="user-name">Руслан</div>
							<p class="last-time-user">3 мин назад</p>
							<div class="ico-leng-card">
								<img src="img/russia.svg" alt="">
								<a href="#"><div class="ico-trans"></div><p>перевод</p></a>
								<img src="img/italy.svg" alt="">
							</div>
						</div>
						<p class="content-mess">Хочу предложить 5000$.  Договоримся?</p>
						<a href="#" class="chat-answer">Ответить</a>
					</div>
				</div>
		
				<div class="user-admin">
					<img src="img/person-3.png" alt="" class="photo-admin">
					<div class="mess-user">
						<div class="info-comm-user">
							<div class="user-name">Артем</div>
							<span>Admin</span>
							<div class="arrow-admin"></div>
							<p class="last-time-user">2 мин назад</p>
						</div>
						<p class="content-mess">Подумаю</p>
					</div>
				</div>
		
				<div class="user-2">
					<img src="img/person-4.png" alt="" class="photo-user-1">
					<div class="mess-user">
						<div class="info-comm-user">
							<div class="user-name">Тимур</div>
							<p class="last-time-user">3 мин назад</p>
						</div>
						<p class="content-mess">Можем обговорить детали?</p>
						<a href="#" class="chat-answer">Ответить</a>
					</div>
				</div>
			</div>
		</div>
		<div class="chat">
			<form class="send-mess">
				<input type="text" placeholder="Написать .....">
				<input type="submit" value="Предложить торг" class="search-button-list">
			</form>

			<div class="block-coments">
				<div class="user-1">
					<img src="img/person-2.png" alt="" class="photo-user-1">
					<div class="mess-user">
						<div class="info-comm-user">
							<div class="user-name">Руслан</div>
							<p class="last-time-user">3 мин назад</p>
							<div class="ico-leng-card">
								<img src="img/russia.svg" alt="">
								<a href="#"><div class="ico-trans"></div><p>перевод</p></a>
								<img src="img/italy.svg" alt="">
							</div>
						</div>
						<p class="content-mess">Хочу предложить 5000$.  Договоримся?</p>
						<a href="#" class="chat-answer">Ответить</a>
					</div>
				</div>

				<div class="user-2">
					<img src="img/person-4.png" alt="" class="photo-user-1">
					<div class="mess-user">
						<div class="info-comm-user">
							<div class="user-name">Тимур</div>
							<p class="last-time-user">3 мин назад</p>
						</div>
						<p class="content-mess">Можем обговорить детали?</p>
						<a href="#" class="chat-answer">Ответить</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>

<?php include 'footer-1.php'; ?>
	<a href="index.php#avto">Автомобили</a>
	<a href="index.php#house">Недвижимость</a>
	<a href="index.php#yacht">Яхты</a>
<?php include 'footer-2.php'; ?>