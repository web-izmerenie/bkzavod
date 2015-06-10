<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$newRes = array();
$randRes = array();

foreach($arResult['ITEMS'] as $arItem){
	if($GLOBALS['ITEM_ID'] == $arItem['ID'])continue;
	
	$newRes[] = $arItem;
}

$count = count($newRes) - 1;

$rand1 = rand(0, $count);
$rand2 = rand(0, $count);

if($rand1 == $rand2){
	$rand2 = rand(0, $count);
}

$randRes[0] = $newRes[$rand1];
if($count == 2){
	$randRes[1] = $newRes[$rand2];
}

unset($arResult['ITEMS']);

$arResult['ITEMS'] = $randRes;
