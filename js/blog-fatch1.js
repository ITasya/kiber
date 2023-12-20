function addForm() {
	fetch('../inc-blogs1.php', {
		method: 'get',
	}).then(function (response) {
		if (response.status >= 200 && response.status < 300) {
			return response.json();
		}
		throw new Error(response.statusText)
	})
		.then(function (response) {
			let key;
			let list = document.querySelector('.content-basket__list');

			//Добавляет информацию на домашнюю страницу
			for (key in response) {
				list.innerHTML += `
				<li class="content-basket__item">
				<article class="content-basket__product basket-product">
					<img src="/img/img_0_77_3415_0_1_320.webp" alt="samsung" class="basket-product__img">
					<div class="basket-product__text">
						<input type="text" name="title" class="basket-product__title">${response[key].title}
						</input>
						<input type="text" name="price" class="basket-product__price">${response[key].price}</input>
					</div>
					<button class="basket-product__delete" aria-label="Удалить товар"></button>
				</article>
				</li>
				
	`

			}
		})
}

addForm();


