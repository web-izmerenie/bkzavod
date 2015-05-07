			</main><!-- .content -->
			<?if(defined('bottom-module')){?>
				<section class="bottom-block">
					<?require($_SERVER["DOCUMENT_ROOT"]."/inc/catalog.php")?>
				</section>
			<?}?>
		</div><!-- .wrapper -->
		
		<footer class="footer <?if($_SERVER['REQUEST_URI'] != '/'){?>footer-inside<?}?>">
			<section class="content-block">
				<span>Аксайский кирпичный завод  2015 г.</span>
				<a href="http://web-izmerenie.ru/"><span>Сделано в</span> <img class="svg" src="<?=$tplPath;?>images/wi.svg"></a>
			</section>
		</footer><!-- .footer -->

	</body>
</html>
