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
	<link rel="stylesheet" href="css/scroll.css">
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
			<!--<nav class="nav-sort">
			<ul class="sort__list">


				<input type="checkbox" data-brand="Apple">Apple</input>
				<input type="checkbox" data-brand="Xiaomi">Xiaomi</input>
				<input type="button" data-brand="all">Все</input>
			</ul>

			</nav>--->
			<div class="sort">
				<div class="sort__container">
					<h2 class="sort__title">Сортировать :</h2>
					<div class="sort__body">
						<button id="sort-asc" type="button" class="sort__asc sort-button">По возрастанию</button>
						<button id="sort-desc" type="button" class="sort__desc sort-button">По выбыванию</button>
						<button id="sort-rating" type="button" class="sort__raiting sort-button">По рейтингу</button>
					</div>
				</div>
			</div>

			<div class="main__hotSale hotSale">
				<div class="hotSale__container">
					<div id="results" class="results hotSale__items"></div>
					<div class="hotSale__body">
						<h2 class="hotSale__title home-title">Хиты продаж</h2>
						<div class="hotSale__items goods-wrap">
							<?php
							foreach($info as $data):
							?>
							<div class="hotSale__item item <?= $data['brand']?>" data-price="<?= $data['newPrice']?>"
								data-rating="<?= $data['rating']?>">
								<article class="product product_cart elastic ">
									<a href="#" class="product__image">
										<div class="product__switch image-switch">
											<div class="image-switch__item">
												<div class="image-switch__img"><img src="<?=
												$data['image'];
												?>" alt="Samsung"></div>
											</div>
											<div class="image-switch__item">
												<div class="image-switch__img"><img src="<?= $data['slide1']?>" alt=""></div>
											</div>
											<div class="image-switch__item">
												<div class="image-switch__img"><img src="<?= $data['slide2']?>" alt=""></div>
											</div>
										</div>
										<ul class="product__image-pagination image-pagination" aria-hidden="true">

										</ul>
									</a>

									<a href="product.php" class="product__title">
										<?= $data['name'] ?>
									</a>
									<div class="product-body">
										<div class="product__props props-product">
											<span class="props-product__rating _icon-Star-5">
												<?= $data['rating'] ?>
											</span>
											<span class="props-product__testimonials">
												<?= $data['review'] ?> отзывы
											</span>
										</div>
										<div class="product__info info-product">
											<span class="info-product__term">Артикул: <span>
													<?= $data['vendorCode']?>
												</span></span>
											<span class="info-product__available">В наличии: <span>
													<?= $data['quantity']?>
												</span></span>
										</div>
										<div class="product__price product-price">
											<span class="product-price__current">
												<?= $data['newPrice']?><span>₸</span>
											</span>
											<span class="product-price__old">
												<?= $data['oldPrice']?><span>₸</span>
											</span>
										</div>
									</div>
									<div class="product__body body-product">
										<button type="button" class="body-product__sale _icon-sale"></button>
										<button type="button" class="body-product__basket _icon-basket_96252"></button>
									</div>
								</article>
							</div>
							<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>


			<?php
				include('resent-news.php');
				?>
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
								<li class="order-modal__item">
									<article class="order-modal__product order-product">
										<img src="/img/img_0_77_3415_0_1_320.webp" alt="" class="order-product__img">
										<div class="order-product__text">
											<h3 class="order-product__title">СМАРТФОН SAMSUNG GALAXY S22 ULTRA 256GB BURGUNDY</h3>
											<input id="title" type="text" hidden>
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

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="js/blog-fatch.js"></script>
	<script src="js/sortedMenu.js"></script>
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