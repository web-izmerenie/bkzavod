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
<?if(!empty($arResult['ITEMS'])){?>
	<?foreach($arResult['ITEMS'] as $arItem){?>
		<div class="contact-block content-block">
			<div class="main-adress">
				<h2><?=$arItem['NAME'];?></h2>
				<?=$arItem['PREVIEW_TEXT'];?>
			</div>
			<div class="main-telephone">
				<ul>
					<li>Телефон: <?=$arItem['PROPERTIES']['ATT_TEL']['~VALUE']['TEXT']?></li>
					<li>Факс: <?=$arItem['PROPERTIES']['ATT_FAX']['VALUE']?></li>
					<li>E-mail: <a href="mailto:<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?>"><?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?></a></li>
				</ul>
			</div>
			<div class="main-representatives">
				<a href="#representatives">Наши представители</a>
			</div>
		</div>
		<section id="map" class="map"><?=$arItem['PROPERTIES']['ATT_MAP']['VALUE']?></section>
	<?}?>
<?}?>