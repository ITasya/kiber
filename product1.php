
<?php
session_start();

$db = new PDO("mysql:host=sdb-u.hosting.stackcp.net; dbname=kiberfairy-3231310021; charset=utf8;", "kiberfairy-3231310021", "popi1234");

//$link = mysqli_connect("sdb-v.hosting.stackcp.net", "Kiberfairy-3231328988","kiberfairy22", "Kiberfairy-3231328988");
$info=[]; // хранятся все данные

if($query=$db->query("SELECT * FROM `products`")){
	// выбрать все и сохранить в info
	$info = $query->fetchAll(PDO::FETCH_ASSOC);

}else{
	print_r($db->errorInfo());
}

/*
$link = mysqli_connect("sdb-v.hosting.stackcp.net", "Kiberfairy-3231328988","kiberfairy22", "Kiberfairy-3231328988");

$query=("SELECT * FROM `products`");
if($result = mysqli_query($link, $query)){
	$row = mysqli_fetch_array($result);
	echo"<pre>";
	print_r($row);
	echo"</pre>";
}*/




?>










<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/simplebar.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/scroll-gallery.css">
	<link rel="stylesheet" href="libs/modal/modal.css">
	<title>Киберфея</title>
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
			<div class="story-construction main-story ">
				<div class="main-story__container">
					<ul class="main-story__list">
						<li class="main-story__item">
							<a href="" class="main-story__link ">Главная</a>
						</li>
						<li class="main-story__item">
							<a href="" class="main-story__link">Товары</a>
						</li>

					</ul>
				</div>
			</div>
			<section class="main__product product-page product">
				<div class="product-page__container">
				<?php
							foreach($info as $data):
							?>
					<div class="product-page__body">
						<div id="gallery1" class="product-page__gallery gallery-product ">

							<ul class="gallery-product__nav gallery-nav" data-simplebar>
								<li class="gallery-nav__item image-switch__img" tabindex="0"><img
										src="img/img_0_77_3415_0_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_11_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_15_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_0_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_11_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_15_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_0_1_320.webp" alt="">
								</li>
								<li class="gallery-nav__item" tabindex="0"><img src="img/img_0_77_3415_11_1_320.webp" alt="">
								</li>
							</ul>
							<div class="gallery-product__block gallery-block">
								<div class="swiper-wrapper">
									<div class="swiper-slide "><img src="img/img_0_77_3415_0_1_320.webp" alt="">
									</div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_11_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_15_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_0_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_11_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_15_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_0_1_320.webp" alt=""></div>
									<div class="swiper-slide"><img src="img/img_0_77_3415_11_1_320.webp" alt=""></div>
								</div>
							</div>
						</div>


						<div class="product-page__data data-product">
							<h2 class="data-product__title product__title">СМАРТФОН SAMSUNG GALAXY S22 ULTRA 256GB BURGUNDY
							</h2>
							<div class="data-product__block block-data-product">
								<div class="block-data-product__block-1 ">
									<div class="block-data-product__props props-product">
										<span class="props-product__rating _icon-Star-5">
											4,5
										</span>
										<span class="props-product__testimonials">83 отзыва</span>
									</div>
									<div class="block-data-product__info info-product">
										<span class="info-product__term">Артикул: 879876</span>
										<span class="info-product__available">В наличии: 13 шт</span>
									</div>
									<div class="block-data-product__price product-price">
										<span class="product-price__current"><?= $data['newPrice']?> ₸</span>
										<span class="product-price__old">720 870 ₸</span>
									</div>
									<div class="block-data-product__body body-product">
										<button type="button" class="body-product__sale _icon-sale"></button>
										<button type="button" class="body-product__basket _icon-basket_96252"></button>
									</div>

								</div>
								<div class="block-data-product__block-2 block-2-data">
									<a href="tel:87477864538" class="block-2-data__tel _icons-phone">8 747 786 45 38</a>
									<p class="block-2-data__title">Обратный звонок</p>
									<p class="block-2-data__text">Позвоните и наши консультанты помогут сделать выбор</p>
								</div>
							</div>
							<div id="delivery1" class="data-product__delivery delivery-data-product">
								<div class="delivery-data-product__body body-delivery">
									<div class="body-delivery__guarantee guarantee">
										<div class="guarantee__icon _icons-certificate">Гарантия</div>
										<div class="guarantee__text">На этот товар в нашем магазине предоставляется гарантия
											сроком
											на 1 (один) год.</div>
									</div>
									<div class="body-delivery__delivery delivery">
										<div class="delivery__icon _icons-mbridelivery">Доставка</div>
										<div class="delivery__text">По Алматы возможна <span>22.06.2022</span></div>
									</div>


								</div>
							</div>
						</div>
					</div>
					<?php
							endforeach;
							?>
					<div id="delivery" class="delivery-data-product__block block-delivery">
						<div class="block-delivery__body"></div>
					</div>
				</div>
			</section>


			<div class="tabs">
				<div class="tabs__container">
					<ul class="tabs__list">
						<li class="tabs__item"><button class="tabs__btn tabs__btn--active"
								data-tabs-path="characteristic">Характеристика</button></li>
						<li class="tabs__item"><button class="tabs__btn" data-tabs-path="brand">Бренд</button></li>
						<li class="tabs__item"><button class="tabs__btn" data-tabs-path="description">Описание</button></li>
					</ul>
					<div class="tabs__content tabs__content--active" data-tabs-target="characteristic">
						<div class="content content-characteristic">
							<h2 class="content__title">Основные характеристики</h2>
							<div class="content__table-block">
								<table class="content__table">
									<tbody class="content__tbody">
										<tr class="content__items">
											<td class="content__item">Операционная система</td>
											<td class="content__item">Android 12</td>
										</tr>
										<tr class="content__items">
											<td class="content__item">Количество SIM-карт</td>
											<td class="content__item">2</td>
										</tr>
										<tr class="content__items">
											<td class="content__item">Диагональ дисплея</td>
											<td class="content__item">6,8″ - 17,27 см</td>
										</tr>
										<tr class="content__items">
											<td class="content__item">Объем встроенной памяти </td>
											<td class="content__item">256 GB</td>
										</tr>
										<tr class="content__items">
											<td class="content__item">Основная камера</td>
											<td class="content__item">108 Mpx + 10 Mpx + 10 Mpx + 12 Mpx</td>
										</tr>
										<tr class="content__items">
											<td class="content__item">Фронтальная камера</td>
											<td class="content__item">40 Mpx</td>
										</tr>
									</tbody>
								</table>
							</div>
							<a href="" class="content__link">Показать еще</a>
						</div>

					</div>
					<div class="tabs__content" data-tabs-target="brand">
						<div class="content content-brand">
							<h2 class="content__title">Бренд</h2>
							<div class="brand-body">
								<p>На протяжении 80 лет компания Самсунг уверенно идет к своим целям, несмотря на преграды. За
									всю истории компании она работала в самых разных сферах и при этом смогла составлять сильную
									конкуренцию в каждой из ниш. Бренд Samsung узнаваем по всему миру, он ассоциируется с
									качеством и техническими инновациями. Чем же значимым успела выделиться компания Samsung за
									историю своего существования:
									Подразделение Samsung Group соорудило самое высокое в мире здание – Бурдж-Халифа в Дубае.
									Высота сооружения достигает 828 метров.
									Парк развлечений, созданный Samsung, Everland входит в топ-10 самых посещаемых в мире.
									Компания Самсунг разработала первый в мире гибкий смартфон.
									В рейтинге смартфонов с лучшим экраном – первенство занимает Samsung Galaxy Note 9.
									Компания в числе первых технологических гигантов обратила свое внимание на
									блокчейн-технологии и разрабатывает собственную криптовалюту.
									Первый 3G звонок с вершины Эвереста был сделан с помощью телефона Galaxy S II.
									Еще в 1999 году компания Samsung была признана лучшим производителем бытовой электроники.</p>
							</div>
						</div>

					</div>
					<div class="tabs__content" data-tabs-target="description">
						<div class="content content-description">
							<h2 class="content__title">Описание</h2>
							<ul class="description__list about__list">
								<li class="description-item description__item about__item">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/01_s22.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class=" description__info--title about__info-title home-title">Samsung Galaxy S22
											Ultra</h2>
										<p class="description__descr about__descr">

											Все по высшим стандартам! Встречайте Galaxy S22 Ultra с поддержкой электронного пера S
											Pen и функцией Ночной режим, а также супермощной батареей.

										</p>
									</div>
								</li>
								<li class="description-item description__item about__item about__item--reverse">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/design.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class="description__info--title about__info-title home-title">Лучшее продолжение
											модели Note</h2>
										<p class="description__descr about__descr">

											Встречайте Galaxy S22 Ultra с мощью Note. Его тонкий алюминиевый корпус впечатляет
											своей совершенной формой. А изысканные очертания задих камер как будто утопают в его
											гладкой поверхности.
										</p>
									</div>
								</li>
								<li class="description-item description__item about__item ">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/02_s22.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class="description__info--title about__info-title home-title">Первый смартфон в серии
											Galaxy S
											с поддержкой S Pen</h2>
										<p class="description__descr about__descr">
											Электронное перо S Pen впервые в серии S. Извлеките его из нижней части корпуса, чтобы
											делать заметки, рисовать или управлять смартфоном. Улучшенный отклик в Samsung Notes
											делает каждый штрих пера таким же естественным, как будто вы пишете обычной ручкой, а
											ваши идеи мгновенно трансформируются в разборчивый текст.
										</p>
									</div>
								</li>
								<li class="description-item description__item about__item about__item--reverse">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/04_s22.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class="description__info--title about__info-title home-title">Ярче еще не было</h2>
										<p class="description__descr about__descr">
											Оцените дисплей Dynamic AMOLED 2X с технологией Vision Booster и 1750 нит, благодаря
											которому вы забудете о бликах. А адаптивная частота обновления 120 Гц обеспечивает
											суперплавный скорллинг для оптимального просмотра.
										</p>
									</div>
								</li>
								<li class="description-item description__item about__item ">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/05_s22.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class="description__info--title about__info-title home-title">Готов на все. От
											рассвета и до заката.</h2>
										<p class="description__descr about__descr">
											Супермощная умная батарея 5000 мА·ч (стандартное значение) подстраивается под ваши
											интересы. Она экономит энергию, когда это больше всего необходимо, продлевая срок
											службы батареи. Фотографируйте, общайтесь и играйте от рассвета и до заката.
										</p>
									</div>
								</li>
								<li class="description-item description__item about__item about__item--reverse">
									<div class="description__image about__image"> <img
											src="https://object.pscloud.io/cms/cms/Uploads/07_s22.webp" alt=""
											class="description__img about__img">
									</div>

									<div class="description__info about__info">
										<h2 class="description__info--title about__info-title home-title">НАДЕЖНОСТЬ
											Самый надежный смартфон
											в линейке Galaxy</h2>
										<p class="description__descr about__descr">
											Рама из высокопрочного алюминия выглядит как настоящая броня, а передняя и задняя части
											оснащены стеклом Corning® Gorilla® Glass Victus®+. И Galaxy S22 Ultra, и S Pen имеют
											класс защиты IP68.
										</p>
									</div>
								</li>
							</ul>

						</div>

					</div>
					<div class="tabs__content" data-tabs-target="Бренд"></div>
					<div class="tabs__content" data-tabs-target="Описание"></div>
				</div>
			</div>
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
							<span class="order__text">Ваше имя</span>
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