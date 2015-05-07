<?define('CATALOG', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/header.php"); ?>
<div class="content-block">
	<section class="pathway">
			<a href="/">Главная</a> <span>/</span> Каталог продукции
	</section>
	<h1>Каталог продукции</h1>
	<section class="main-catalog">
	<p>Выберите интересующий Вас 
цвет кирпича:</p>
	<ul>
		<li style="color:rgb(237, 103, 50); fill:rgb(237, 103, 50);">– <a href="/catalog-view.php">красный <img class="svg" src="<?=$tplPath;?>images/star138.svg"></a></li>
		<li style="color:rgb(211, 135, 77);">– <a href="#" >абрикосовый</a></li>	
		<li style="color:rgb(205, 161, 101);">– <a href="#" >бежевый</a></li>	
		<li style="color:rgb(244, 180, 138);">– <a href="#" >персиковый</a></li>	
		<li style="color:rgb(103, 124, 144);">– <a href="#" >серый</a></li>	
	</ul>
	</section>
</div>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/footer.php"); ?>