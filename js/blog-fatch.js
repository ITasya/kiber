function addForm() {
	fetch('../inc-blogs.php', {
		method: 'get',
	}).then(function (response) {
		if (response.status >= 200 && response.status < 300) {
			return response.json();
		}
		throw new Error(response.statusText)
	})
		.then(function (response) {
			let key;
			let list = document.querySelector('.blogs__container');

			//Добавляет информацию на домашнюю страницу
			for (key in response) {
				list.innerHTML += `
				<div class="blogs__item blog-item">
				<div class="blog-item__title">${response[key].subtitle}</div>
				<div class="blog-item__subtitle">${response[key].name}</div>
				<div class="blog-item__content">${response[key].content}</div>
			</div>
	`

			}
		})
}

addForm();

