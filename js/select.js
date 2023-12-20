

const selects = document.querySelectorAll('.contacts-form__select');
selects.forEach(el => {
	new Choices(el, {
		shouldSort: false,
		position: 'bottom',
		searchEnabled: true,

	});
});
