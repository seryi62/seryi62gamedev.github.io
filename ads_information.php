<?php
//
sleep(0);

/////////////////////////////////////////////////
////////////////////////////
///////////////////
$f = fopen("index_post.txt", "w");
foreach($_POST as $a => $value)
{
	fwrite($f, "[".$a."]=".$value."&");
}

fclose($f);
///////////////////
////////////////////////////////
//////////////////////////////////////////////////




/////////////////////////////////////////////////
////////////////////////////
///////////////////
$f = fopen("index_get.txt", "w");
foreach($_GET as $a => $value)
{
	fwrite($f, "[".$a."]=".$value."&");
}

fclose($f);
?>
{"Items":[
	{
		"BANNER":"TEST_MIN_1",
		"TYPE":"MIN",
		"BANNER_VERSION_ADS":"1.0",
		"TITLE":"HORROR GAMES",
		"URL_REFERRER":"http://prime",
		"URL_ICON_ADS":"http://prime/ads/asd_icon/Png_Textures_1.png",
		"TEXT_ADS":"/ТЕКСМТОВЫЙ БЛОК НОМЕР 1/ ТЕСТИРОВАНИЕ СИСТЕМЫ ЗАГРУЗКИ СОБСТВЕННОЙ РЕКЛАМНОЙ ИНФОРМАЦИИ"
	},
	{
		"BANNER":"TEST_MIN_2",
		"TYPE":"MIN",
		"BANNER_VERSION_ADS":"1.0",
		"TITLE":"DIGITAL GAME",
		"URL_REFERRER":"http://prime",
		"URL_ICON_ADS":"http://prime/ads/asd_icon/Png_Textures_2.png",
		"TEXT_ADS":"/ЦИФРОВАЯ ИГРА.ТЕКСМТОВЫЙ БЛОК НОМЕР 2/ ТЕСТИРОВАНИЕ СИСТЕМЫ ЗАГРУЗКИ СОБСТВЕННОЙ РЕКЛАМНОЙ ИНФОРМАЦИИ"
	},
	{
		"BANNER":"CROCODYLE.PAINT",
		"TYPE":"BIG",
		"BANNER_VERSION_ADS":"1.0",
		"TITLE":"CROCODYLE. PAINT GAMES",
		"URL_REFERRER":"http://prime",
		"URL_ICON_ADS":"http://prime/ads/asd_icon/Png_Textures_1.png",
		"TEXT_ADS":"/ТЕКСМТОВЫЙ БЛОК НОМЕР 1/ ТЕСТИРОВАНИЕ СИСТЕМЫ ЗАГРУЗКИ СОБСТВЕННОЙ РЕКЛАМНОЙ ИНФОРМАЦИИ"
	},
	{
		"BANNER":"DIGITAL EXTENCION",
		"TYPE":"BIG",
		"BANNER_VERSION_ADS":"1.0",
		"TITLE":"DIGITAL EXTENCION.GAME",
		"URL_REFERRER":"http://prime",
		"URL_ICON_ADS":"http://prime/ads/asd_icon/Png_Textures_2.png",
		"TEXT_ADS":"/ЦИФРОВАЯ ИГРА.ТЕКСМТОВЫЙ БЛОК НОМЕР 2/ ТЕСТИРОВАНИЕ СИСТЕМЫ ЗАГРУЗКИ СОБСТВЕННОЙ РЕКЛАМНОЙ ИНФОРМАЦИИ"
	},
	{
		"BANNER":"AYES.HORROR",
		"TYPE":"BIG",
		"BANNER_VERSION_ADS":"1.0",
		"TITLE":"AYES. ONE HORROR",
		"URL_REFERRER":"http://prime",
		"URL_ICON_ADS":"http://prime/ads/asd_icon/Png_Textures_3.png",
		"TEXT_ADS":"/ТЕКСМТОВЫЙ БЛОК НОМЕР 3/ ТЕСТИРОВАНИЕ СИСТЕМЫ ЗАГРУЗКИ СОБСТВЕННОЙ РЕКЛАМНОЙ ИНФОРМАЦИИ"
	}]
}