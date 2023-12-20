<section class="contacts">
	<div class="contacts__container">
		<h2 class="contacts__title home-title">Контакты</h2>
		<p class="contacts__descr">Пожалуйста заполните эту форму и мы свяжемся с вами</p>
		<div class="contacts__content">

			<form action="" method="post" class="contacts-form contact" enctype="multipart/form-data" id="formContact">
				<div class="contacts-form__line">
					<label class="contacts-form__field">
						<span class="contacts-form__caption">Имя</span>
						<input name="name" class="contacts-form__input" type="text" required>
					</label>
					<label class="contacts-form__field">
						<span class="contacts-form__caption">Мне интересно</span>
						<select name="interested" class="contacts-form__select">
							<option value="">Мне интересно</option>
							<option value="product">О конкретном товаре</option>
							<option value="product">По поводу доставки</option>
							<option value="product">Возврат товара</option>
							<option value="product">Брак товара</option>
							<option value="product">По поводу конкурса</option>
							<option value="product">По поводу новинок</option>

						</select>
					</label>
				</div>
				<div class="contacts-form__line">
					<label class="contacts-form__field">
						<span class="contacts-form__caption">Телефон</span>
						<input name="phone" class="contacts-form__input" type="tel" required>
					</label>

					<label class="contacts-form__field">
						<span class="contacts-form__caption">Месторасположение</span>
						<select name="location" class="contacts-form__select" required>
							<option value="">Месторасположение</option>
							<option value="almaty">Алматы</option>
							<option value="kapchagai">Капчагай</option>
							<option value="karaganda">Караганда</option>
							<option value="nur_sultan">Нур-Султан</option>
							<option value="shymkent">Шымкент</option>
							<option value="pavlodar">Павлодар</option>
							<option value="taraz">Тараз</option>
							<option value="semei">Семей</option>
							<option value="atyrau">Атырау</option>
							<option value="ust-Kamenogorsk">Усть-Каменагорск</option>
							<option value="aktobe">Актобе</option>
							<option value="kostanay">Костанай</option>
							<option value="kokshetau">Кокшетау</option>
							<option value="kyzylorda">Кызылорда</option>
							<option value="aktau">Актау</option>
							<option value="talgar">Талгар</option>
							<option value="zhezkazgan">Жезказган</option>
							<option value="kaskelen">Каскелен</option>
							<option value="temirtau">Темиртау</option>
							<option value="altai">Алтай</option>
							<option value="bulaevo">Булаево</option>
							<option value="yesil">Есиль</option>
							<option value="zharkent">Жаркент</option>
							<option value="aksu">Аксу</option>

						</select>
					</label>
				</div>

				<div class="contacts-form__line">
					<label class="contacts-form__field">
						<span class="contacts-form__caption">Email</span>
						<input name="email" class="contacts-form__input" type="email" required>
					</label>

					<fieldset class="contacts-form__fields">
						<legend class="contacts__caption">Выберите удобный вариант для связи:</legend>
						<div class="contacts-form__flex">
							<label class="contacts-form__radio">
								<input id="radio" value="phone" name="contact_method" type="radio" class="custom-radio">
								<label for="radio">Телефон</label>
							</label>
							<label class="contacts-form__radio ">

								<input id="radio1" value="email" name="contact_method" type="radio"
									class="custom-radio__input custom-radio">
								<label for="radio1">Email</label>
							</label>
							<label class="contacts-form__radio ">

								<input id="radio2" value="zoom" name="contact_method" type="radio"
									class="custom-radio__input custom-radio">
								<label for="radio2">Zoom</label>
							</label>
						</div>
					</fieldset>
				</div>

				<label class="contacts-form__field">
					<span class="contacts-form__caption">Сообщение</span>
					<textarea name="message" class="contacts-form__input contacts-form__input--big " maxlength="255">
					</textarea>
				</label>
				<div class="contacts-form__checkbox order__checkbox">
					<input checked id="contactAgreement" type="checkbox" name="agreement" class="order__checkbox-input">
					<label for="contactAgreement" class="order__checkbox-label"><span> Я даю свое согласие на обработку
							персональных данных в соответствии с <a href="">Условиями</a>*</span></label>
				</div>
				<button type="submit" class="contacts-form__btn">Отправить</button>
			</form>
		</div>
	</div>
</section>