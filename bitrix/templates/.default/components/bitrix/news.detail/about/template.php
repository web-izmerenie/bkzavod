<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="preview"><?=$arResult['PREVIEW_TEXT'];?></div>
<img id="video" src="/upload/video.jpg">
<?=$arResult['DETAIL_TEXT'];?>
<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>">
