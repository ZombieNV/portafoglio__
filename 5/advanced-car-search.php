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
		<li><a href="#">Расширенный поиск</a></li>
	</ul>
	<div class="add-announcement">
		<p>Расширенный поиск <span>авто</span></p>
	</div>
	<form class="contant-block" action="list-avto.php">
		<div class="contant-block-center">
			<div class="sorting-car">
				<div class="sorting-switch-item">
					<input type="checkbox" id="sorting-switch-1" class="del">
					<label for="sorting-switch-1">Все авто</label>
				</div>
				<div class="switch-item">
					<input type="checkbox" id="sorting-switch-2" class="del">
					<label for="sorting-switch-2">Новые</label>
				</div>
				<div class="switch-item">
					<input type="checkbox" id="sorting-switch-3" class="del">
					<label for="sorting-switch-3">Только с фото</label>
				</div>
				<div class="switch-item">
					<input type="checkbox" id="sorting-switch-4" class="del">
					<label for="sorting-switch-4">Только с видео</label>
				</div>
				<div class="switch-item">
					<input type="checkbox" id="sorting-switch-5" class="del">
					<label for="sorting-switch-5">Только с видео</label>
					<img src="img/logo-icon.png" alt="logo" class="logo-form">
				</div>
			</div>
			<div class="basic-information">
				<div class="basic-information-title">
					<h2>Основная информация</h2>
				</div>
				<div class="basic-information-content">
					<div class="basic-information-left">
						<div class="basic-information-left-item">
							<p>Тип транспорта</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>Тип кузова</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>Марка авто</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>Модель авто</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>Год выпуска</p>
							<div class="form-sel">
								<input type="number" placeholder="От">
								<input type="number" placeholder="До">
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>КПП</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-left-item">
							<p>Пробег</p>
							<div class="form-sel">
								<input type="number" placeholder="От">
								<input type="number" placeholder="До">
							</div>
						</div>
					</div>
					<div class="basic-information-right">
						<div class="basic-information-right-item">
							<p>Объем </p>
							<div class="form-sel">
								<input type="number" placeholder="От">
								<input type="number" placeholder="До">
							</div>
						</div>
						<div class="basic-information-right-item">
							<p>Мощность </p>
							<div class="form-sel">
								<input type="number" placeholder="От">
								<input type="number" placeholder="До">
							</div>
						</div>
						<div class="basic-information-right-item">
							<p>Тип привода</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-right-item">
							<p>Топливо</p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
						<div class="basic-information-right-item">
							<p>Количество мест</p>
							<div class="form-sel">
								<input type="number" placeholder="От">
								<input type="number" placeholder="До">
							</div>
						</div>
						<div class="basic-information-right-item">
							<p>Состояние </p>
							<div class="form-sel">
								<select name="type-select" class="type-select car-inf-select">
									<option value="Выбрать" selected>Выбрать</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cost-block">
				<div class="cost-title">
					<h2>Стоимость</h2>
					<p>цена, валюта, торг, обмен</p>
				</div>
				<div class="cost-content">
					<div class="cost-top">
						<div class="cost">
							<p>Цена</p>
							<div class="form-interval">
								<input type="number" placeholder="От" class="price-interval">
								<input type="number" placeholder="До" class="price-interval">
							</div>
							<select name="type-select" class="cost-select">
								<option value="Выбрать" selected>$</option>
								<option value="Выбрать">€</option>
								<option value="Выбрать">₴</option>
								<option value="Выбрать">₽</option>
							</select>
						</div>
						<div class="cost-top-switch">
							<div class="cost-top-switch-item">
								<input type="checkbox" id="cost-top-switch-1" class="del">
								<label for="cost-top-switch-1">Нерастаможен</label>
							</div>
							<div class="cost-top-switch-item">
								<input type="checkbox" id="cost-top-switch-2" class="del">
								<label for="cost-top-switch-2">Авто<br /> не в Украине </label>
							</div>
							<div class="cost-top-switch-item">
								<input type="checkbox" id="cost-top-switch-3" class="del">
								<label for="cost-top-switch-3">В кредите</label>
							</div>
						</div>
					</div>
					<div class="cost-bottom">
						<div class="cost-bottom-item">
							<div class="cost-bottom-switch">
								<input type="checkbox" id="cost-bottom-switch-1" class="del">
								<label for="cost-bottom-switch-1">Возможен торг</label>
							</div>
							<div class="cost-bottom-text">
								*Включите эту функцию, если хотите договориться о цене с покупателем
							</div>
						</div>
						<div class="cost-bottom-item">
							<div class="cost-bottom-switch">
								<input type="checkbox" id="cost-bottom-switch-2" class="del">
								<label for="cost-bottom-switch-2">Возможен обмен <br />на авто</label>
							</div>
							<div class="cost-bottom-text">
								*Включите эту функцию, если хотите обменять автомобиль 
							</div>
						</div>
						<div class="cost-bottom-item">
							<div class="cost-bottom-switch">
								<input type="checkbox" id="cost-bottom-switch-3" class="del">
								<label for="cost-bottom-switch-3">Возможен обмен<br /> на яхту</label>
							</div>
							<div class="cost-bottom-text">
								*Включите эту функцию, если хотите обменять автомобиль 
							</div>
						</div>
						<div class="cost-bottom-item">
							<div class="cost-bottom-switch">
								<input type="checkbox" id="cost-bottom-switch-4" class="del">
								<label for="cost-bottom-switch-4">Возможен обмен на<br /> недвижимость</label>
							</div>
							<div class="cost-bottom-text">
								*Включите эту функцию, если хотите обменять автомобиль 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="additional-characteristics">
				<div class="additional-characteristics-title">
					<h2>Дополнительные характеристики</h2>
					<p>добавьте особые детали</p>
				</div>
				<div class="additional-characteristics-content">
					<div class="additional-characteristics-top">
						<div class="additional-characteristics-color">
							<div class="additional-characteristics-color-title">
								<h2>Цвет</h2>
							</div>
							<div class="additional-characteristics-comfort-switch">
								<div class="additional-characteristics-colr">
									<div class="form-sel">
										<select name="type-select" class="type-select car-inf-select">
											<option value="Выбрать" selected>Выбрать</option>
										</select>
									</div>
									<input type="checkbox" id="additional-characteristics-1" class="del">
									<label for="additional-characteristics-1">Металик</label>
								</div>
								<div class="additional-characteristics-color-bitn">
									<div class="additional-characteristics-color-bitn-item">
										<input type="checkbox" id="additional-characteristics-color-bitn-1" class="del">
										<label for="additional-characteristics-color-bitn-1">Не битая</label>
									</div>
									<div class="additional-characteristics-color-bitn-item">
										<input type="checkbox" id="additional-characteristics-color-bitn-2" class="del">
										<label for="additional-characteristics-color-bitn-2">Не на ходу</label>
									</div>
								</div>
								<div class="additional-characteristics-color-nobitn">
									<div class="additional-characteristics-color-nobitn-item">
										<input type="checkbox" id="additional-characteristics-color-nobitn-item-1" class="del">
										<label for="additional-characteristics-color-nobitn-item-1">Битая (после ДТП)</label>
									</div>
									<div class="additional-characteristics-color-nobitn-item">
										<input type="checkbox" id="additional-characteristics-color-nobitn-item-2" class="del">
										<label for="additional-characteristics-color-nobitn-item-2">Некрашеная</label>
									</div>
								</div>
							</div>
						</div>
						<div class="additional-characteristics-comfort">
							<div class="additional-characteristics-comfort-title">
								<h2>Комфорт</h2>
							</div>
							<div class="additional-characteristics-comfort-switch">
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-1" class="del">
									<label for="additional-characteristics-comfort-1">Круизній<br /> контроль</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-2" class="del">
									<label for="additional-characteristics-comfort-2">Кожаный<br /> салон</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-3" class="del">
									<label for="additional-characteristics-comfort-3">Подогрев<br /> зеркала</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-4" class="del">
									<label for="additional-characteristics-comfort-4">Уселитель<br /> руля</label>
								</div>
							</div>
							<div class="form-sel">
								<select name="type-select" class="additional-characteristics-comfort-select">
									<option value="Выбрать" selected>Больше значений</option>
								</select>
							</div>
						</div>
						<div class="additional-characteristics-multimedia">
							<div class="additional-characteristics-comfort-title">
								<h2 style="font-size: 20px;">Мультимедия</h2>
							</div>
							<div class="additional-characteristics-comfort-switch">
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-5" class="del">
									<label for="additional-characteristics-comfort-5">CD</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-6" class="del">
									<label for="additional-characteristics-comfort-6">MP3</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-7" class="del">
									<label for="additional-characteristics-comfort-7">Магнитола</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-8" class="del">
									<label for="additional-characteristics-comfort-8">Акустика</label>
								</div>
							</div>
							<div class="form-sel">
								<select name="type-select" class="additional-characteristics-comfort-select">
									<option value="Выбрать" selected>Больше значений</option>
								</select>
							</div>
						</div>
						<div class="additional-characteristics-safety">
							<div class="additional-characteristics-comfort-title">
								<h2 style="font-size: 20px;">Безопасность</h2>
							</div>
							<div class="additional-characteristics-comfort-switch">
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-9" class="del">
									<label for="additional-characteristics-comfort-9">Замок<br /> на КПП</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-10" class="del">
									<label for="additional-characteristics-comfort-10">Сигнализация</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-11" class="del">
									<label for="additional-characteristics-comfort-11">Центральный<br /> замок</label>
								</div>
								<div class="additional-characteristics-comfort-item">
									<input type="checkbox" id="additional-characteristics-comfort-12" class="del">
									<label for="additional-characteristics-comfort-12">ABS</label>
								</div>
							</div>
							<div class="form-sel">
								<select name="type-select" class="additional-characteristics-comfort-select">
									<option value="Выбрать" selected>Больше значений</option>
								</select>
							</div>
						</div>
					</div>
					<div class="additional-characteristics-region">
						<div class="additional-characteristics-comfort-title">
							<h2>Регион</h2>
						</div>
						<div class="search-region">
							<input type="text" placeholder="Ищу город">
							<div class="ico-seach"></div>
						</div>
					</div>
					<div name="Tree" class="additional-characteristics-bottom tree">
						<div class="additional-characteristics-bottom-switch">
							<div class="additional-characteristics-bottom-left">
								<div class="additional-characteristics-top-item">
									<input type="checkbox" id="additional-characteristics-top-1" class="del">
									<label for="additional-characteristics-top-1">Центральная Украина</label>
								</div>
								<fieldset>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-1" class="del">
										<label for="additional-characteristi__item-1">Киевская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-2" class="del">
										<label for="additional-characteristi__item-2">Винницкая</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-3" class="del">
										<label for="additional-characteristi__item-3">Житомирская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-4" class="del">
										<label for="additional-characteristi__item-4">Кировоградская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-5" class="del">
										<label for="additional-characteristi__item-5">Полтавская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-6" class="del">
										<label for="additional-characteristi__item-6">Сумская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-7" class="del">
										<label for="additional-characteristi__item-7">Черкасская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-8" class="del">
										<label for="additional-characteristi__item-8">Черниговская</label>
									</div>
								</fieldset>
							</div>
							<div class="additional-characteristics-bottom-center">
								<div class="additional-characteristics-top-item">
									<input type="checkbox" id="additional-characteristics-top-2" class="del">
									<label for="additional-characteristics-top-2">Западная Украина</label>
								</div>
								<fieldset>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-9" class="del">
										<label for="additional-characteristi__item-9">Львовская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-10" class="del">
										<label for="additional-characteristi__item-10">Волынская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-11" class="del">
										<label for="additional-characteristi__item-11">Закарпатская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-12" class="del">
										<label for="additional-characteristi__item-12">Ивано-Франковская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-13" class="del">
										<label for="additional-characteristi__item-13">Ровенская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-14" class="del">
										<label for="additional-characteristi__item-14">Тернопольская</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-15" class="del">
										<label for="additional-characteristi__item-15">Хмельницкая</label>
									</div>
									<div class="additional-characteristi__item">
										<input type="checkbox" id="additional-characteristi__item-16" class="del">
										<label for="additional-characteristi__item-16">Черновицкая</label>
									</div>
								</fieldset>
							</div>
							<div class="additional-characteristics-bottom-right">
								<div class="additional-characteristics-bottom-right-bottom">
									<div class="additional-characteristics-top-item">
										<input type="checkbox" id="additional-characteristics-top-3" class="del">
										<label for="additional-characteristics-top-3">Восточная Украина</label>
									</div>
									<fieldset>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-17" class="del">
											<label for="additional-characteristi__item-17">Днепропетровская</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-18" class="del">
											<label for="additional-characteristi__item-18">Харьковская</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-19" class="del">
											<label for="additional-characteristi__item-19">Донецкая</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-20" class="del">
											<label for="additional-characteristi__item-20">Луганская</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-21" class="del">
											<label for="additional-characteristi__item-21">Запорожская</label>
										</div>
									</fieldset>
								</div>
								<div class="additional-characteristics-bottom-right-bottom">
									<div class="additional-characteristics-top-item">
										<input type="checkbox" id="additional-characteristics-top-22" class="del">
										<label for="additional-characteristics-top-22">Южная Украина</label>
									</div>
									<fieldset>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-23" class="del">
											<label for="additional-characteristi__item-23">Херсонская</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-24" class="del">
											<label for="additional-characteristi__item-24">Николаевская</label>
										</div>
										<div class="additional-characteristi__item">
											<input type="checkbox" id="additional-characteristi__item-25" class="del">
											<label for="additional-characteristi__item-25">Одесская</label>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="searching-results">
				<div class="searching-results-title">
					<h2>Результаты поиска</h2>
				</div>
				<div class="searching-results-content">
					<div class="searching-results-top">
						<div class="searching-results-titles">
							<h2>Сортировка</h2>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-26" class="del">
							<label for="additional-characteristi__item-26">Обычная</label>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-27" class="del">
							<label for="additional-characteristi__item-27">От дешевых к<br /> дорогим</label>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-28" class="del">
							<label for="additional-characteristi__item-28">От дорогих к<br /> дешевым</label>
						</div>
					</div>
					<div class="searching-results-center">
						<div class="searching-results-titles">
							<h2>Показывать</h2>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-29" class="del">
							<label for="additional-characteristi__item-29">По 10</label>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-30" class="del">
							<label for="additional-characteristi__item-30">По 20</label>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-31" class="del">
							<label for="additional-characteristi__item-31">По 30</label>
						</div>
						<div class="searching-results-item">
							<input type="checkbox" id="additional-characteristi__item-32" class="del">
							<label for="additional-characteristi__item-32">По 50</label>
						</div>
					</div>
				</div>
				<div class="searching-results-bottom">
					<div class="searching-results-titles">
						<h2>Поиск по ID</h2>
					</div>
					<div class="searching-results-bottom-search">
						<input type="text" placeholder="Поиск по ID">
						<div class="ico-seach"></div>
					</div>
				</div>
			</div>
			<div class="you-search">
				<h2>Вы ищете</h2>
				<div class="categories-block">
					<div class="categorie">
						<p>Легковые</p>
						<p>+</p>
					</div>
					<div class="categorie">
						<p>Возможен торг</p>
						<p>+</p>
					</div>
				</div>
			</div>
			<div class="reset">Скинуть все фильтры</div>
			<div class="search-button-block">
				<div class="ico-seach"></div>
				<input type="submit" value="Поиск" class="search-button">
			</div>
		</div>
	</form>
</div>
<?php include 'footer-1.php'; ?>
	<a href="index.php#avto">Автомобили</a>
	<a href="index.php#house">Недвижимость</a>
	<a href="index.php#yacht">Яхты</a>
<?php include 'footer-2.php'; ?>