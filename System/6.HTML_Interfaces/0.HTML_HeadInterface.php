<!doctype html>
<?php
$strLangSignal=strGetDomainName();
if(strtoupper($strLangSignal)=="COM")
	{
	$strLangSignal	='en';
	}
if(strtoupper($strLangSignal)=="RU")
	{
	$strLangSignal	='ru';
	}
else
	{
	$strLangSignal	='en';
	}
?>
<html
	lang="<?=$strLangSignal?>"
	xml:lang="<?=$strLangSignal?>"
	style="
		position:fixed;
		z-index:1;
		"
	>
	<head>
		<title>HiFiIntelligentClub</title>
		<meta charset="utf-8"/>
		<!--link rel="apple-touch-startup-image" href=""-->
		<!--link rel="manifest" href="/manifest.json"/-->

		<meta name="apple-mobile-web-app-capable"	content="yes"/>
		<meta name="apple-mobile-web-app-title"		content="HiFiIntelligentClub">

		<meta http-equiv="expires"			content="Fri, 11 september 2020 23:08:00 GMT"/>
		<meta http-equiv="Content-type"			content="text/html; charset=utf-8"/>

		<meta name="milliseconds"			content=".1282">
		<meta name="viewport"				content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="contact-webmaster-international"	content="assminog@gmail.com">
		<meta name="contact-webmaster-international"	content="tubmulur@yandex.ru">
		<meta name="contact-blog-vk"			content="https://vk.com/HiFiIntelligentClub">
		<meta name="contact-blog-facebook"		content="https://facebook.com/HiFiIntelligentClub">
		<meta name="contact-webmaster-vk"		content="https://vk.com/Hfic.Samin">
		<meta name="contact-webmaster-facebook"		content="https://facebook.com/Hfic.Samin">
		<meta name="project-sources"			content="https://github.com/tubmulur">

		<?=$strDynascreenStyle?>

		<?php 
			echo						    EDRO::strObjectDeclare();
			echo						    EDRO::strObjectInit();
			echo						   Event::strObjectDeclare();
			echo 						 Objects::strAudioDeclare();
			echo 						 Objects::strCopyrightDeclare();
			echo					          Design::strObjectDeclare();
			echo						 Reality::strObjectDeclare();
			echo						 Objects::strObjectDeclare();
			//echo			      SystemEventIndicatorStream::strObjectDeclare();
			echo						  Player::strObjectDeclare();
			echo					      DynaScreen::strObjectDeclare();
			echo				DynaScreenEventIndicator::strObjectDeclare();
			echo				      StationSearchBlock::strObjectDeclare();
			echo VectorKIIM_elementWaiting4Event_statisticalMembrane::strObjectDeclare();
		?>
	</head>
	<body
		id="HiFiIntelligentClub"
		style="
			position		:fixed;
			top			:0;
			left			:-0px;
			width			:100vw;
			height			:100vh;
			margin			:0;
			padding			:0;
			"
		>
		<?php
		echo SystemEventIndicatorStream::strHTML();
		echo Event::strObjectInit();
		echo Reality::strObjectInit();
		echo VectorKIIM_elementWaiting4Event_statisticalMembrane::strObjectInit();
		echo $strKIIMWindowHTML;
		?>