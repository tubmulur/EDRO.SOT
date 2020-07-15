<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//strNDigit
//
//
//
//Level 0

function strNDigit($_intN, $_str, $strPos="fromBegin", $_strNULLSymbol='_') //suffix/prefix
	{
	$intN		=$_intN;
		   unset($_intN);
	$str		=$_str;
		   unset($_str);
	$strNULLSymbol	=$_strNULLSymbol;
		   unset($_strNULLSymbol);
	$strAdd='';
	$strOverflowAlert		='=';
	if(strlen($str)>$intN)
		{
		$strOverflowAlert='*';
		}

	for($intI=0;$intI<$intN;$intI++)
		{
		if(!isset($str[$intI]))
			{
			$strAdd.=$strNULLSymbol;
			}
		}
	switch($strPos)
		{
		case 'fromBegin':
			$str=$strOverflowAlert.$strAdd.$str;
		break;
		case 'fromEnd':
			$str=$strOverflowAlert.$str.$strAdd;
		break;
		}
	return $str;
	}
function strNDigitVisible($_intN, $_str, $_strShowFrom='fromEnd')  //fromEnd/FromBegin
	{
	$intN		=$_intN;
		   unset($_intN);
	$str		=$_str;
		   unset($_str);
	$strShowFrom	=$_strShowFrom;
		   unset($_strShowFrom);
	switch($strShowFrom)
		{
		case 'fromBegin':
			$str=substr($str, 0, $intN);
		break;
		case 'fromEnd':
			$str=substr($str, -$intN);
		break;
		}
	return $str;
	}
function strNDigitMainTrace($_float)
	{
	$float=$_float;
         unset($_float);
	$int=floor($float);
             unset($float);
	$strNDigit=strNDigit(2, $int, 'fromBegin','0');
	if($int>5)
		{
		$strAlertPrefix='??:';
		}
	elseif($int>=1)
		{
		$strAlertPrefix='_?:';
		}
	else
		{
		$strAlertPrefix='__:';
		}
	$str=$strAlertPrefix.$strNDigit;
	return $str;
	}
function strNDigitMicroTrace($_int)
	{
	$int=$_int;
       unset($_int);
	$strNDigit=strNDigit(3, $int, 'fromBegin','0');
	if($int>500)
		{
		$strAlertPrefix='??:';
		}
	elseif($int>100)
		{
		$strAlertPrefix='_?:';
		}
	else
		{
		$strAlertPrefix='__:';
		}
	$str=$strAlertPrefix.$strNDigit;
	return $str;
	}
function сПреобразовать($_сСтрока, $_сНаправление="вСтроку") //:вСтроку/вКоманду
	{
	$сСтрока		=(string)$_сСтрока;
	if($_сНаправление=='вСтроку'||$_сНаправление=='вКоманду')
		{
		$сНаправление	=$_сНаправление;
			   unset($_сНаправление);
		}
	$мПравилаПреобразования	=
			array(
				"о20о"=> "<" ,
				"о21о"=> ">" ,
				"о22о"=> "\"",
				"о23о"=> "'" ,
				"о24о"=> "?" ,
				"о25о"=> "&" ,
				"о26о"=> "=" ,
				"о27о"=> " " ,
				"о28о"=> "/" ,
				"о29о"=> "\\",
			);
	foreach($мПравилаПреобразования as $сПреобразованноВКоманду=>$сПодлежитПреобразованиюВКоманду)
		{
		switch($сНаправление)
			{
			case 'вСтроку':
				$сСтрока	=strstr($сСтрока, $сПреобразованноВКоманду, $сПодлежитПреобразованиюВКоманду);
			break;
			case 'вКоманду':
				$сСтрока	=strstr($сСтрока, $сПодлежитПреобразованиюВКоманду, $сПреобразованноВКоманду);
			break;
			}
		}
	return $сСтрока;
	}
function сКодировать($_сСтрокаДляКодирования, $_сДействие='к', $_сКлючь="HiFiIntelligentClub") //E or  /d
	{

	$сСтрокаДляКодирования	=(string)$_сДляКодирования;
			           unset($_сДляКодирования);
	$сКлючь			=(string)$_сКлючь;
				   unset($_сКлючь);
	$сДействие		=$_сДействие;
			   unset($_сДействие);
	$сПослеКодирования	='';
	switch($сДействие)
		{
		case 'к':
		break;
		case 'д':
			$сДляКодирования=base64_decode(сПреобразовать($сДляКодирования,'вСтроку'));
		break;
		}

	$чДлинаКлюча		=strlen($сКлючь);
	
	$чДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
	$чТекущаяПозицияКлюча		=0;
	for($чШаг=0;$intI<$чДлинаСтрокиДляКодирования;$чШаг++)
		{
		$сПослеКодирования.=$сДляКодирования[$чШаг]^$сКлючь[$чТекущаяПозицияКлюча];
		if($чТекущаяПозицияКлюча==$чДлинаКлюча-1)
			{
			$чТекущаяПозицияКлюча=0;
			}
		else
			{
			$чТекущаяПозицияКлюча++;
			}
		}
	switch($сДействие)
		{
		case 'к':
			$сПослеКодирования=сПреобразовать(base64_encode($сПослеКодирования), 'вКоманду');
		break;
		case 'д':
		break;
		}
	return $сПослеКодирования;
	}
function strEncode2($_str)
	{
	$str=base64_encode($_str);
	$str=str_replace('=','ravno_', $str);
	return $str;
	}
function strEncode($_strString, $_strKey, $_strAct='e') //E or  /d
	{

	$strString	=(string)$_strString;
		           unset($_strString);
	$strKey		=(string)$_strKey;
	                   unset($_strKey);
	$strAct		=$_strAct;
		   unset($_strAct);
	
	switch($strAct)
		{
		case 'e':
		break;
		case 'd':
			$strString=base64_decode(urldecode($strString));
		break;
		}

	$intKeyLength		=strlen($strKey);
	
	$intSourceStringLength	=strlen($strString);
	$strStringEncoded	='';
	$intKeyStep		=0;
	for($intI=0;$intI<$intSourceStringLength;$intI++)
		{
		$strStringEncoded.=$strString[$intI]^$strKey[$intKeyStep];
		if($intKeyStep==$intKeyLength-1)
			{
			$intKeyStep=0;
			}
		else
			{
			$intKeyStep++;
			}
		}
	switch($strAct)
		{
		case 'e':
			$strStringEncoded=urlencode(base64_encode($strStringEncoded));
		break;
		case 'd':
		break;
		}
	return $strStringEncoded;
	}
//
//	Js Formatter
//
function rmLb($_str)
	{
	$str=$_str;
	unset($_str);
	return preg_replace('/[\r\n]/','',$str);
	}
//
//
//
function bIzEvent($_strEvent, $_strRequest)
	{
	$strEvent		=substr($_strEvent,1);
	                          unset($_strEvent);
	$strEventExpression	=str_replace('/','\/', $strEvent);
	$strRequest		=$_strRequest;
	                   unset($_strRequest);
	
	//echo $strEvent; echo'<br/>';
	//echo '/^(\/'.$strEvent.')(\?.*)|$/';
	//echo '<br/>';
	//echo$strEvent=str_replace('/','\/',$strEvent);
        	//   unset($_strEvent);
	$bIzMutch=false;
	$strEventExtracted=preg_replace('/^(\/'.$strEventExpression.')(\?.*)|$/','$1', $strRequest);
	if($strEventExtracted=='/'.$strEvent)
		{
		$bIzMutch=true;
		}
	return $bIzMutch;
	}
function strLinkGroove($_arrLinks, $_strGroove, $_strGrooveData='', $_bIzClearName=false)
	{
	$strGrooveData=urlencode($_strGrooveData);
			   unset($_strGrooveData);
	$strLink='';
	foreach($_arrLinks as $strName=>$strData)
		{
		$strData=urlencode($strData);
		if($strName==$_strGroove)
			{
			$strLink.='&'.$strName.'='.$strGrooveData;
			}
		else
			{
			if($_bIzClearName&&$strName=='name')
				{
				$strData='';
				}
			$strLink.='&'.$strName.'='.$strData;
			}
		}
	return '?'.substr($strLink, 1);
	}
//
//	Управляющий сигнал
//
function strQuery($_strEvent, $_strRequest)
	{
	$strEvent=$_strEvent;
	    unset($_strEvent);
	//$strEvent=substr($_strEvent,1);
	
	$intEventLen=strlen($strEvent);
	$strQurey=substr($_strRequest,$intEventLen);
	return substr($strQurey,1);
	}
function arrPrepare($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery=array();
	$strQuery=$_strQuery;
	    unset($_strQuery);
	
	if(strpos($strQuery, '&'))
		{
		$arrQuery=explode('&', $strQuery);
		}
	elseif(strpos($strQuery, '='))
		{
		$arrQuery[0]=$strQuery;
		//$arrQuery=explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
function arrPrepare2($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery=array();
	$strQuery=$_strQuery;
	    unset($_strQuery);
	if(strpos($strQuery, '='))
		{
		$arrQuery=explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}

function strGetRequest()
	{
	//$strRequest=preg_replace('/[^А-Яа-яa-zA-Z0-9\=\/\?\!\@\&\+\%\.\,\:\-\_\'\[\]\(\)\s]/', '', $_SERVER['REQUEST_URI']);
	$strRequest=$_SERVER['REQUEST_URI'];
	$strRequest=str_replace(array('%3C','%3E',"<",">"), "_", $strRequest);
	//$strRequest=urldecode($strRequest);
	return $strRequest;
	}
function strGetEventSetter()
	{
	$strRequest			=strGetRequest();
	$strEventSetterExtracted	=preg_replace('/^(\/.*)(\?.*)|$/','$1', $strRequest);
	return urldecode($strEventSetterExtracted);
	}
function arrPrepareEventParams($_arrDefault, $_arrChanged, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult	=array();
	if(is_array($_arrDefault))
		{
		$arrDefault		=$_arrDefault;
		}
	else
		{
		$arrDefault		=array();
		}
	if(is_array($_arrChanged))
		{
		$arrChanged		=$_arrChanged;
		}
	else
		{
		$arrChanged		=array();
		}
	$strReplaceName			=$_strReplaceName;
	$strReplaceValue		=$_strReplaceValue;
	foreach($arrDefault as $strDefaultName=>$strDefaultValue)
		{
		$arrResult[$strDefaultName]	=$strDefaultValue;
		foreach($arrChanged as $strChangedName=>$strChangedValue)
			{
			//$strChangedValue=urldecode($strChangedValue);
			if($strDefaultName==$strChangedName)
				{
				$arrResult[$strDefaultName]=$strChangedValue;
				}
			}
		if($strDefaultName==$strReplaceName)
			{
			$arrResult[$strDefaultName]=$strReplaceValue;
			}
		}
	return $arrResult;
	}
function arrGetEventSetterParams($_strEvent)
	{
	$arrResult	=array();
	$strEvent	=$_strEvent;
		   unset($_strEvent);
	$strRequest	=strGetRequest();
		   
	$strQuery=strQuery($strEvent, $strRequest);
	$arrQuery=arrPrepare($strQuery);
	               unset($strQuery);
	
	foreach($arrQuery as $strQuery)
		{
		$arrBeforeValidate		=arrPrepare2($strQuery);
		$strParamName			=$arrBeforeValidate[0];
		$strParamValue			=$arrBeforeValidate[1];
		$arrResult[$strParamName]	=urldecode($strParamValue);
		//$intLength			=$this->arrEvents[$strEvent][$strParamName]['intLength'];
		//$strValidate			=$this->arrEvents[$strEvent][$strParamName]['strValidate'];
		//$strParamValue			=substr($strParamValue,0, $intLength);
		//$strParamValue			=preg_replace($strValidate,'',$strParamValue);
		//$arrResult[$strParamName]	=$strParamValue;
		}
	return $arrResult;
	}
function strGetDomainName()
	{
	$strLang=preg_replace('/(.+)\.([a-zA-Z]{2,3})$/', '$2', $_SERVER['SERVER_NAME']);
	return $strLang;
	}
function strGetServerName()
	{
	$strName=preg_replace('/(http?://)(.+)\.([a-zA-Z]{2,3})$/', '$2', $_SERVER['SERVER_NAME']);
	return $strName;
	}
?>