<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//Zero load 
//Money saver+;

session_start();
_DropTheSessionDust();


$arrEvent		=arrGetEventSetter();
//print_r($arrEvent);
//echo '123';
//exit;
//echo '123';
//exit;
$strEventSetter		=$arrEvent['strAction'];
$arrParams		=$arrEvent['arrParams'];

//echo $strEventSetter;
//print_r($arrParams);
//exit;
//echo '123';

if(bIzEvent('/robots.txt', $strEventSetter))
	{
	header('Content-Type: text/plain');
	echo readfile('/home/HiFiIntelligentClub.Ru/robots.txt');
	exit(0);
	}
elseif(bIzEvent('/favicon.ico', $strEventSetter))
	{
	header('Content-Type: image/png');
	echo readfile('/home/HiFiIntelligentClub.Ru/favicon.png');
	exit(0);
	}
elseif(bIzEvent('/Hfic_Samin.jpg', $strEventSetter))
	{
	header('Content-Type: image/jpeg');
	echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
elseif(bIzEvent('/getStation', $strEventSetter))
	{
	//print_r($arrParams);
	header('Content-Type: application/json');
	$strEnc			=сКодировать($arrParams['strPlayingStationId'], $_сДействие='д');
	echo json_encode($strEnc);
	exit;
	}
elseif(bIzEvent('/HiFiIntelligentClub.tar.gz', $strEventSetter))
	{
	//echo'123';
	//print_r($arrParams);
	
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="HiFiIntelligentClub.tar.gz"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Content-Length:'. filesize('/home/HiFiIntelligentClub.Ru/HiFiIntelligentClub.tar.gz'));
	//header('');
	readfile('/home/HiFiIntelligentClub.Ru/HiFiIntelligentClub.tar.gz');
	exit(0);
	}
elseif(bIzEvent('/fireUpStation', $strEventSetter))
	{
	//print_r($arrParams);
	$strEnc			=сКодировать($arrParams['strPlayingStationId'], $_сДействие='д');
	echo json_encode($strEnc);
	exit(0);
	}
elseif(bIzEvent('/ServerOnline', $strEventSetter))
	{
	echo json_encode(array('ok'));
	//header('Content-Type: image/jpeg');
	//echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
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