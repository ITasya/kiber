const productBtn = document.querySelectorAll(".body-product__basket");
const basketProductsList = document.querySelector('.content-basket__list');
const basket = document.querySelector(".basket")
const basketQuantity = document.querySelector(".basket__quantity");
const fullPrice = document.querySelector(".fullprice");
const orderModalOpenProd = document.querySelector('.order-modal__btn');
const orderModalList = document.querySelector('.order-modal__list');
let price = 0;
let productArray = [];

//передаем id карточкам
const randomId = () => {
	return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
};

//удаление пробелов
const priceWithoutSpaces = (str) => {
	return str.replace(/\s/g, '');
};
//переводит обратно в нормальную строку
const normalPrice = (str) => {
	return String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
}

const plusFullPrice = (currentPrice) => {
	return price += currentPrice;
};

const minusFullPrice = (currentPrice) => {
	return price -= currentPrice;
};

const printFullPrice = () => {
	fullPrice.textContent = `${normalPrice(price)} ₸` //записываем итогувую сумму в нормальном виде
};

const printQuantity = () => {
	let lenght = basketProductsList.querySelector('.simplebar-content').children.length; //подсчет кол-ва товаров в корзине
	basketQuantity.textContent = lenght;

	lenght > 0 ? basket.classList.add('active') : basket.classList.remove('active');
};

//берем данные карточки
const generateBasketProduct = (img, title, price, id) => {
	return `
	<li class="content-basket__item">
										<article class="content-basket__product basket-product" data-id="${id}">
											<img src="${img}" alt="samsung" class="basket-product__img">
											<div class="basket-product__text">
												<h3 class="basket-product__title">${title}</h3>
												<span class="basket-product__price">${normalPrice(price)} ₸</span>
											</div>
											<button class="basket-product__delete" aria-label="Удалить товар"></button>
										</article>
									</li>
 `;
}

const deleteProducts = (productParent) => {
	let id = productParent.querySelector('.basket-product').dataset.id;
	document.querySelector(`.product[data-id="${id}"]`).querySelector('.body-product__basket').disabled = false;
	// get the id
	// disabled false
	// minus price
	let currentPrice = parseInt(priceWithoutSpaces(productParent.querySelector('.basket-product__price').textContent));
	minusFullPrice(currentPrice);
	// print fullprice
	printFullPrice();
	// remove productParent
	productParent.remove();
	// count and print quantity
	printQuantity();
};

productBtn.forEach(el => {

	el.closest('.product').setAttribute('data-id', randomId());
	el.addEventListener('click', (e) => {
		let self = e.currentTarget; //помещаем текущий элемент
		let parent = self.closest('.product'); //находим именно текущий продукт
		let id = parent.dataset.id;
		let img = parent.querySelector('.image-switch__img img').getAttribute('src');
		let title = parent.querySelector('.product__title').textContent;
		let priceNumber = parseInt(priceWithoutSpaces(parent.querySelector('.product-price__current').textContent));


		// summ 
		plusFullPrice(priceNumber);

		// print full price
		printFullPrice();
		// add to basket
		basketProductsList.querySelector('.simplebar-content').insertAdjacentHTML('afterbegin', generateBasketProduct(img, title, priceNumber, id));
		printQuantity();

		// count and print quantity

		//disabled btn
		self.disabled = true;

	});
});



basketProductsList.addEventListener('click', (e) => {
	if (e.target.classList.contains('basket-product__delete')) {
		deleteProducts(e.target.closest('.content-basket__item'));
	}
});

orderModalOpenProd.addEventListener('click', (e) => {

	orderModalOpenProd.classList.toggle('open');
	orderModalList.classList.toggle('open');

});

const generateModalProduct = (img, title, price, id) => {
	return `
	<li class="order-modal__item">
	<article class="order-modal__product order-product" data-id="${id}">
		<img src="${img}" alt="" class="order-product__img">
		<div class="order-product__text">
			<h3 class="order-product__title">${title}</h3>
			<input id="title" type="text" hidden value="${title}" name="title">
			<span class="order-product__price">${normalPrice(price)} </span>
			<input id="price" type="text" name="price" hidden value="${normalPrice(price)}">
		</div >
	<button class="order-product__delete">Удалить</button>
	</article >
	</li >

	`;

}
//document.getElementById('title').value = tmp;
const modal = new GraphModal({
	isOpen: (modal) => {
		console.log('opened');
		let array = basketProductsList.querySelector('.simplebar-content').children;
		let summ = fullPrice.textContent;
		let lenght = array.length;
		document.querySelector('.order-modal__quantity span').textContent = `${lenght} шт`;
		document.querySelector('.order-modal__summ span').textContent = `${summ} `;
		for (item of array) {
			console.log(item);
			let img = item.querySelector('.basket-product__img').getAttribute('src');
			let title = item.querySelector('.basket-product__title').textContent;
			let priceNumber = priceWithoutSpaces(item.querySelector('.basket-product__price').textContent);
			let id = item.querySelector('.basket-product').dataset.id;
			orderModalList.insertAdjacentHTML('afterbegin', generateModalProduct(img, title, priceNumber, id));

			let obj = {};
			obj.title = title;
			obj.price = priceNumber;
			productArray.push(obj);
		}

		console.log(productArray);
	},
	isClose: () => {
		console.log('closed');

	}
});


/*
document.querySelector('.order').addEventListener('submit', (e) => {
	e.preventDefault();
	let self = e.currentTarget;
	let formData = new FormData(self);
	let name = self.querySelector('[name="Имя"]').value;
	let tel = self.querySelector('[name="Телефон"]').value;
	let mail = self.querySelector('[name="Email"]').value;
	formData.append('Товары', JSON.stringify(productArray));
	formData.append('Имя', name);
	formData.append('Телефон', tel);
	formData.append('Email', mail);

	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4) {
			if (xhr.stats === 200) {
				console.log("Отправлено");
			}
		}
	}
	xhr.open('POST', 'mail.php', true);
	xhr.send(formData);


	self.reset();
}); */