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

		<meta http-equiv="expires"			content="Thu, 10 september 2020 23:58:00 GMT"/>
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
			display			:block;
			overflow		:hidden;
			top			:0;
			left			:-0px;
			width			:100vw;
			height			:89.8vh;
			margin			:0;
			padding			:0;
			/* background-repeat	:no-repeat;
			background-size		:99vw;
			background-position	:0vw 14vh;
			background-color	:#FFF; */
			overflow		:hidden;
			"
		>


		<!--debugWindow
			class="V2 fixed block layer_4_1 scrollerY no-select"
			style="
				font-size		:xx-small;
				width			:100%;
				height			:20px;
				background-color	:white;
				"
			>
			<heading 
				class="block left no-select" 
				style="
					color:#fff;
					margin-right:2px;
					background-color:red;
					"
				>
				vKIIM: 
			</heading>
			<strdata 
				id="strPlayerPlayEventsDebugString"
				class="block  left  no-select"
				>
			</strdata>

		</debugWindow-->
		<copyright
			id="PageCopyrightTag"
			class="BC3 TC3 layer_5_Nav"
			style="
				position	:fixed;
				bottom		:0vh;
				left		:0;
				width		:100%;
				height		:20px;
				text-align	:center;
				font-size	:small;
				"
			>
			HiFiIntelligentClub.<?=strGetDomainName()?> © tubmulur@yandex.ru 2020
		</copyright>
		<script>
			var oEl=document.getElementById("PageCopyrightTag");
		</script>
		<?=SystemEventIndicatorStream::strHTML();?>
		<?=Event::strObjectInit();?> 
		<?=Reality::strObjectInit()?>
		<?=VectorKIIM_elementWaiting4Event_statisticalMembrane::strObjectInit();?>
		<?=$strKIIMWindowHTML?>