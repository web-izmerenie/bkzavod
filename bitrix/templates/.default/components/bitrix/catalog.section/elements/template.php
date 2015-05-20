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
<?if(!empty($arResult['ITEMS']) && $arResult['CODE'] == $_GET['SECTION_CODE']){?>
	<?$this->SetViewTarget('top');?>
		<?if($arResult['UF_TOP'] == 1){?>
			<span class="top"></span>
		<?}?>
	<?$this->EndViewTarget();?>
	<ul>
		<?foreach($arResult['ITEMS'] as $arItem){?>
		<?$photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>143, 'height'=>80), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
			<li>
				<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
					<img src="<?=$photo['src'];?>">
					<?=$arItem['NAME'];?>
				</a>
			</li>
		<?}?>
	</ul>
<?}?>
