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
		<li><a href="#">Продажа яхт</a></li>
	</ul>
	<div class="add-announcement"><p>Продажа <span>яхт</span></p></div>
	<div class="list-prod">
		<form id="pc-left-selection" action="list-avto.php" class="left-selection">
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

			<div class="block-select-type-yacht type-sel">
				<p>Тип</p>
				<div class="form-sel">
					<select name="type-yacht" class="select-type-yacht label-sel">
						<option value="Выбрать">Лодка</option>
					</select>
				</div>
			</div>
			<div class="block-select-brand-yacht type-sel">
				<p>Бренд</p>
				<div class="form-sel">
					<select name="brand-yacht" class="select-brand-yacht label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
			<div class="block-select-year-construction-yacht type-sel">
				<p>Год постройки</p>
				<div class="form-sel">
					<select name="year-construction-yacht" class="select-year-construction-yacht label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>

			<div class="block-select-length-yacht type-sel">
				<p>Длина (м)</p>
				<div class="select-length-yacht form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>
			<div class="block-select-width-yacht type-sel">
				<p>Ширина (м)</p>
				<div class="select-width-yacht form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>

			<div class="block-select-material-yacht type-sel">
				<p>Материал корпуса</p>
				<div class="form-sel">
					<select name="material-yacht" class="select-material-yacht label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
			<div class="block-select-fuel-yacht type-sel">
				<p>Топливо</p>
				<div class="form-sel">
					<select name="fuel-yacht" class="select-fuel-yacht label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>

			<div class="block-select-price-yacht type-sel">
				<p>Цена</p>
				<div class="select-price-yacht form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
					<select name="price-yacht" class="price-sel">
						<option value="Выбрать" selected>$</option>
						<option value="Выбрать">€</option>
						<option value="Выбрать">₴</option>
						<option value="Выбрать">₽</option>
					</select> 
				</div>
			</div>

			<div class="block-select-bargain-yacht type-sel">
				<input type="checkbox" id="bargain-yacht" class="del">
				<label for="bargain-yacht">Возможен торг</label>
			</div>

			<div class="block-select-rudder-yacht type-radio">
				<input type="radio" id="rudder-yacht-1" name="rudder-yacht" class="del" checked>
				<label for="rudder-yacht-1">Штурвал</label>
				<input type="radio" id="rudder-yacht-2" name="rudder-yacht" class="del">
				<label for="rudder-yacht-2">Румпель</label>
			</div>

			<div class="block-select-flybridge-yacht type-sel">
				<input type="checkbox" id="flybridge-yacht-1" class="del">
				<label for="flybridge-yacht-1">без флайбриджа</label>
				<input type="checkbox" id="flybridge-yacht-2" class="del">
				<label for="flybridge-yacht-2">флайбридж</label>
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
					<form id="mob-left-selection" action="list-avto.php" class="left-selection">
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

						<div class="block-select-type-yacht type-sel">
							<p>Тип</p>
							<div class="form-sel">
								<select name="type-yacht" class="select-type-yacht label-sel">
									<option value="Выбрать">Лодка</option>
								</select>
							</div>
						</div>
						<div class="block-select-brand-yacht type-sel">
							<p>Бренд</p>
							<div class="form-sel">
								<select name="brand-yacht" class="select-brand-yacht label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
						<div class="block-select-year-construction-yacht type-sel">
							<p>Год постройки</p>
							<div class="form-sel">
								<select name="year-construction-yacht" class="select-year-construction-yacht label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>

						<div class="block-select-length-yacht type-sel">
							<p>Длина (м)</p>
							<div class="select-length-yacht form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>
						<div class="block-select-width-yacht type-sel">
							<p>Ширина (м)</p>
							<div class="select-width-yacht form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>

						<div class="block-select-material-yacht type-sel">
							<p>Материал корпуса</p>
							<div class="form-sel">
								<select name="material-yacht" class="select-material-yacht label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
						<div class="block-select-fuel-yacht type-sel">
							<p>Топливо</p>
							<div class="form-sel">
								<select name="fuel-yacht" class="select-fuel-yacht label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>

						<div class="block-select-price-yacht type-sel">
							<p>Цена</p>
							<div class="select-price-yacht form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
								<select name="price-yacht" class="price-sel">
									<option value="Выбрать" selected>$</option>
									<option value="Выбрать">€</option>
									<option value="Выбрать">₴</option>
									<option value="Выбрать">₽</option>
								</select> 
							</div>
						</div>

						<div class="block-select-bargain-yacht type-sel">
							<input type="checkbox" id="bargain-yacht-m" class="del">
							<label for="bargain-yacht-m">Возможен торг</label>
						</div>

						<div class="block-select-rudder-yacht type-radio">
							<input type="radio" id="rudder-yacht-1-m" name="rudder-yacht" class="del" checked>
							<label for="rudder-yacht-1-m">Штурвал</label>
							<input type="radio" id="rudder-yacht-2-m" name="rudder-yacht" class="del">
							<label for="rudder-yacht-2-m">Румпель</label>
						</div>

						<div class="block-select-flybridge-yacht type-sel">
							<input type="checkbox" id="flybridge-yacht-1-m" class="del">
							<label for="flybridge-yacht-1-m">без флайбриджа</label>
							<input type="checkbox" id="flybridge-yacht-2-m" class="del">
							<label for="flybridge-yacht-2-m">флайбридж</label>
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
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-1-producr-table">Топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
					<div class="img-top-1-producr-table">Топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-yacht.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/yacht.jpg" alt="">
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Jeanneau Cap Camarat 6.5 BR</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Германия</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-side"></div><p>6,34 x 2,48 м</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="age-product-table">
							<p class="text-point">.</p><p>2020</p>
						</div>
						<div class="transmission-product-table">
							<p><b>Материал:</b> Сталь</p>
						</div>
					</div>
					<div class="product-table-description"><p>Cap Camarat 6.5 BR, вдохновленный</p><span>...</span></div>
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