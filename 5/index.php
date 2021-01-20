<?php include 'header-1.php'; ?>
					<a href="#avto">Автомобили</a>
					<a href="#house">Недвижимость</a>
					<a href="#yacht">Яхты</a>
<?php include 'header-2.php'; ?>
					<a href="#avto">Автомобили</a>
					<a href="#house">Недвижимость</a>
					<a href="#yacht">Яхты</a>
<?php include 'header-3.php'; ?>
	<div class="wrap">
		<div class="block-1">
			<div class="search">
				<div class="head-search">
					<div class="ico"></div><h2>Все авто</h2>
				</div>
				<form action="list-avto.php">
					<select name="type" class="type">
						<optgroup label="Легковые">
							<option value="r1">Легковые</option>
						</optgroup>
					</select>
					<select name="type" class="brend">
						<optgroup label="Марка">
							<option value="r1">Марка</option>
						</optgroup>
					</select>
					<select name="type" class="model">
						<optgroup label="Модель">
							<option value="r1">Модель</option>
						</optgroup>
					</select>
					<select name="type" class="region">
						<optgroup label="Регион">
							<option value="r1">Регион</option>
						</optgroup>
					</select>
					<div class="years">
						<select name="type" class="year-from">
							<optgroup label="Год от">
								<option value="r1">Год от</option>
							</optgroup>
						</select>
						<select name="type" class="year-to">
							<optgroup label="Год до">
								<option value="r1">Год до</option>
							</optgroup>
						</select>
					</div>
					<div class="price">
						<select name="type" class="price-from">
							<optgroup label="Цена от">
								<option value="r1">Цена от</option>
							</optgroup>
						</select>
						<select name="type" class="price-to">
							<optgroup label="Цена до">
								<option value="r1">Цена до</option>
							</optgroup>
						</select>
					</div>
					<div class="buttons">
						<a href="advanced-car-search.php" class="button-lot-search">Расширенный поиск</a>
						<div class="button-search">
							<div class="ico-seach"></div>
							<input type="submit" value="Поиск">
						</div>
					</div>
				</form>
			</div>
			<div class="slider-block">
				<h2><span>топ</span> - топ</h2><br>
				<!-- Slider -->

				<div class="slider-body">
					<div class="slider">
						<div class="slider-inner">
							<div class="slider__wrapper">
								<a href="card-prod-avto.php" class="slider__item">
									<div class="slider-img"><img src="img/slide1.jpg" alt=""></div>
									<div class="text-prod">
										<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
										<div class="text-slide-1">
											<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
										</div>
										<div class="text-slide-2">
											<p>40 000 $</p><p>123 780грн</p>
										</div>
									</div>
								</a>
								<a href="card-prod-avto.php" class="slider__item">
									<div class="slider-img"><img src="img/slide2.jpg" alt=""></div>
									<div class="text-prod">
										<p class="text-slide">Suzuki Swift Vehicle Lease 2020</p>
										<div class="text-slide-1">
											<p>Бензин: 5л</p><p>Типтроник</p><p>Полний привод</p>
										</div>
										<div class="text-slide-2">
											<p>90 000 $</p><p>193 780грн</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<a class="slider__control slider__control_left" href="#" role="button"></a>
						<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
					</div>
				</div>
				<div class="block-text-slider">
					<h1>О нас</h1>
					<ul>
						<li>У нас можно: продать недвижимость в Украине; купить недвижимость в Украине; аренда жилья; купить жилье в новостройках и т.д.</li>
						<li>У нас можно: продать авто в Украине; купить авто в Украине; б/у авто и т.д.</li>
						<li>У нас можно: продать яхту в Украине; купить яхту в Украине;  и т.д.</li>
					</ul>
				</div>
				<a href="#" class="top-img">Топ</a>
			</div>
		</div>
		<h1>Категории</h1>
		<div class="block-2">
			<a href="list-avto.php" class="cat-block">
				<div class="cat1">
					<img src="img/prod-1.png" alt="">
					<h2>Авто</h2>
				</div>
			</a>
			<a href="list-yaht.php" class="cat-block">
				<div class="cat2">
					<img src="img/prod-2.png" alt="">
					<h2>Яхты</h2>
				</div>
			</a>
			<a href="list-home.php" class="cat-block">
				<div class="cat3">
					<img src="img/prod-3.png" alt="">
					<h2>Недвижимость</h2>
				</div>
			</a>
		</div>
	</div>
	<div id="avto"></div>
	<div class="block-3">
		<div class="cat-slider">
			<h1>Топ предложения авто</h1>
			<div class="slider-body">
				<div class="slider">
					<div class="slider-inner">
						<div class="slider__wrapper">
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
							<a href="card-prod-avto.php" class="slider__item">
								<div class="slider-img"><img src="img/1.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>40 000 $</p><p>123 780грн</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<a class="slider__control slider__control_left" href="#" role="button"></a>
					<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
				</div>
			</div>
			<div id="yacht"></div>
		</div>
		<div class="cat-slider">
			<h1>Топ предложения яхт</h1>
			<div class="slider-body">
				<div class="slider">
					<div class="slider-inner">
						<div class="slider__wrapper">
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/3.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">AFRICA I, 908е6</p>
									<div class="text-slide-1">
										<p>Бензин: 3л</p><p>Типтроник</p><p>Полний привод</p>
									</div>
									<div class="text-slide-2">
										<p>32 657$</p><p>80 657грн</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<a class="slider__control slider__control_left" href="#" role="button"></a>
					<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
				</div>
			</div>
			<div id="house"></div>
		</div>
		<div class="cat-slider">
			<h1>Топ предложения недвижимости</h1>
			<div class="slider-body">
				<div class="slider">
					<div class="slider-inner">
						<div class="slider__wrapper">
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
							<a href="#" class="slider__item">
								<div class="slider-img"><img src="img/2.jpg" alt=""></div>
								<div class="text-prod">
									<p class="text-slide">Suzuki Swift Vehicle Lease 2012</p>
									<div class="text-slide-1">
										<p>Город: Киев</p>
									</div>
									<div class="text-slide-2">
										<p>45 900 $</p><p>143 900грн</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<a class="slider__control slider__control_left" href="#" role="button"></a>
					<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer-1.php'; ?>
								<a href="#avto">Автомобили</a>
								<a href="#house">Недвижимость</a>
								<a href="#yacht">Яхты</a>
<?php include 'footer-2.php'; ?>