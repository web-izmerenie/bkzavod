<?define('CATALOG', 'Y');
define('bottom-module', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/header.php"); ?>
<div class="content-block">
	<section class="pathway">
		<a href="/">Главная</a> <span>/</span> 
		<a href="/catalog.php">Каталог продукции</a> <span>/</span> 
		<a href="/catalog-view.php">Красный цвет</a> <span>/</span>
		Одинарный гладкий М125
	</section>
	<section class="catalog-item" data-color="#C9673D">
		<section id="main-title" class="cell">
			<h1>Кирпич М125</h1><span class="top"></span>
			<ul>
				<li style="color:#C9673D;">красный</li>
				<li style="color:#C9673D;">одинарный</li>
				<li style="color:#C9673D;">гладкий</li>
			</ul>
		</section>
		<img class="cell" src="/upload/item.png"> 
		<section id="price" class="cell">
				<div class="white-circle">
					<div class="inside">от <span>12,00</span> <b>руб.</b>/шт.</div>
				</div>
				<div class="blue-circle">
					<div class="inside"><span>480</span> шт. на поддоне</div>
				</div>
		</section>
		<section class="cell" id="charset-block">
				<ul class="charset">
					<li>Марка - 125</li>
					<li>ГОСТ 530-2012</li>
					<li>Размер – 250х120х65 мм</li>
					<li>Масса – 2,3 кг</li>
				</ul>
				<ul class="other-charset">
					<li>Морозостойкость – 50 циклов</li>
					<li>Теплопроводность λo=0,312 Вт/мºС</li>
					<li>Удельная эффективность естественных радионуклидов – 145 Бк/кг</li>
				</ul>
		</section>
		<section class="cell">
			<div class="text">
				<h2>о кирпиче марки М125</h2>
				<span>Кирпич должен отвечать следующим 
				требованиям Ростовской области и других
					<div class="fadeout"></div>
				</span>
				<a href="#">Читать еще</a>
			</div>
				<ul class="adventure">
					<li style="fill:#c9673d;"><img class="svg" src="/bitrix/templates/main/images/gost.svg"><span>Производство соответствует ГОСТу 530-2012;</span></li>
					<li style="fill:#c9673d;"><img class="svg" src="/bitrix/templates/main/images/picture58.svg"><span>Уникальный цвет;</span></li>
					<li style="fill:#c9673d;"><img class="svg" src="/bitrix/templates/main/images/science44.svg"><span>Идеальные пропорция компонентов и калибровка;</span></li>
					<li style="fill:#c9673d;"><img class="svg" src="/bitrix/templates/main/images/hand260.svg"><span>100% ручная сортировка;</span></li>
					<li style="fill:#c9673d;"><img class="svg" src="/bitrix/templates/main/images/dumbbell13.svg"><span>Прочность, проверенная временем.</span></li>
				</ul>
		</section>
			<section class="cell" id="portfolio">
			<div class="portfolio">
				<h2>Примеры работ</h2>
				<ul>
					<li><a href="#"><img src="/upload/port1.jpg"></a></li>
					<li><a href="#"><img src="/upload/port2.jpg"></a></li>
					<li><a href="#"><img src="/upload/port.jpg"></a></li>
				</ul>
			</div>
			<div class="where-sale">
				<h2>Где купить</h2>
				Аксайский кирпичный завод.   
	346710, Россия, Ростовская область, Аксайский район, 
	хутор Большой Лог, ул. Калинина, 68
				<a href="#">Наши представительства</a>
			</div>
		</section>
	</section>
</div>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/footer.php"); ?>