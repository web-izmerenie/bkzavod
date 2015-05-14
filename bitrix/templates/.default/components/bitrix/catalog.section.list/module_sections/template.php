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

<?if(!empty($arResult['SECTIONS'])){?>
	<section class="catalog-module">
		<ul>
			<?foreach($arResult['SECTIONS'] as $arItem){?>
				<li>
					<a href="<?=$arItem['SECTION_PAGE_URL'];?>" style="color:<?=$arItem['UF_COLOR'];?>">
						<div class="hover-block">
							<div class="color-block" style="background:<?=$arItem['UF_COLOR'];?>;"></div>
						</div>
						<p><?=$arItem['UF_COLOR_NAME'];?></p>
						<span>Кирпич</span>
						<?if($arItem['UF_TOP'] == 1){?>
							<div class="top" style="fill:<?=$arItem['UF_COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/star138.svg"></div>
						<?}?>
					</a>
				</li>
			<?}?>
		</ul>
	</section>
<?}?>
