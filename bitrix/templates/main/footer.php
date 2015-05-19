				<?if(!defined('NO_CONTENT_BLOCK')){?></section><?}?>
			</main><!-- .content -->
			<section class="bottom-block">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</section>
		</div><!-- .wrapper -->
		
		<footer class="footer <?if($_SERVER['REQUEST_URI'] != '/'){?>footer-inside<?}?>">
			<section class="content-block">
				<span>Аксайский кирпичный завод  2015 г.</span>
				<a href="http://web-izmerenie.ru/"><span>Сделано в</span> <img class="svg" src="<?=$tplPath;?>images/wi.svg"></a>
			</section>
		</footer><!-- .footer -->

	</body>
</html>
