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
$this->setFrameMode(true);
?>
<?if(!empty($arResult['ITEMS'])){?>
	<section class="wrapper-main-slider">
		<div class="main-slider">
			<?foreach($arResult['ITEMS'] as $arItem){
			$slider = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>1256, 'height'=>470), BX_RESIZE_IMAGE_EXACT, true);
			$icon = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);    
			?>
				<div class="slide-item">
					<img src="<?=$slider['src'];?>">
					<div class="circle-white">
						<div class="inside">
							<img src="<?=$icon['src'];?>">
							<span><?=$arItem['PREVIEW_TEXT'];?></span>
						</div>
					</div>
					<div class="circcle-blue">
						<div class="inside"><?=$arItem['DETAIL_TEXT'];?></div>
					</div>
				</div>
			<?}?>
		</div>
		<div class="white-block"></div>
	</section>
<?}?>