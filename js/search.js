const results = document.getElementById('results');

function generateCards(count) {
	const cards = [];
	for (let i = 0; i < count; i++) {
		cards.push(`	<div class="hotSale__item item <?= $data['brand']?>" data-price="<?= $data['newPrice']?>"
		data-rating="<?= $data['rating']?>">
		<article class="product product_cart elastic ">
			<a href="#" class="product__image">
				<div class="product__switch image-switch">
					<div class="image-switch__item">
						<div class="image-switch__img"><img src="<?=
						$data['image'];
						?>" alt=""></div>
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
	</div>`)

	}
	return cards;



}
const cardsArr = generateCards(10);

results.innerHTML = cardsArr;
