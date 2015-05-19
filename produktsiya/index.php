<?define('CATALOG', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог Продукции");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"main_catalog_sections",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"SECTION_ID" => "",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(0=>"",1=>"undefined",2=>"",),
		"SECTION_USER_FIELDS" => array(0=>"UF_COLOR",1=>"UF_TOP",2=>"UF_COLOR_NAME",3=>"undefined",4=>"",),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>