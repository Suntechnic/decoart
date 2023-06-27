<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты - Связаться с компанией DecoArt");
$APPLICATION->SetPageProperty('description',"Контактная информация компании ДекоАрт. Индивидуальное проектирование и дизайн интерьеров в Москве. Звоните ☎ +7 495 248 21 08");
$ss = \App\Stringstorage::getInstance();
$phone = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('phone'));
$phone2 = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('phone2'));
$wa = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('whatsapp'));
$tg = $ss->getStringVal('telegram');
?><!-- BEGIN SECTION :: CONTACTS--> <section class="contacts">
<div class="container">
	<h1>Контакты</h1>
	<div class="box__contacts">
		 <!--<a class="header__phone" href="tel:<?=$phone2->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone2->getRawNumber();?></a>-->
		<div class="item__contacts">
 <a class="header__viber" href="https://api.whatsapp.com/send?phone=<?=$wa->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><style>.cls-1{fill:#00b9e5;fill-rule:evenodd;}</style></a>
			<?if($tg):?> <a class="header__telegram" href="https://t.me/<?=$tg?>"></a>
			<?endif?> <a class="header__phone" href="tel:<?=$phone->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone->getRawNumber();?></a>
		</div>
 <a href="mailto:info@decoart.pro" class="contacts__mail">info@decoart.pro</a> <a href="#" class="btn__contacts" id="myBtn">форма для Сотрудничества</a>
	</div>
	<div class="contacts__grid">
		<div class="contacts__el">
			<p class="contacts__title">
				 Румянцево&nbsp;
			</p>
			<p class="contacts__about">
				 Москва, Киевское шоссе, БП «Румянцево», корпус Г, 3 этаж, WORK SPACE
			</p>
		</div>
		<div class="contacts__el">
			<p class="contacts__title">
				 Окский
			</p>
			<p class="contacts__about">
				 Москва, улица Окская, дом 3, корпус 2, офис 11
			</p>
			<p class="contacts__about">
				 Румянцево&nbsp;
			</p>
		</div>
	</div>
</div>
<div class="contacts__map-grid">
	<div class="contacts__map-el">
		<div class="contacts__el">
			<p class="contacts__about">
				 Москва, поселение " Московский ", Киевское шоссе, 22-й км., метро " Румянцево"&nbsp;
			</p>
		</div>
		<div class="contacts__map">
			<div class="contacts__map-container">
				<div class="map" id="mapRumyantsevo">
				</div>
			</div>
		</div>
	</div>
	<div class="contacts__map-el">
		<div class="contacts__el">
			<p class="contacts__title">
				 Окский
			</p>
			<p class="contacts__about">
				 Москва, улица Окская, дом 3, корпус 2, офис 11
			</p>
		</div>
		<div class="contacts__map">
			<div class="contacts__map-container">
				<div class="map" id="mapOkskiy">
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
<!-- END SECTION :: CONTACTS--> <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<div id="myModal" class="modal">
	<div class="modal-content">
 <span class="close"><img src="/local/assets/dist/img/clouse.png" alt=""></span>
		<div class="form__container">
			<form action="">
				<div class="input-container">
 <input type="text" name="" placeholder="название компании*">
					<div class="label">
						 название компании*
					</div>
				</div>
				<div class="input-container">
 <input type="text" name="" placeholder="категория*">
					<div class="label">
						 категория*
					</div>
				</div>
				<div class="input-container">
 <input type="text" name="" placeholder="телефон*">
					<div class="label">
						 телефон*
					</div>
				</div>
				<div class="input-container">
 <input type="text" name="" placeholder="электронная почта*">
					<div class="label">
						 электронная почта*
					</div>
				</div>
				<div class="input-container">
 <input type="text" name="" placeholder="контактное лицо*">
					<div class="label">
						 контактное лицо*
					</div>
				</div>
				<div class="input-container">
 <input type="text" name="" placeholder="описание компании*">
					<div class="label">
						 описание компании*
					</div>
				</div>
				<p>
					 максимальный размер описания — 1500 символов
				</p>
				<div class="input__wrapper">
 <input name="file" type="file" id="input__file" class="input input__file" multiple=""> <label for="input__file" class="input__file-button"> <span class="left"> <span class="input__file-button-text">прикрепить файл</span>
					<p>
						 максимальный размер файла — 5 мегабайт
					</p>
 </span> <span class="input__file-icon-wrapper"><img src="/local/assets/dist/img/add.png" class="input__file-icon"></span> </label>
				</div>
 <button class="btn btn--border">жду звонка</button>
				<p>
					 Нажимая кнопку «жду звонка», я даю согласие на Обработку персональных данных
				</p>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="/local/assets/dist/js/pop.js"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>