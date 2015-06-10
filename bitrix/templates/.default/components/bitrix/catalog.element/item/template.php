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
<?if(!empty($arResult)){?>
	<?$this->SetViewTarget('top');?>
		<?if($arResult['PROPERTIES']['ATT_TOP']['VALUE'] == 1){?>
			<span class="top"></span>
		<?}?>
	<?$this->EndViewTarget();?>
	<?$photo = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>580, 'height'=>288), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
	<section class="catalog-item color" data-color="<?=$arResult['COLOR'];?>">
		<section id="main-title" class="cell">
			<h1>Кирпич <?=$arResult['PROPERTIES']['PROP_MARK']['VALUE'];?></h1>
			<?if($arResult['PROPERTIES']['ATT_TOP']['VALUE'] == 1){?>
				<span class="top"></span>
			<?}?>
			<ul>
				<?foreach($arResult['PROPERTIES']['ATT_PROPERTY']['VALUE'] as $prop){?>
					<li style="color:<?=$arResult['COLOR'];?>"><?=$prop;?></li>
				<?}?>
			</ul>
		</section>
		<img class="cell" src="<?=$photo['src'];?>">
		<section id="price" class="cell">
				<div class="white-circle">
					<div class="inside">от <span><?=$arResult['PROPERTIES']['ATT_PRICE']['VALUE']?></span> <b>руб.</b>/шт.</div>
				</div>
				<div class="blue-circle">
					<div class="inside"><span><?=$arResult['PROPERTIES']['ATT_COUNT']['VALUE']?></span> шт. на поддоне</div>
				</div>
		</section>
		<section class="cell" id="charset-block">
				<ul class="charset">
					<li><?=$arResult['PROPERTIES']['PROP_MARK']['NAME']?> - <?=$arResult['PROPERTIES']['PROP_MARK']['VALUE']?></li>
					<li><?=$arResult['PROPERTIES']['PROP_GOST']['NAME']?> - <?=$arResult['PROPERTIES']['PROP_GOST']['VALUE']?></li>
					<li><?=$arResult['PROPERTIES']['PRO_SIZE']['NAME']?> - <?=$arResult['PROPERTIES']['PRO_SIZE']['VALUE']?> мм</li>
					<li><?=$arResult['PROPERTIES']['PROP_MASS']['NAME']?> - <?=$arResult['PROPERTIES']['PROP_MASS']['VALUE']?> кг</li>
				</ul>
				<ul class="other-charset">
					<li><?=$arResult['PROPERTIES']['OTHER_COLD']['NAME']?> - <?=$arResult['PROPERTIES']['OTHER_COLD']['VALUE']?> циклов</li>
					<li><?=$arResult['PROPERTIES']['OTHER_TEPLO']['NAME']?> - <?=$arResult['PROPERTIES']['OTHER_TEPLO']['VALUE']?> Вт/мС</li>
					<li><?=$arResult['PROPERTIES']['OTHER_RADIONUK']['NAME']?> - <?=$arResult['PROPERTIES']['OTHER_RADIONUK']['VALUE']?> Бк/кг</li>
				</ul>
		</section>
		<section class="cell">
			<div class="text">
				<h2>о кирпиче марки <?=$arResult['PROPERTIES']['PROP_MARK']['VALUE'];?></h2>
				<span><?=$arResult['DETAIL_TEXT'];?>
					<div class="fadeout"></div>
				</span>
				<a href="#add">Читать еще</a>
			</div>
				<ul class="adventure">
					<li style="fill:<?=$arResult['COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/gost.svg"><span>Производство соответствует ГОСТу 530-2012;</span></li>
					<li style="fill:<?=$arResult['COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/picture58.svg"><span>Уникальный цвет;</span></li>
					<li style="fill:<?=$arResult['COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/science44.svg"><span>Идеальные пропорция компонентов и калибровка;</span></li>
					<li style="fill:<?=$arResult['COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/hand260.svg"><span>100% ручная сортировка;</span></li>
					<li style="fill:<?=$arResult['COLOR'];?>"><img class="svg" src="/bitrix/templates/main/images/dumbbell13.svg"><span>Прочность, проверенная временем.</span></li>
				</ul>
		</section>
			<section class="cell" id="portfolio">
			<div class="portfolio">
				<h2>Примеры работ</h2>
				<ul>
					<?foreach($arResult['PORTFOLIO'] as $portfolio){?>
						<?$rPhoto = CFile::ResizeImageGet($portfolio, array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
						<li><a class="module" rel="gallery" href="<?=$rPhoto['src'];?>"><img src="<?=$rPhoto['src'];?>"></a></li>
					<?}?>
				</ul>
			</div>
			<div class="where-sale">
				<h2>Где купить</h2>
				Аксайский кирпичный завод.
	346710, Россия, Ростовская область, Аксайский район,
	хутор Большой Лог, ул. Калинина, 68
				<a href="/kontakty/">Наши представительства</a>
			</div>
		</section>
	</section>
<?}?>