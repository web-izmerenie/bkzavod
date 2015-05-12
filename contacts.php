<?define('CONTACTS', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/header.php"); ?>
<div class="content-block">
	<section class="pathway">
			<a href="/">Главная</a> <span>/</span> Контакты
	</section>
	<h1>Контакты</h1>
	<div class="contact-block">
		<div class="main-adress">
			<h2>Аксайский кирпичный завод</h2>
			346710, Россия, Ростовская область, Аксайский район, хутор Большой Лог,
	ул. Калинина, 68
		</div>
		<div class="main-telephone">
			<ul>
				<li>Телефон: <b>+7 (86350) 4-88-48</b>, +7 (863) 256-91-01</li>
				<li>Факс: +7 (863) 303-08-48</li>
				<li>E-mail: <a href="mailto:info@akzavod.ru">info@akzavod.ru</a></li>
			</ul>
		</div>
		<div class="main-representatives">
			<a href="#">Наши представители</a>
		</div>
	</div>
</div>
<section class="map"></section>
<section class="representatives">
	<div class="content-block">
		<h2>Наши представители</h2>
		<ul class="icon">
			<li id="pointing"></li>
			<li id="adres"></li>
			<li id="tel"></li>
		</ul>
		<div class="inside">
		<ul>
			<li>Ростов-на-Дону</li>
			<li>Малое зеленое кольцо, д. 12</li>
			<li>(863) 255-46-04</li>
		</ul>
		<ul>
			<li>Ростов-на-Дону</li>
			<li>Малое зеленое кольцо, д. 12</li>
			<li>(863) 255-46-04</li>
		</ul>
		<ul>
			<li>Ростов-на-Дону</li>
			<li>Малое зеленое кольцо, д. 12</li>
			<li>(863) 255-46-04</li>
		</ul>
		</div>
	</div>
</section>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/footer.php");?>
