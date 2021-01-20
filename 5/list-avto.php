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
		<li><a href="#">Продажа легковых авто</a></li>
	</ul>
	<div class="add-announcement"><p>Продажа Легковых <span>авто</span></p></div>
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
		
			<div class="block-select-type-car type-sel">
				<p>Тип транспорта</p>
				<div class="form-sel">
					<select name="type-car" class="select-type-car label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
		
			<div class="block-select-body-car type-sel">
				<p>Тип кузова</p>
				<div class="type-body-car-1">
					<div class="select-body-car">
						<input type="checkbox" id="body-car-1" class="del">
						<label for="body-car-1">Седан</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-2" class="del">
						<label for="body-car-2">Пикап</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-3" class="del">
						<label for="body-car-3">Внедорожник</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-4" class="del">
						<label for="body-car-4">Минивен</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-5" class="del">
						<label for="body-car-5">Универсал</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-6" class="del">
						<label for="body-car-6">Хэтчбэк</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-7" class="del">
						<label for="body-car-7">Легковой фургон</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-8" class="del">
						<label for="body-car-8">Кабриолет</label>
					</div>
				</div>
				<div class="type-body-car-2">
					<div class="select-body-car">
						<input type="checkbox" id="body-car-9" class="del">
						<label for="body-car-9">Лифтбэк</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-10" class="del">
						<label for="body-car-10">Лимузин</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-11" class="del">
						<label for="body-car-11">Родстер</label>
					</div>
					<div class="select-body-car">
						<input type="checkbox" id="body-car-12" class="del">
						<label for="body-car-12">Другой</label>
					</div>
				</div>
			</div>
		
			<div class="block-select-label-car type-sel">
				<p>Марка</p>
				<div class="form-sel">
					<select name="label-car" class="select-label-car label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
		
			<div class="block-select-model-car type-sel">
				<p>Модель</p>
				<div class="form-sel">
					<select name="model-car" class="select-model-car label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
		
			<div class="block-select-age-car type-sel">
				<p>Год</p>
				<div class="select-age-car form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>
		
			<div class="block-select-color-car type-sel">
				<p>Цвет</p>
				<div class="type-color-car-1">
					<div class="select-color-car">
						<input type="checkbox" id="color-car-1" class="del">
						<label for="color-car-1">Бежевый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-2" class="del">
						<label for="color-car-2">Черный</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-3" class="del">
						<label for="color-car-3">Оранжевый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-4" class="del">
						<label for="color-car-4">Коричневый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-5" class="del">
						<label for="color-car-5">Фиолетовый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-6" class="del">
						<label for="color-car-6">Желтый</label>
					</div>
				</div>
				<div class="type-color-car-2">
					<div class="select-color-car">
						<input type="checkbox" id="color-car-7" class="del">
						<label for="color-car-7">Зеленый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-8" class="del">
						<label for="color-car-8">Серый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-9" class="del">
						<label for="color-car-9">Крассный</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-10" class="del">
						<label for="color-car-10">Синий</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-11" class="del">
						<label for="color-car-11">Белый</label>
					</div>
					<div class="select-color-car">
						<input type="checkbox" id="color-car-12" class="del">
						<label for="color-car-12">Металлик</label>
					</div>
				</div>
			</div>
		
		
			<div class="block-select-price-car type-sel">
				<p>Цена</p>
				<div class="select-price-car form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
					<select name="price-car" class="price-sel">
						<option value="Выбрать" selected>$</option>
						<option value="Выбрать">€</option>
						<option value="Выбрать">₴</option>
						<option value="Выбрать">₽</option>
					</select> 
				</div>
			</div>
		
		
			<div class="block-select-bargain-car type-sel">
				<input type="checkbox" id="bargain-car" class="del">
				<label for="bargain-car">Возможен торг</label>
			</div>
		
			<div class="block-select-region-car type-sel">
				<p>Регион</p>
				<div class="form-sel">
					<select name="region-car" class="select-region-car label-sel">
						<option value="Выбрать">Выбрать</option>
					</select>
				</div>
			</div>
		
		
			<div class="block-select-power-car type-sel">
				<p>Мощность</p>
				<div class="select-power-car form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>
		
			<div class="block-select-transmission-car type-sel">
				<p>Коробка передач</p>
				<div class="type-transmission-car-1">
					<div class="select-transmission-car">
						<input type="checkbox" id="transmission-car-1" class="del">
						<label for="transmission-car-1">Ручная / Механика</label>
					</div>
					<div class="select-transmission-car">
						<input type="checkbox" id="transmission-car-2" class="del">
						<label for="transmission-car-2">Автомат</label>
					</div>
					<div class="select-transmission-car">
						<input type="checkbox" id="transmission-car-3" class="del">
						<label for="transmission-car-3">Типтроник</label>
					</div>
					<div class="select-transmission-car">
						<input type="checkbox" id="transmission-car-4" class="del">
						<label for="transmission-car-4">Робот</label>
					</div>
					<div class="select-transmission-car">
						<input type="checkbox" id="transmission-car-5" class="del">
						<label for="transmission-car-5">Вариатор</label>
					</div>
				</div>
			</div>
		
			<div class="block-select-fuel-car type-sel">
				<p>Топливо</p>
				<div class="type-fuel-car-1">
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-1" class="del">
						<label for="fuel-car-1">Бензин</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-2" class="del">
						<label for="fuel-car-2">Газ</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-3" class="del">
						<label for="fuel-car-3">Газ / Бензин</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-4" class="del">
						<label for="fuel-car-4">Гибрид</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-5" class="del">
						<label for="fuel-car-5">Электро</label>
					</div>
				</div>
				<div class="type-fuel-car-2">
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-6" class="del">
						<label for="fuel-car-6">Газ метан</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-7" class="del">
						<label for="fuel-car-7">Газ бропан/<br>бутан</label>
					</div>
					<div class="select-fuel-car">
						<input type="checkbox" id="fuel-car-8" class="del">
						<label for="fuel-car-8">Другое</label>
					</div>
				</div>
			</div>
		
			<div class="block-select-drive-car type-sel">
				<p>Тип привода</p>
				<div class="type-drive-car-1">
					<div class="select-drive-car">
						<input type="checkbox" id="drive-car-1" class="del">
						<label for="drive-car-1">Полный</label>
					</div>
					<div class="select-drive-car">
						<input type="checkbox" id="drive-car-2" class="del">
						<label for="drive-car-2">Передний</label>
					</div>
					<div class="select-drive-car">
						<input type="checkbox" id="drive-car-3" class="del">
						<label for="drive-car-3">Задний</label>
					</div>
				</div>
			</div>
			<div class="block-select-age-car type-sel">
				<p>Объем двигателя (л.)</p>
				<div class="select-age-car form-sel">
					<input type="number" placeholder="От" class="interval-sel">
					<input type="number" placeholder="До" class="interval-sel">
				</div>
			</div>
			<div class="block-select-condition-car">
				<div class="type-condition-car-1">
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-1" class="del">
						<label for="condition-car-1">Нерастаможен</label>
					</div>
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-2" class="del">
						<label for="condition-car-2">Авто не в Украине</label>
					</div>
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-3" class="del">
						<label for="condition-car-3">Не на ходу</label>
					</div>
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-4" class="del">
						<label for="condition-car-4">Битая</label>
					</div>
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-5" class="del">
						<label for="condition-car-5">Не битая</label>
					</div>
					<div class="select-condition-car">
						<input type="checkbox" id="condition-car-6" class="del">
						<label for="condition-car-6">Некрашеная</label>
					</div>
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
			</div>
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
					
						<div class="block-select-type-car type-sel">
							<p>Тип транспорта</p>
							<div class="form-sel">
								<select name="type-car" class="select-type-car label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
					
						<div class="block-select-body-car type-sel">
							<p>Тип кузова</p>
							<div class="type-body-car-1">
								<div class="select-body-car">
									<input type="checkbox" id="body-car-1-m" class="del">
									<label for="body-car-1-m">Седан</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-2-m" class="del">
									<label for="body-car-2-m">Пикап</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-3-m" class="del">
									<label for="body-car-3-m">Внедорожник</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-4-m" class="del">
									<label for="body-car-4-m">Минивен</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-5-m" class="del">
									<label for="body-car-5-m">Универсал</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-6-m" class="del">
									<label for="body-car-6-m">Хэтчбэк</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-7-m" class="del">
									<label for="body-car-7-m">Легковой фургон</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-8-m" class="del">
									<label for="body-car-8-m">Кабриолет</label>
								</div>
							</div>
							<div class="type-body-car-2">
								<div class="select-body-car">
									<input type="checkbox" id="body-car-9-m" class="del">
									<label for="body-car-9-m">Лифтбэк</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-10-m" class="del">
									<label for="body-car-10-m">Лимузин</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-11-m" class="del">
									<label for="body-car-11-m">Родстер</label>
								</div>
								<div class="select-body-car">
									<input type="checkbox" id="body-car-12-m" class="del">
									<label for="body-car-12-m">Другой</label>
								</div>
							</div>
						</div>

						<div class="block-select-label-car type-sel">
							<p>Марка</p>
							<div class="form-sel">
								<select name="label-car" class="select-label-car label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>

						<div class="block-select-model-car type-sel">
							<p>Модель</p>
							<div class="form-sel">
								<select name="model-car" class="select-model-car label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>

						<div class="block-select-age-car type-sel">
							<p>Год</p>
							<div class="select-age-car form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>
					
						<div class="block-select-color-car type-sel">
							<p>Цвет</p>
							<div class="type-color-car-1">
								<div class="select-color-car">
									<input type="checkbox" id="color-car-1-m" class="del">
									<label for="color-car-1-m">Бежевый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-2-m" class="del">
									<label for="color-car-2-m">Черный</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-3-m" class="del">
									<label for="color-car-3-m">Оранжевый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-4-m" class="del">
									<label for="color-car-4-m">Коричневый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-5-m" class="del">
									<label for="color-car-5-m">Фиолетовый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-6-m" class="del">
									<label for="color-car-6-m">Желтый</label>
								</div>
							</div>
							<div class="type-color-car-2">
								<div class="select-color-car">
									<input type="checkbox" id="color-car-7-m" class="del">
									<label for="color-car-7-m">Зеленый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-8-m" class="del">
									<label for="color-car-8-m">Серый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-9-m" class="del">
									<label for="color-car-9-m">Крассный</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-10-m" class="del">
									<label for="color-car-10-m">Синий</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-11-m" class="del">
									<label for="color-car-11-m">Белый</label>
								</div>
								<div class="select-color-car">
									<input type="checkbox" id="color-car-12-m" class="del">
									<label for="color-car-12-m">Металлик</label>
								</div>
							</div>
						</div>

						<div class="block-select-price-car type-sel">
							<p>Цена</p>
							<div class="select-price-car form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
								<select name="price-car" class="price-sel">
									<option value="Выбрать" selected>$</option>
									<option value="Выбрать">€</option>
									<option value="Выбрать">₴</option>
									<option value="Выбрать">₽</option>
								</select> 
							</div>
						</div>

						<div class="block-select-bargain-car type-sel">
							<input type="checkbox" id="bargain-car-m" class="del">
							<label for="bargain-car-m">Возможен торг</label>
						</div>

						<div class="block-select-region-car type-sel">
							<p>Регион</p>
							<div class="form-sel">
								<select name="region-car" class="select-region-car label-sel">
									<option value="Выбрать">Выбрать</option>
								</select>
							</div>
						</div>
					
					
						<div class="block-select-power-car type-sel">
							<p>Мощность</p>
							<div class="select-power-car form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>
					
						<div class="block-select-transmission-car type-sel">
							<p>Коробка передач</p>
							<div class="type-transmission-car-1">
								<div class="select-transmission-car">
									<input type="checkbox" id="transmission-car-1-m" class="del">
									<label for="transmission-car-1-m">Ручная / Механика</label>
								</div>
								<div class="select-transmission-car">
									<input type="checkbox" id="transmission-car-2-m" class="del">
									<label for="transmission-car-2-m">Автомат</label>
								</div>
								<div class="select-transmission-car">
									<input type="checkbox" id="transmission-car-3-m" class="del">
									<label for="transmission-car-3-m">Типтроник</label>
								</div>
								<div class="select-transmission-car">
									<input type="checkbox" id="transmission-car-4-m" class="del">
									<label for="transmission-car-4-m">Робот</label>
								</div>
								<div class="select-transmission-car">
									<input type="checkbox" id="transmission-car-5-m" class="del">
									<label for="transmission-car-5-m">Вариатор</label>
								</div>
							</div>
						</div>
					
						<div class="block-select-fuel-car type-sel">
							<p>Топливо</p>
							<div class="type-fuel-car-1">
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-1-m" class="del">
									<label for="fuel-car-1-m">Бензин</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-2-m" class="del">
									<label for="fuel-car-2-m">Газ</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-3-m" class="del">
									<label for="fuel-car-3-m">Газ / Бензин</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-4-m" class="del">
									<label for="fuel-car-4-m">Гибрид</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-5-m" class="del">
									<label for="fuel-car-5-m">Электро</label>
								</div>
							</div>
							<div class="type-fuel-car-2">
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-6-m" class="del">
									<label for="fuel-car-6-m">Газ метан</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-7-m" class="del">
									<label for="fuel-car-7-m">Газ бропан/<br>бутан</label>
								</div>
								<div class="select-fuel-car">
									<input type="checkbox" id="fuel-car-8-m" class="del">
									<label for="fuel-car-8-m">Другое</label>
								</div>
							</div>
						</div>
					
						<div class="block-select-drive-car type-sel">
							<p>Тип привода</p>
							<div class="type-drive-car-1">
								<div class="select-drive-car">
									<input type="checkbox" id="drive-car-1-m" class="del">
									<label for="drive-car-1-m">Полный</label>
								</div>
								<div class="select-drive-car">
									<input type="checkbox" id="drive-car-2-m" class="del">
									<label for="drive-car-2-m">Передний</label>
								</div>
								<div class="select-drive-car">
									<input type="checkbox" id="drive-car-3-m" class="del">
									<label for="drive-car-3-m">Задний</label>
								</div>
							</div>
						</div>
						<div class="block-select-age-car type-sel">
							<p>Объем двигателя (л.)</p>
							<div class="select-age-car form-sel">
								<input type="number" placeholder="От" class="interval-sel">
								<input type="number" placeholder="До" class="interval-sel">
							</div>
						</div>
						<div class="block-select-condition-car">
							<div class="type-condition-car-1">
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-1-m" class="del">
									<label for="condition-car-1-m">Нерастаможен</label>
								</div>
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-2-m" class="del">
									<label for="condition-car-2-m">Авто не в Украине</label>
								</div>
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-3-m" class="del">
									<label for="condition-car-3-m">Не на ходу</label>
								</div>
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-4-m" class="del">
									<label for="condition-car-4-m">Битая</label>
								</div>
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-5-m" class="del">
									<label for="condition-car-5-m">Не битая</label>
								</div>
								<div class="select-condition-car">
									<input type="checkbox" id="condition-car-6-m" class="del">
									<label for="condition-car-6-m">Некрашеная</label>
								</div>
							</div>
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
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-producr-table">Топ-топ</div>
					<div class="product-table-verified"><p>Перевірений</p><img src="img/logo-top.png" alt=""></div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
					<div class="img-top-1-producr-table">Топ</div>
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
					<div class="product-table-time"><div class="ico-time"></div><p>вчера, 21:02</p></div>
				</div>
			</a>
			<a href="card-prod-avto.php" class="product-table">
				<div class="product-table-photo">
					<img src="img/avto.jpg" alt="">
				</div>
				<div class="product-table-text">
					<p class="product-table-heading">Skoda Octavia A6 2010</p>
					<div class="product-table-price">
						<div class="product-table-uds">10 000S</div>
						<div class="product-table-ua">239 455грн</div>
					</div>
					<div class="product-table-place">
						<div class="city-producr-table">
							<div class="ico-city"></div><p>Киев</p>
						</div>
						<div class="distance-product-table">
							<div class="ico-distance"></div><p>73тыс. км</p>
						</div>
					</div>
					<div class="product-table-type">
						<div class="diesel-product-table">
							<div class="ico-diesel"></div><p>Дизель, 1.6 л</p>
						</div>
						<div class="transmission-product-table">
							<div class="ico-transmission"></div><p>Ручная/ Механика</p>
						</div>
					</div>
					<div class="product-table-description"><p>Эксклюзив !!! новый !!! skoda octavia</p><span>...</span></div>
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