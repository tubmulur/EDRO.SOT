<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//Zero load 
//Money saver+;
session_start();
_DropTheSessionDust();
$arrEvent		=arrGetEventSetter();
$strEventSetter		=$arrEvent['strAction'];
$arrParams		=$arrEvent['arrParams'];

if(bIzEvent('/robots.txt', $strEventSetter))
	{
	header('Content-Type: text/plain');
	echo file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
	exit(0);
	}
elseif(bIzEvent('/favicon.ico', $strEventSetter))
	{
	header('Content-Type: image/png');
	echo file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
	exit(0);
	}
elseif(bIzEvent('/Mr.Icqr.looking.for.HiFi.jpg', $strEventSetter))
	{
	header('Content-Type: image/jpeg');
	echo file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
elseif(bIzEvent('/getStation', $strEventSetter))
	{
	header('Content-Type: application/json');
	$strEnc			=сКодировать($arrParams['strStationId'], $_сДействие='д', $_сКлючь="HiFiIntelligentClub");
	echo json_encode($strEnc);
	exit(0);
	}
elseif(bIzEvent('/ServerOnline', $strEventSetter))
	{
	echo json_encode(array('ok'));
	//header('Content-Type: image/jpeg');
	//echo file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
elseif(bIzEvent('/listeners', $strEventSetter))
	{
	echo 'Listeners';
	exit(0);
	}
/*
if(bIzEvent('/', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/stationList', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/FileList', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/search', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/station/search', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/BentleyMusic - Квартирный вопрос', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Master', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Follow', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Buy', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/News', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/Podcast', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/favicon.ico', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/robots.txt', $strRequest))
	{
	//Allow
	}
else
	{
	exit(0);//Deny
	}
*/
?>