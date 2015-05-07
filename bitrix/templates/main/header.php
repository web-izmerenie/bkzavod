<?php
$html_classes = array();
$main_classes = array();
// <html> classes
if(defined('404'))
	$html_classes = array('page404');
if(defined('CATALOG'))
	$html_classes = array('catalog');

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);
$tplPath = "/bitrix/templates/main/";?>
<!DOCTYPE html>
<html class="<?=$html_classes?>">
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>АКЗ</title>
	<link rel="shortcut icon" href="<?=$tplPath;?>/images/favicon.ico" type="image/x-icon" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="/bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<link href="/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="<?=$tplPath;?>styles/build/build.css" rel="stylesheet">
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/slick-carousel/slick/slick.min.js"></script>
	<script src="/bower_components/InlineSVG/jquery.inlinesvg.js"></script>
	<script src="<?=$tplPath;?>scripts/main.js"></script>
</head>

<body>

<div class="wrapper">

	<header class="header">
		<section class="mainmenu">
			<div class="content-block">
				<nav>
					<ul>
						<li><a href="#">О заводе</a></li>
						<li><a href="/catalog.php">Продукция</a></li>
						<li><a href="#">Для строителей</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<section class="main">
			<div class="content-block">
				<?if($_SERVER['REQUEST_URI'] == '/'){?>
					<div id="logo"></div>
				<?}else{?>
					<a href="/" id="logo"></a>
				<?}?>
				<div id="right">
					<h1><a href="tel:+7 (86350) 48-8-48">+7 (86350) 48-8-48</a></h1>
					<p><a href="tel:(863) 256-91-01">(863) 256-91-01</a></p>
				</div>
			</div>
		</section>
	</header><!-- .header-->

	<main class="content">
