<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(CModule::IncludeModule("iblock"))
{
	$arFilter = Array("IBLOCK_ID"=>$arResult['IBLOCK_ID'], "ID"=>$arResult['IBLOCK_SECTION_ID']);
	$rsSections = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, false, $arSelect = array("UF_*"));
	while($arSection = $rsSections->GetNext())
	{
		$arResult['SECTION'] = $arSection;
	}

}

$arResult['COLOR'] = $arResult['SECTION']['UF_COLOR'];


foreach($arResult["PROPERTIES"]["ATT_PORTFOLIO"]["VALUE"] as $portfolio){
	$arResult["PORTFOLIO"][] = CFile::GetFileArray($portfolio);
}

$APPLICATION->AddChainItem($arResult['SECTION']['NAME'], $arResult['SECTION']['SECTION_PAGE_URL']);

$GLOBALS['SECTION'] = $arResult["SECTION"];

$GLOBALS['ITEM_ID'] = $arResult['ID'];

unset($arResult['SECTION']);
