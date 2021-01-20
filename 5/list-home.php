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
		<li><a href="advanced-car-search.php">Поиск ></a></li>
		<li><a href="#">Продажа невдижимости</a></li>
	</ul>
	<div class="add-announcement"><p>Продажа <span>невдижимости</span></p></div>
	<div class="list-prod">
		<form id="pc-left-selection" class="left-selection">
			<div class="block-select-video">
				<div class="select-video">
					<input type="checkbox" id="only-video-1" class="del">
					<label for="only-video-1">Только с фото</label>
				</div>
				<div class="select-video">
					<input type="checkbox" id="only-video-2" class="del">
					<label for="only-video-2">Только с видео</label>
				</div>
				<div class="select-video">
					<input type="checkbox" id="only-video-3" class="del">
					<label for="only-video-3">Только с видео</label>
					<img src="img/logo-video.png" alt="logo video">
				</div>
			</div>

			<div class="block-my-select type-sel">
				<p>Я ищу</p>
				<div class="form-sel">
					<select name="type-my-select" class="type-my-select label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>

			<div class="block-select-number-home">
				<div class="select-number-home">
					<input type="checkbox" id="second-home" class="del">
					<label for="second-home" class="sel-inline">Вторичное</label>
					<input type="checkbox" id="first-home" class="del">
					<label for="first-home">Первичное</label>
				</div>
			</div>
			<div class="block-select-place-home type-sel">
				<p>Местоположение</p>
				<div class="select-place-home">
					<ul class="tabs">
						<li>
							<input type="radio" name="tabs" id="tab-1" checked>
							<label for="tab-1">Украина</label>
							<div class="tab-content">
								<div class="sel-sity">
									<select name="type-my-select" class="sel-city-2 label-sel close-sel-ico">
										<option value="Украина">Полтава</option>
									</select><br>
									<select name="type-my-select" class="sel-city-2 label-sel">
										<option value="Украина">Район города Полтава</option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<input type="radio" name="tabs" id="tab-2">
							<label for="tab-2">Заграница</label>
							<div class="tab-content tab-content-2">
								<div class="sel-sity">
									<select name="sel-city" class="sel-city-2 label-sel close-sel-ico">
										<option value="Заграница">Америка</option>
									</select><br>
									<select name="sel-city" class="sel-city-2 label-sel">
										<option value="Заграница">Район города Америка</option>
									</select>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="block-select-price-home type-sel">
				<p>Цена</p>
				<div class="select-price-home form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
					<select name="price-home" class="price-sel">
						<option value="Выбрать" selected>$</option>
						<option value="Выбрать">€</option>
						<option value="Выбрать">₴</option>
						<option value="Выбрать">₽</option>
					</select> 
				</div>
			</div>
			<div class="block-select-bargain-home type-sel">
				<input type="checkbox" id="bargain-home" class="del">
				<label for="bargain-home">Возможен торг</label>
			</div>


			<div class="block-select-room type-sel">
				<p>Комнат</p>
				<div class="inner-block-room">
					<div class="form-sel">
						<label class="label-select-room">
							<input type="checkbox" name="select-room label-sel" class="del">
							<span id="room-1">1</span>
						</label>
					</div>
					<div class="form-sel">
						<label class="label-select-room">
							<input type="checkbox" name="select-room label-sel" class="del">
							<span id="room-2">2</span>
						</label>
					</div>
					<div class="form-sel">
						<label class="label-select-room">
							<input type="checkbox" name="select-room label-sel" class="del">
							<span id="room-3">3</span>
						</label>
					</div>
					<div class="form-sel">
						<label class="label-select-room">
							<input type="checkbox" name="select-room label-sel" class="del">
							<span id="room-4">4+</span>
						</label>
					</div>
				</div>
			</div>



			<div class="block-select-two-level-home type-sel">
				<input type="checkbox" id="two-level-home" class="del">
				<label for="two-level-home">двухуровневая</label>
			</div>

			<div class="block-select-type-wall type-sel">
				<p>Тип стен</p>
				<div class="form-sel">
					<select name="label-car" class="select-type-wall label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>


			<div class="block-select-area-home type-sel">
				<p>Площадь помещений</p>
				<div class="select-area-home form-sel">
					<p class="p-inline">Общая</p>
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
				<div class="select-area-home form-sel">
					<p class="p-inline">Кухня</p>
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>

			<div class="block-select-floor-home type-sel">
				<p>Этаж</p>
				<div class="select-floor-home form-sel">
					<p class="p-inline">Этаж</p>
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
				<div class="select-floor-home form-sel">
					<p class="p-inline">Этажей</p>
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>

			<div class="block-select-last-floor-home type-sel">
				<input type="checkbox" id="last-floor-home" class="del">
				<label for="last-floor-home">Не последний этаж</label>
			</div>
			<div class="block-select-first-floor-home type-sel">
				<input type="checkbox" id="first-floor-home" class="del">
				<label for="first-floor-home">Не первый этаж</label>
			</div>

			<div class="block-select-year-build type-sel">
				<p>Год построййки</p>
				<div class="form-sel">
					<select name="label-car" class="select-year-build label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
			<div class="block-select-heat-home type-sel">
				<p>Отопление</p>
				<input type="checkbox" id="heat-home-1" class="del">
				<label for="heat-home-1">централизованное</label>
				<input type="checkbox" id="heat-home-2" class="del">
				<label for="heat-home-2">индивидуальное</label>
				<input type="checkbox" id="heat-home-3" class="del">
				<label for="heat-home-3">без отопления</label>
			</div>


			<div class="block-select-sort-car type-sel">
				<p>Сортировка</p>
				<div class="form-sel">
					<select name="sort-car" class="select-sort-car label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
			<div class="reset-filter"><img src="img/filter.svg" alt=""><p>Скинуть все фильтры</p></div>
			<div class="search-button-list-submit">
				<input type="submit" value="Поиск" class="search-button-list">
			</div>
			<a href="advanced-car-search.php" class="extended-button-search">Расширенный поиск</a>
		</form>
		<div class="block-right">
			<a href="#" class="list-prod-filter"><img src="img/filter.svg" alt=""><p>Фильтр</p></a>
			<div class="list-prod-mob">
				<div class="list-prod-popup">
					<a href="#" class="list-prod-close"><img src="img/filter.svg" alt=""><p>Фильтр</p></a>
					<form id="mob-left-selection" class="left-selection">
						<div class="block-select-video">
							<div class="select-video">
								<input type="checkbox" id="only-video-1-m" class="del">
								<label for="only-video-1-m">Только с фото</label>
							</div>
							<div class="select-video">
								<input type="checkbox" id="only-video-2-m" class="del">
								<label for="only-video-2-m">Только с видео</label>
							</div>
							<div class="select-video">
								<input type="checkbox" id="only-video-3-m" class="del">
								<label for="only-video-3-m">Только с видео</label>
								<img src="img/logo-video.png" alt="logo video">
							</div>
						</div>

						<div class="block-my-select type-sel">
							<p>Я ищу</p>
							<div class="form-sel">
								<select name="type-my-select" class="type-my-select label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>

						<div class="block-select-number-home">
							<div class="select-number-home">
								<input type="checkbox" id="second-home-m" class="del">
								<label for="second-home-m" class="sel-inline">Вторичное</label>
								<input type="checkbox" id="first-home-m" class="del">
								<label for="first-home-m">Первичное</label>
							</div>
						</div>
						<div class="block-select-place-home type-sel">
							<p>Местоположение</p>
							<div class="select-place-home">
								<ul class="tabs">
									<li>
										<input type="radio" name="tabs" id="tab-1-m" checked>
										<label for="tab-1-m">Украина</label>
										<div class="tab-content">
											<div class="sel-sity">
												<select name="type-my-select" class="sel-city-2 label-sel close-sel-ico">
													<option value="Украина">Полтава</option>
												</select><br>
												<select name="type-my-select" class="sel-city-2 label-sel">
													<option value="Украина">Район города Полтава</option>
												</select>
											</div>
										</div>
									</li>
									<li>
										<input type="radio" name="tabs" id="tab-2-m">
										<label for="tab-2-m">Заграница</label>
										<div class="tab-content tab-content-2">
											<div class="sel-sity">
												<select name="sel-city" class="sel-city-2 label-sel close-sel-ico">
													<option value="Заграница">Америка</option>
												</select><br>
												<select name="sel-city" class="sel-city-2 label-sel">
													<option value="Заграница">Район города Америка</option>
												</select>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="block-select-price-home type-sel">
							<p>Цена</p>
							<div class="select-price-home form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
								<select name="price-home" class="price-sel">
									<option value="Выбрать" selected>$</option>
									<option value="Выбрать">€</option>
									<option value="Выбрать">₴</option>
									<option value="Выбрать">₽</option>
								</select> 
							</div>
						</div>
						<div class="block-select-bargain-home type-sel">
							<input type="checkbox" id="bargain-home-m" class="del">
							<label for="bargain-home-m">Возможен торг</label>
						</div>


						<div class="block-select-room type-sel">
							<p>Комнат</p>
							<div class="inner-block-room">
								<div class="form-sel">
									<label class="label-select-room">
										<input type="checkbox" name="select-room label-sel" class="del">
										<span id="room-1-m">1</span>
									</label>
								</div>
								<div class="form-sel">
									<label class="label-select-room">
										<input type="checkbox" name="select-room label-sel" class="del">
										<span id="room-2-m">2</span>
									</label>
								</div>
								<div class="form-sel">
									<label class="label-select-room">
										<input type="checkbox" name="select-room label-sel" class="del">
										<span id="room-3-m">3</span>
									</label>
								</div>
								<div class="form-sel">
									<label class="label-select-room">
										<input type="checkbox" name="select-room label-sel" class="del">
										<span id="room-4-m">4+</span>
									</label>
								</div>
							</div>
						</div>




						<div class="block-select-two-level-home type-sel">
							<input type="checkbox" id="two-level-home-m" class="del">
							<label for="two-level-home-m">двухуровневая</label>
						</div>

						<div class="block-select-type-wall type-sel">
							<p>Тип стен</p>
							<div class="form-sel">
								<select name="label-car" class="select-type-wall label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>


						<div class="block-select-area-home type-sel">
							<p>Площадь помещений</p>
							<div class="select-area-home form-sel">
								<p class="p-inline">Общая</p>
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
							<div class="select-area-home form-sel">
								<p class="p-inline">Кухня</p>
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>

						<div class="block-select-floor-home type-sel">
							<p>Этаж</p>
							<div class="select-floor-home form-sel">
								<p class="p-inline">Этаж</p>
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
							<div class="select-floor-home form-sel">
								<p class="p-inline">Этажей</p>
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>

						<div class="block-select-last-floor-home type-sel">
							<input type="checkbox" id="last-floor-home-m" class="del">
							<label for="last-floor-home-m">Не последний этаж</label>
						</div>
						<div class="block-select-first-floor-home type-sel">
							<input type="checkbox" id="first-floor-home-m" class="del">
							<label for="first-floor-home-m">Не первый этаж</label>
						</div>

						<div class="block-select-year-build type-sel">
							<p>Год построййки</p>
							<div class="form-sel">
								<select name="label-car" class="select-year-build label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
						<div class="block-select-heat-home type-sel">
							<p>Отопление</p>
							<input type="checkbox" id="heat-home-1-m" class="del">
							<label for="heat-home-1-m">централизованное</label>
							<input type="checkbox" id="heat-home-2-m" class="del">
							<label for="heat-home-2-m">индивидуальное</label>
							<input type="checkbox" id="heat-home-3-m" class="del">
							<label for="heat-home-3-m">без отопления</label>
						</div>


						<div class="block-select-sort-car type-sel">
							<p>Сортировка</p>
							<div class="form-sel">
								<select name="sort-car" class="select-sort-car label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
						<div class="reset-filter"><img src="img/filter.svg" alt=""><p>Скинуть все фильтры</p></div>
						<div class="search-button-list-submit">
							<input type="submit" value="Поиск" class="search-button-list">
						</div>
						<a href="advanced-car-search.php" class="extended-button-search">Расширенный поиск</a>
					</form>
				</div>
			</div>
			<a href="card-prod-home.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-1-producr-table">Топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
					<div class="img-top-1-producr-table">Топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="#" class="product-table">
				<div class="product-table-photo">
					<img src="img/home.jpg" alt="">
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">р-н. Центр ул. Пушкина г. Полтава</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Полтава</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-room"></div><p>1 комнат</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-area"></div><p>62м2</p>
						</div>
					</div>
					<div class="product-table-description"><p>Квартира в центре города с ремонтом.</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<div class="nav-list-prod">
				<a href="#" class="prev-list-prod"><div class="ico-prev-list-prod"></div><p>Назад</p></a>
				<p class="mob-nav-list-prod-number"><span class="first-nav-list-prod-number"></span>1 / <span class="last-nav-list-prod-number">112</span></p>
				<div class="nav-list-prod-number">
					<a href="#" class="page-active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<span>...</span>
					<a href="#">112</a>
				</div>
				<a href="#" class="next-list-prod"><p>Вперед</p><div class="ico-next-list-prod"></div></a>
			</div>
		</div>
	</div>



</div>
<?php include 'footer-1.php'; ?>
								<a href="index.php#avto">Автомобили</a>
								<a href="index.php#house">Недвижимость</a>
								<a href="index.php#yacht">Яхты</a>
<?php include 'footer-2.php'; ?>