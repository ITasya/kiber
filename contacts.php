<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/choices.min.css">
	<link rel="stylesheet" href="css/simplebar.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/scroll.css">
	<link rel="stylesheet" href="libs/modal/modal.css">

	<title>Контакты</title>
</head>

<body>


	<div class="wrapper">
		<header class="header">
			<div class="header__top top-header">
				<div class="top-header__container">
					<?php
						include('nav.php');
					?>
				</div>
			</div>
			<div class="header__body body-header">
				<?php
				include('header-body.php');
				?>
			</div>
			<div class="header__catalog catalog-header">
				<div class="catalog-header__container">
					<?php
				include('header-catalog.php');
				?>
				</div>
			</div>
		</header>
		<main class="main">

			<?php
				include('contact.php');
				?>

			<?php
				include('contact-info.php');
				?>

			<iframe
				src="https://yandex.ru/map-widget/v1/?um=constructor%3A0f5eacfe07460413eefc4aebf2c1ecb5a14abec99840b1d170118ece1f7b6baf&amp;source=constructor"
				width="100%" height="400" frameborder="0"></iframe>

		</main>
		<div class="modal">
			<div class="modal__container order-modal" role="dialog" aria-modal="true" data-graph-target="modal">
				<div class="modal-content order-modal__content">
					<div class="order-modal__top">
						<h2 class="order-modal__title">Оформление заказа</h2>
						<span class="order-modal__numder">Заказ № 82739</span>
					</div>
					<div class="order-modal__info">
						<div class="order-modal__quantity order-modal__info-item">Товаров в заказе: <span> 3 шт</span></div>
						<div class="order-modal__summ order-modal__info-item">Общая сумма заказа: <span> 789 990 ₸</span>
						</div>
						<div class="order-modal__products order-modal__info-item">
							<button class="order-modal__btn _icons-arrown">Состав заказа</button>
							<ul class="order-modal__list">
								<!--	<li class="order-modal__item">
								<article class="order-modal__product order-product">
									<img src="/img/img_0_77_3415_0_1_320.webp" alt="" class="order-product__img">
									<div class="order-product__text">
										<h3 class="order-product__title">СМАРТФОН SAMSUNG GALAXY S22 ULTRA 256GB BURGUNDY</h3>
										<span class="order-product__price">699 990 ₸</span>
									</div>
									<button class="order-product__delete">Удалить</button>
								</article>
							</li>-->

							</ul>
						</div>
					</div>
					<form action="#" method="POST" id="form" class="order-modal__form order" enctype="multipart/form-data">
						<input type="hidden" name="admin_email[]" value="nas.popova030003@gmail.com">
						<label class="order__label">
							<span class="order__text">Ваше имя</span>
							<input id="forName" type="text" name="name" class="order__input" required>
						</label>
						<label class="order__label">
							<span class="order__text">Номер телефона</span>
							<input id="formTel" type="tel" name="tel" data-validate-field="tel" class="order__input"
								placeholder="+7(___)___-__-__" required>
						</label>
						<label class="order__label">
							<span class="order__text">Ваш email</span>
							<input id="formEmail" type="email" name="email" data-validate-field="email" class="order__input"
								placeholder="post@gmail.com" required>
						</label>
						<div class="order__checkbox">
							<input checked id="formAgreement" type="checkbox" name="agreement" class="order__checkbox-input">
							<label for="formAgreement" class="order__checkbox-label"><span> Я даю свое согласие на обработку
									персональных данных в соответствии с <a href="">Условиями</a>*</span></label>
						</div>
						<button type="submit" class="order__btn btn">Оформить заказ</button>
					</form>
				</div>
			</div>
		</div>


		<?php
	include('footer.php');
	?>

	</div>
	<script src="js/choices.min.js"></script>
	<script src="js/select.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="js/simplebar.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="inputmask.min.js"></script>
	<script src="just-validate.min.js"></script>
	<script src="libs/modal/modal.js"></script>
	<script src="js/script.js"></script>
	<script src="js/basket.js"></script>
	<script src="js/product.js"></script>

</body>

</html>