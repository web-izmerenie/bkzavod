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
<?if(!empty($arResult['SECTIONS']) && !isset($_GET['SECTION_CODE'])){?>
	<section class="main-catalog">
		<p>Выберите интересующий Вас
		цвет кирпича:</p>
		<ul>
			<?foreach($arResult['SECTIONS'] as $arItem){?>
			<li style="color:<?=$arItem['UF_COLOR']?>;">– <a href="<?=$arItem['SECTION_PAGE_URL']?>">
				<?=$arItem['UF_COLOR_NAME']?>
				<?if($arItem['UF_TOP'] == 1){?>
					<img style="fill:<?=$arItem['UF_COLOR']?>;" class="svg" src="/bitrix/templates/main/images/star138.svg">
				<?}?>
				</a>
			</li>
			<?}?>
		</ul>
	</section>
<?}?>
