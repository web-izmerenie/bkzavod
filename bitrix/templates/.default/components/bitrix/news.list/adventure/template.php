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
<section class="adventure">
	<div class="content-block">
		<img src="/bitrix/templates/main/images/adventure.png">
		<h2><?=$arResult['NAME']?>:</h2>
		<p><?=$arResult['DESCRIPTION']?></p>
	</div>

	<div class="adventureitems">
		<div class="content-block">
			<ul>
				<?foreach($arResult['ITEMS'] as $arItem){
				$photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				?>
					<li><a class="module" rel="gallery" href="<?=$photo['src'];?>"><img src="<?=$photo['src'];?>"></a></li>
				<?}?>
			</ul>
		</div>
	</div>
</section>
