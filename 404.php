<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

define('NO_CONTENT_BLOCK', 'Y');
define('404', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");?>

<section class="content-block">
	<h1>Такой страницы больше нет</h1>
	<p>Приносим свои извинения</p>
	<ul>
		<li><a onclick="history.back();"><div id="back" class="circle"></div>Назад</a></li>
		<li><img src="<?=$tplPath;?>images/404-img.png"></li>
		<li><a href="/"><div id="main-page" class="circle"></div>На главную</a></li>
	</ul>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>