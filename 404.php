<?define('404', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/header.php"); ?>
<section class="content-block">
	<h1>Такой страницы больше нет</h1>
	<p>Приносим свои извинения</p>
	<ul>
		<li><a href="#back" onclick="history.back();"><div id="back" class="circle"></div>Назад</a></li>
		<li><img src="<?=$tplPath;?>images/404-img.png"></li>
		<li><a href="/"><div id="main-page" class="circle"></div>На главную</a></li>
	</ul>
</section>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/templates/main/footer.php");?>
