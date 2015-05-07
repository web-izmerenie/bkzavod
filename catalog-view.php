<?define('CATALOG', 'Y');
define('bottom-module', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/header.php"); ?>
<div class="content-block">
	<section class="pathway">
			<a href="/">Главная</a> <span>/</span> <a href="/catalog.php">Каталог продукции</a> <span>/</span> Красный цвет
	</section>
	<section class="catalog-view">
	<h1>Кирпич цвет «красный»<span class="top"></span></h1>
		<ul>
			<li>
				<a href="#">
					<img src="/upload/catalog-view_02.png">
					Одинарный 
					М125 
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/upload/catalog-view_04.png">
					Одинарный
					рельефный
					М125
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/upload/catalog-view_06.png">
					Утолщенный
					рельефный 
					М125
				</a>
			</li>
		</ul>
	</section>
</div>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/footer.php"); ?>