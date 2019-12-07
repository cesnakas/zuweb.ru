<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
?>

<!DOCTYPE html>

<html>
	<head>

		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.png" />

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="/bitrix/templates/zuweb/css/styles.css" />
		<link rel="stylesheet" type="text/css" href="/bitrix/css/main/font-awesome.min.css" />

	</head>
	<body>

		<div id="panel"><?$APPLICATION->ShowPanel();?></div>

		<nav class="navigation" role="navigation">

			<div class="navigation-container">

				<div class="logo">
					<a href="/" rel="nofollow"><span>ZUWEB</span></a>
				</div><!--/logo-->

				<?$APPLICATION->IncludeComponent("bitrix:menu", "list-menu", Array(
					"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "top",
						"COMPONENT_TEMPLATE" => ".default",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => "",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N",
					),
					false
				);?>

				<ul class="top-menu">
					<li><a href="#home" rel="nofollow">Главная</a></li>
					<li><a href="#services" rel="nofollow">Услуги</a></li>
					<li><a href="#bx-services" rel="nofollow">Битрикс</a></li>
					<li><a href="#contacts" rel="nofollow">Контакты</a></li>
					<li><a href="tel:+78462772157" rel="nofollow"><i class="fa fa-phone"></i>+7 (846) 277 - 21 - 57</a></li>
				</ul>

			</div><!--/navigation-container-->

		</nav><!--/navigation-->

		<div class="main" role="main">