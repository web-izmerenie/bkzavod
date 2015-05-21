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
	<section id="representatives" class="representatives">
		<div class="content-block">
			<h2>Наши представители</h2>
			<ul class="icon">
				<li id="pointing"></li>
				<li id="adres"></li>
				<li id="tel"></li>
			</ul>
			<div class="inside">
				<?foreach($arResult['ITEMS'] as $arItem){?>
					<ul>
						<li><?=$arItem['PROPERTIES']['ATT_CITY']['VALUE'];?></li>
						<li><?=$arItem['NAME'];?></li>
						<li><?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'];?></li>
					</ul>
				<?}?>
			</div>
		</div>
	</section>
<?}?>