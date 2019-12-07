<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="list-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<?if($arItem["SELECTED"]):?>
	<li><a href="<?=$arItem["LINK"]?>" class="selected" rel="nofollow"><?=$arItem["TEXT"]?></a></li>
<?else:?>
	<li><a href="<?=$arItem["LINK"]?>" rel="nofollow"><?=$arItem["TEXT"]?></a></li>
<?endif?>
	
<?endforeach?>

	<li><a href="tel:+78462772157" rel="nofollow"><i class="fa fa-phone"></i>+7 (846) 277 - 21 - 57</a></li>

</ul><!--/list-menu-->

<?endif?>