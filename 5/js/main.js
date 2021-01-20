/*----------Форма с пропозициями создетелю обьявления--------*/

// Выбор блока с помощью селекта
$(function() {
	$('.user-pay').hide();

	$('#choice-pay-sel').change(function () {
		$('.choice-pay-comm').slideUp();
		$('.user-pay').slideUp();
		$("." + $(this).val()).slideDown();
	});

});

// Убираем Ваша, Моя доплата
$(".pay-but").click(function () {
	$(".choice-pay-comm").slideDown();
	$('.user-pay').slideUp();
});


// Селект как продолжение предыдущих радио-выборов
$('.choice-pay-sel').click(function() {
	$('input[type="radio"]:checked').prop('checked', false);
});


// Просмотр предложений к обьявлению
$(document).ready(function(){
	$("#list-torg-1").click(function () {
		if ($("#list-torg-1-1").is(":hidden")) {
			$("#list-torg-1-1").show("slow"),
			$(".list-torg").hide("slow");
		} else {
			$("#list-torg-1-1").hide("slow");
		}
		return false;
	});
});

/*----------------------Filter-list----------------------*/
$(function() {
	var $menu_popup = $('.list-prod-popup');

	$(".list-prod-filter, .list-prod-close").click(function(){
		$menu_popup.slideToggle(300, function(){
			if ($menu_popup.is(':hidden')) {
				$('body').removeClass('body_pointer');
			} else {
				$('body').addClass('body_pointer');
			}
		});  
		return false;
	});
	
	$(document).on('click', function(e){
		if (!$(e.target).closest('.list-prod-popup').length){
			$('body').removeClass('body_pointer');
			$menu_popup.slideUp(300);
		}
	});
});

/*----------------------Modal-calculation----------------------*/
$(document).ready(function() {
	$('a.link-modal').click( function(event){
		event.preventDefault();
		$('.overlay').fadeIn(297, function(){
		$('#modal') 
			.css('display', 'block')
			.animate({opacity: 1}, 198);
		});
	});
	$('a.link-modal-2').click( function(event){
		event.preventDefault();
		$('.overlay').fadeIn(297, function(){
		$('#modal-2') 
			.css('display', 'block')
			.animate({opacity: 1}, 198);
		});
	});

	$('.modal-close, .overlay').click( function(){
		$('#modal, #modal-2').animate({opacity: 0}, 198,
		function(){
			$(this).css('display', 'none');
			$('.overlay').fadeOut(297);
		});
	});
});



/*----------------------Reset All Filter----------------------*/
$('.reset-filter, .reset').click(function() {
	$('input[type="checkbox"]:checked').prop('checked', false);
});





/*----------------------Checked Region----------------------*/

if (document.querySelector('fieldset')) {
	var t = document.querySelector('.tree');
	var fieldset = [].filter.call(t.querySelectorAll('fieldset'), function(element) {return element;});
	fieldset.forEach(function(eFieldset) {
		var main = [].filter.call(t.querySelectorAll('[type="checkbox"]'), function(element) {return element.parentNode.nextElementSibling == eFieldset;});
		main.forEach(function(eMain) {
		var all = eFieldset.querySelectorAll('[type="checkbox"]');
		eFieldset.onchange = function() {
			var allChecked = eFieldset.querySelectorAll('[type="checkbox"]:checked').length;
			eMain.checked = allChecked == all.length;
			eMain.indeterminate = allChecked > 0 && allChecked < all.length;
		}
		eMain.onclick = function() {
			for(var i=0; i<all.length; i++)
			all[i].checked = this.checked;
		}
		});
	});
}



/*----------------------Leng-list----------------------*/


$(document).ready(function(){
	$('.leng-list-1').hide();
	$('.leng-list').click(function(){
	$(this).next().toggle()});
});

$(document).ready(function(){
	$('.leng-list-m-1').hide();
	$('.leng-list-m').click(function(){
	$(this).next().toggle()});
});




/*----------------------Form- Validation----------------------*/
if (document.querySelector('.form-log-in')) {


	var form = document.querySelector('.form-log-in')
	var validateBtn = form.querySelector('.validateBtn')
	var password = form.querySelector('.password')
	var passwordConfirmation = form.querySelector('.passwordConfirmation')
	var fields = form.querySelectorAll('.field')

	var generateError = function (text) {
		var error = document.createElement('div')
		error.className = 'error'
		error.style.color = 'red'
		error.innerHTML = text
		return error
	}

	var removeValidation = function () {
		var errors = form.querySelectorAll('.error')

		for (var i = 0; i < errors.length; i++) {
		errors[i].remove()
		}
	}

/*	var checkFieldsPresence = function () {
		for (var i = 0; i < fields.length; i++) {
		if (!fields[i].value) {
			console.log('Поле пустое', fields[i])
			var error = generateError('')
			form[i].parentElement.insertBefore(error, fields[i])
		}
		}
	}*/

	var checkPasswordMatch = function () {
		if (password.value !== passwordConfirmation.value) {
			console.log('not equals')
			var error = generateError('Неверный пароль')
			document.querySelector('.input-2').classList.add('pop');
			password.parentElement.insertBefore(error, password)
			
		}
	}

	form.addEventListener('submit', function (event) {
		event.preventDefault()

		removeValidation()
/*
		checkFieldsPresence()*/

		checkPasswordMatch()
	})
}



/*----------------------Head Mobile menu----------------------*/

$(function() {
	var $menu_popup = $('.menu-popup');

	$(".menu-triger, .menu-close").click(function(){
		$menu_popup.slideToggle(300, function(){
			if ($menu_popup.is(':hidden')) {
				$('body').removeClass('body_pointer');
			} else {
				$('body').addClass('body_pointer');
			}
		});  
		return false;
	});

	$(document).on('click', function(e){
		if (!$(e.target).closest('.menu-m').length){
			$('body').removeClass('body_pointer');
			$menu_popup.slideUp(300);
		}
	});
});


/*----------------------Change Currency in Calculation----------------------*/

$(document).ready(function() {
	$(".radio_option").change(function() {


		if ($('#modal-price-1').prop("checked")) {
			$('#hide-modal-price-1').show(0);
		} else {
			$('#hide-modal-price-1').hide(0);
		}
		if ($('#modal-price-2').prop("checked")) {
			$('#hide-modal-price-2').show(0);
		} else {
			$('#hide-modal-price-2').hide(0);
		}
		if ($('#modal-price-1').prop("checked")) {
			$('#hide-modal-price-3').show(0);
		} else {
			$('#hide-modal-price-3').hide(0);
		}
		if ($('#modal-price-2').prop("checked")) {
			$('#hide-modal-price-4').show(0);
		} else {
			$('#hide-modal-price-4').hide(0);
		}

	});
});

/*----------------------Calculation----------------------*/


$("#ok").click(function(){
	if (document.querySelector('.modal-yaht')) { 
		let sum = document.getElementById('sum');
		let all = document.getElementById('all');

		let small = document.querySelectorAll('.input-small'); 
		let numbers = []; // Массив, куда запишутся все значения инпутов

		for( let i = 0; i < small.length; i++ ){
			numbers.push( small[i].value ); // (*1)

				small[i].addEventListener('input', function(){
				numbers[i] = this.value; 
				// При вводе чисел в любом инпуте, не будем пересобирать все значения, 
				// а только изменим конкретный элемент массива. 
				// this - указывает на инпут, в котором печатают (который запускает эту функцию)

				// Все значения в массиве обновлены, можно обновить и результаты:
				// updateResults();
			});
		}
		updateResults();

		/************/

		function updateResults(){
			sum.value = sumArr( numbers );
			all.value = numbers.join(', ');
		}

		function sumArr(arr){
				let x = 0;
				for( let i = 0; i < arr.length; i++ ){
				x += +arr[i]; // (*2)
			}
			b=x+3000+((x)*32/100);
			return b;
			// document.getElementById('sum').innerHTML = x;
		}
	}
});
$("#ok-1").click(function(){
	if (document.querySelector('.modal-avto-1-1')) { 
		let sum = document.getElementById('sum-1');
		let all = document.getElementById('all');

		let small = document.querySelectorAll('.input-small'); 
		let numbers = []; // Массив, куда запишутся все значения инпутов

		for( let i = 0; i < small.length; i++ ){
			numbers.push( small[i].value ); // (*1)

				small[i].addEventListener('input', function(){
				numbers[i] = this.value; 
				// При вводе чисел в любом инпуте, не будем пересобирать все значения, 
				// а только изменим конкретный элемент массива. 
				// this - указывает на инпут, в котором печатают (который запускает эту функцию)

				// Все значения в массиве обновлены, можно обновить и результаты:
				// updateResults();
			});
		}
		updateResults();

		/************/

		function updateResults(){
			sum.value = sumArr( numbers );
			all.value = numbers.join(', ');
		}

		function sumArr(arr){
				let x = 0;
				for( let i = 0; i < arr.length; i++ ){
				x += +arr[i]; // (*2)
			}
			t=x+1400;
			return t;
			// document.getElementById('sum').innerHTML = x;
		}
	}
});
$("#ok-2").click(function(){
	if (document.querySelector('.modal-avto-1-2')) { 
		let sum = document.getElementById('sum-2');
		let all = document.getElementById('all');

		let small = document.querySelectorAll('.input-small'); 
		let numbers = []; // Массив, куда запишутся все значения инпутов

		for( let i = 0; i < small.length; i++ ){
			numbers.push( small[i].value ); // (*1)

				small[i].addEventListener('input', function(){
				numbers[i] = this.value; 
				// При вводе чисел в любом инпуте, не будем пересобирать все значения, 
				// а только изменим конкретный элемент массива. 
				// this - указывает на инпут, в котором печатают (который запускает эту функцию)

				// Все значения в массиве обновлены, можно обновить и результаты:
				// updateResults();
			});
		}
		updateResults();

		/************/

		function updateResults(){
			sum.value = sumArr( numbers );
			all.value = numbers.join(', ');
		}

		function sumArr(arr){
				let x = 0;
				for( let i = 0; i < arr.length; i++ ){
				x += +arr[i]; // (*2)
			}
			b=x+10000+95+111+50+131+292+388+15+800+300+500;
			return b;
			// document.getElementById('sum').innerHTML = x;
		}
	}
});

/*--------------------------Слайдер-----------------------------*/
if (document.querySelector('.slider-body, .nav')) {
	'use strict';
	var multiItemSlider = (function () {
		return function (selector, config) {
		var
			_mainElement = document.querySelector(selector), // основный элемент блока
			_sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
			_sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
			_sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
			_sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
			_sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
			_wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
			_itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
			_positionLeftItem = 0, // позиция левого активного элемента
			_transform = 0, // значение транфсофрмации .slider_wrapper
			_step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
			_items = [], // массив элементов
			_interval = 0,
			_config = {
				isCycling: true, // автоматическая смена слайдов
				direction: 'right', // направление смены слайдов
				interval: 5000, // интервал между автоматической сменой слайдов
				pause: true // устанавливать ли паузу при поднесении курсора к слайдеру
			};

		for (var key in config) {
			if (key in _config) {
				_config[key] = config[key];
			}
		}

		// наполнение массива _items
		_sliderItems.forEach(function (item, index) {
			_items.push({ item: item, position: index, transform: 0 });
		});

		var position = {
			getItemMin: function () {
			var indexItem = 0;
			_items.forEach(function (item, index) {
				if (item.position < _items[indexItem].position) {
				indexItem = index;
				}
			});
			return indexItem;
			},
			getItemMax: function () {
			var indexItem = 0;
			_items.forEach(function (item, index) {
				if (item.position > _items[indexItem].position) {
				indexItem = index;
				}
			});
			return indexItem;
			},
			getMin: function () {
			return _items[position.getItemMin()].position;
			},
			getMax: function () {
			return _items[position.getItemMax()].position;
			}
		}

		var _transformItem = function (direction) {
			var nextItem;
			if (direction === 'right') {
			_positionLeftItem++;
			if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) > position.getMax()) {
				nextItem = position.getItemMin();
				_items[nextItem].position = position.getMax() + 1;
				_items[nextItem].transform += _items.length * 100;
				_items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
			}
			_transform -= _step;
			}
			if (direction === 'left') {
			_positionLeftItem--;
			if (_positionLeftItem < position.getMin()) {
				nextItem = position.getItemMax();
				_items[nextItem].position = position.getMin() - 1;
				_items[nextItem].transform -= _items.length * 100;
				_items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
			}
			_transform += _step;
			}
			_sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
		}

		var _cycle = function (direction) {
			if (!_config.isCycling) {
			return;
			}
			_interval = setInterval(function () {
			_transformItem(direction);
			}, _config.interval);
		}

		// обработчик события click для кнопок "назад" и "вперед"
		var _controlClick = function (e) {
			if (e.target.classList.contains('slider__control')) {
			e.preventDefault();
			var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
			_transformItem(direction);
			clearInterval(_interval);
			_cycle(_config.direction);
			}
		};

		var _setUpListeners = function () {
			// добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
			_sliderControls.forEach(function (item) {
			item.addEventListener('click', _controlClick);
			});
			if (_config.pause && _config.isCycling) {
			_mainElement.addEventListener('mouseenter', function () {
				clearInterval(_interval);
			});
			_mainElement.addEventListener('mouseleave', function () {
				clearInterval(_interval);
				_cycle(_config.direction);
			});
			}
		}

		// инициализация
		_setUpListeners();
		_cycle(_config.direction);

		return {
			right: function () { // метод right
			_transformItem('right');
			},
			left: function () { // метод left
			_transformItem('left');
			},
			stop: function () { // метод stop
			_config.isCycling = false;
			clearInterval(_interval);
			},
			cycle: function () { // метод cycle 
			_config.isCycling = true;
			clearInterval(_interval);
			_cycle();
			}
		}

		}
	}());

	var slider = multiItemSlider('.slider', {
		isCycling: true
	})

	document.querySelectorAll('.slider').forEach(function(item, index){ 
		item.setAttribute('slider-id', index);
		multiItemSlider('[slider-id="'+ index +'"]');
	});
}



/*--------------------------Якоря-----------------------------*/

 $(document).ready(function(){
	$("#nav-pc").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});
$(document).ready(function(){
	 $("#nav-f").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			 top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});
$(document).ready(function(){
	$("#nav-m").on("click","a", function (event) {
		 event.preventDefault();
		 var id  = $(this).attr('href'),
			 top = $(id).offset().top;
		 $('body,html').animate({scrollTop: top}, 1500);
	});
});