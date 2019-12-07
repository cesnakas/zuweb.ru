<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<style>
.list-menu{display:inherit;}
.top-menu{display:none;}
b{font-weight:normal;}
p{line-height:30px;}
.ymaps-image-with-content{
	width:32px !important;
	height:48px !important;
	left:-18px !important;
	background-image:url('http://icon-park.com/imagefiles/location_map_pin_home_light_blue.png') !important;
	background-repeat:no-repeat;
	background-size:32px !important;
}
</style>

<div style="width:980px;margin:0 auto;padding:70px 10px 0;">

	<h1>Наши контакты:</h1>

	<section>
		
		<div style="margin-bottom:20px;">
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.23399393938568;s:10:\"yandex_lon\";d:50.22099274603298;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:50.220992746033;s:3:\"LAT\";d:53.23399393939;s:4:\"TEXT\";s:34:\"###RN###Студия ZUWEB###RN###\";}}}",
		"MAP_HEIGHT" => "330",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DRAGGING",
		)
	),
	false
);?>
		</div>

		<div>
			<p>г. Самара, ул. Ново-Вокзальная д. 116, офис 413</p>
			<p>Тел.: <a href="tel:+78469907598" rel="nofollow">+7 (846) 990-75-98</a></p>
			<p>Тел.: <a href="tel:+78462772157" rel="nofollow">+7 (846) 277-21-57</a></p>
			<p>Сот.: <a href="tel:+79991709898" rel="nofollow">+7 (999) 170-98-98</a></p>
			<p>Общая <b>информация</b>: <a href="mailto:info@zuweb.ru" rel="nofollow">info@zuweb.ru</a></p>
			<p>По вопросам <b>поддержки</b> сайтов: <a href="mailto:support@zuweb.ru" rel="nofollow">support@zuweb.ru</a></p>
			<p>По вопросам <b>сотрудничиства</b>: <a href="mailto:partner@zuweb.ru" rel="nofollow">partner@zuweb.ru</a></p>
			<p>По вопросам <b>вокансий</b>: <a href="mailto:job@zuweb.ru" rel="nofollow">job@zuweb.ru</a></p>
		</div>

	</section>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>