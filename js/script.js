'use strict'

const subTelMenu = document.querySelector('.phones-header__arrow');
const subTelList = document.querySelector('.phones-header__list');

$(document).ready(function () {
	$('.phones-header__arrow').click(function (event) {

		$(this).toggleClass('active').next().slideToggle(300);
	});

});

/*subTelMenu.addEventListener('click', function (e) {
	subTelMenu.classList.toggle('active');
	subTelList.classList.toggle('active');
});*/

/*const menuBlocks = document.querySelector('.sub-menu-catalog');
const menuCategory = document.querySelector('.item-catalog')

menuCategory.addEventListener('click', function (event) {
	menuBlocks.classList.toggle('_sub-menu-open')
});*/
//Автоматическое подсчитывание стобов, категорий и добавления класса

//const menuBlocks = document.querySelectorAll('.sub-menu-catalog__block');

/*if (menuBlocks.length) {
	menuBlocks.forEach(menuBlocks => {
		const menuBlocksItems = menuBlocks.querySelectorAll('.body-catalog__title').length;
		menuBlocks.classList.add(`sub-menu-catalog__block_${menuBlocksItems}`);
	});
}
*/

document.addEventListener("click", documentActions); // клик на документ
function documentActions(e) {
	const targetElement = e.target; // принимаем нажатый обьект
	if (targetElement.closest('[data-parent]')) {
		const subMenuId = targetElement.dataset.parent ? targetElement.dataset.parent : null;
		// находим обьект 
		const subMenu = document.querySelector(`[data-submenu="${subMenuId}"]`);
		const catalogHeader = document.querySelector('.menu-catalog__sub-menu');
		if (subMenu) {

			const activeLink = document.querySelector('._sub-menu-active');
			const activeBlock = document.querySelector('._sub-menu-open');
			const activeHead = document.querySelector('._sub-menu-show');
			if (activeLink && activeLink !== targetElement) {
				activeLink.classList.remove('_sub-menu-active');
				activeBlock.classList.remove('_sub-menu-open');
				activeHead.classList.remove('_sub-menu-show');
			}
			targetElement.classList.toggle('_sub-menu-active');
			subMenu.classList.toggle('_sub-menu-open');
			catalogHeader.classList.toggle('_sub-menu-show')

		} else {
			console.log("что то не так упс");
		}

		e.preventDefault();


	}
}











let myImageSlider = new Swiper('.image-slider', {
	// Стрелки
	/*navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},*/
	// Вкючение/отключение
	// перетаскивания на ПК
	simulateTouch: true,
	// чувствительность свайпа
	touchRatio: 1,
	// угол срабатывания свайпа/перетаскивания
	touchAngle: 45,
	// курсор перетаскивания
	grabCursor: true,



	// Управление клавиатурой
	keyboard: {
		// вкл.выкл
		enabled: true,
		// вкл.выкл только когда слайдер в пределах вьюпорта
		onlyInViewport: true,
		// вкл.выкл управление клавишами pageUp, pageDown
		pageUpDown: true,
	},


	// количество показа 
	slidesPerView: 1,
	// количество пролистываемых слайдов
	slidesPerGroup: 1,

	// отступ между слайдами
	spaceBetween: 10,

	//свободный режим
	//freeMode: true,
	//бесконечный слайдер
	//loop: true,

	/*autoplay: {
		// пауза между прокруткой
		delay: 1000,
		// закончить на последнем слайде
		stopOnLastSlide: true,
		// отключить после ручного переключения
		disableOnInteraction: false,
	},*/
	// Управлением колеса мыши
	mousewheel: {
		// чувствительность колеса мыши
		sensitivity: 1,
		// класс обьекта на котором будет срабатывать прокрутка мышью
		eventsTaget: ".image-slider"
	},

	//брейк поинты
	//ширина экрана
	breakpoints: {
		320: {
			slidesPerView: 1.2,
		},
		480: {

			slidesPerView: 2.2,
		},
		767: {
			slidesPerView: 3.2,
		},
		950: {

			slidesPerView: 4.2,
		},

	},

});

//const myImageSlider = document.querySelectorAll('.swiper-slide');

// Запуск автопрокрутки при наведении
/*let sliderBlock = document.querySelector('.image-slider');

// myImageSlider - это переменная которой присвоен слайдер
sliderBlock.addEventListener('mouseenter', function (e) {
	myImageSlider.params.autoplay.disableOnInteraction = false;
	myImageSlider.params.autoplay.delay = 500;
	myImageSlider.autoplay.start();
});

sliderBlock.addEventListener('mouseleave', function (e) {
	myImageSlider.autoplay.stop();
});

*/
let gallery = new Swiper('.gallery-block', {
	// количество показа 
	slidesPerView: 1,
	speed: 800,
	// куб

	effect: 'cube',

	cubeEffect: {
		// настройки тени
		slideShadows: false,
		shadow: true,
		shadowOffset: 1,
		shadowScale: 0.3,
	},



});


const sliderNavItems = document.querySelectorAll('.gallery-nav__item');
const sliderNav = document.querySelector('.gallery-nav');

sliderNavItems.forEach((el, index) => {
	el.setAttribute('data-index', index);

	el.addEventListener('click', (e) => {
		const index = parseInt(e.currentTarget.dataset.index);
		gallery.slideTo(index);
	});
});




//-----------------------------------------------TABS-----------------------------------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', () => {
	const tabs = document.querySelector('.tabs');
	const tabsBtn = document.querySelectorAll('.tabs__btn');
	const tabsContent = document.querySelectorAll('.tabs__content');

	if (tabs) {
		tabs.addEventListener('click', (e) => {
			if (e.target.classList.contains('tabs__btn')) {
				const tabsPath = e.target.dataset.tabsPath;
				tabsHandler(tabsPath);
			}
		});
	}
	const tabsHandler = (path) => {
		tabsBtn.forEach(el => { el.classList.remove('tabs__btn--active') });
		document.querySelector(`[data-tabs-path="${path}"]`).classList.add('tabs__btn--active');

		tabsContent.forEach(el => { el.classList.remove('tabs__content--active') });
		document.querySelector(`[data-tabs-target="${path}"]`).classList.add('tabs__content--active');
	};
});




//-----------------------------------------REVIEW--------------------------------------------------------------------------

$('#review').bind('input propertychange', function () {
	alert("Работает!");

	$.ajax({
		method: "POST",
		url: "updateDatabase.php",
		data: { content: $("#review").val() }
	})
		.done(function (msg) {
			alert("Data Saved: " + msg);
		});

});

















const form = document.querySelector('.order');


let selector = document.querySelectorAll('input[type="tel"]');
let im = new Inputmask('+7 (999) 999-99-99');
im.mask(selector);



new window.JustValidate('.order', {
	rules: {

		tel: {
			required: true,
			function: () => {
				const phone = selector.im.unmaskedvalue();
				return Number(phone) && phone.length === 10;
			}
		}

	},
	messages: {
		name: {
			required: 'Введите имя',
			minLength: 'Введите 3 и более символов',
			maxLength: 'Запрещено вводить более 15 символов'
		},
		email: {
			email: 'Введите корректный email',
			required: 'Введите email',
		},
		tel: {
			required: 'Введите телефон',
			function: 'Здесь должно быть 10 символов без +7',
		},
	},
	submitHandler: function (thisform) {
		let formData = new FormData(thisform);

		let xhr = new XMLHttpRequest(); // создаем запрос

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено')
				}
			}
		}
		xhr.open('POST', 'gmail.php', true);
		xhr.send(formData);

		thisform.reset();
	}
});









new window.JustValidate('.contact', {

	submitHandler: function (thisform) {
		let formData = new FormData(thisform);

		let xhr = new XMLHttpRequest(); // создаем запрос

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено')
				}
			}
		}
		xhr.open('POST', 'gmail1.php', true);
		xhr.send(formData);

		thisform.reset();
	}
});















/*validateForms('.order', { email: { required: true, email: true }, tel: { required: true } }, ".thanks-popup", "send goal");


document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('form'); // присваиваем весь обьект form
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault(); // запрещаем стандартную отправку формы

		let formData = new FormData(form);

		form.classList.add('_sending');

		let response = await fetch('sendmail.php', {
			method: 'POST',
			body: formData,
		});
		if (response.ok) {
			let result = await response.json();
			alert(result.message);
			form.reset();
			form.classList.remove('_sending');
		} else {
			alert("Ошибка");
			form.classList.remove('_sending');
		}

	}
});
*/

