<?php
/*
<!--/\ © A.A.CheckMaRev tubmulur@yandex.ru
  <  **>
    Jl-->
*/
//........
//$_strAction=obj/arr/JSON/HTML
//....
//.....
//
//........
function EDRO($_strEvent, $_strAction='default', $_arrData=array('_strCond'=>'No data'))
	{
	global $objKIIM;
	$return='';
	$objKIIM=KIIM::objStart($objKIIM, array(
			 '_strClass'		=> 'EDRO.'.$_strAction, 
			// '_strClass'		=> 'EDRO', 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> '',
			'_strVectorPoint'	=> 'Start',
			));

	$objEDRO=new $_strEvent($objKIIM, $_strAction, $_arrData);


	KIIM::objFinish($objKIIM, array(
			 '_strClass'		=> 'EDRO.'.$_strAction, 
			// '_strClass'		=> 'EDRO', 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> 'Complete',
			'_strVectorPoint'	=> 'Finish',
			));
	return $return;
	}

function arrEDRO($_strEvent, $_strAction='default', $_arrData=array('_strCond'=>'No data'))
	{
	global $objKIIM;
	$return='';
	$objKIIM=KIIM::objStart($objKIIM, array(
			'_strClass'		=> 'EDRO' , 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> 'Before construct',
			'_strVectorPoint'	=> 'Start',
			));

	$objEDRO=new $_strEvent($objKIIM, $_strAction, $_arrData);


	KIIM::objFinish($objKIIM, array(
			'_strClass'		=> 'EDRO' , 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> 'After construct',
			'_strVectorPoint'	=> 'Finish',
			));
	return $objEDRO->arr;
	}

function objEDRO($_strEvent, $_strAction='default', $_arrData=array('_strCond'=>'No data'))
	{
	global $objKIIM;
	$return='';
	$objKIIM=KIIM::objStart($objKIIM, array(
			'_strClass'		=> 'EDRO' , 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> 'Before construct',
			'_strVectorPoint'	=> 'Start',
			));

	$objEDRO=new $_strEvent($objKIIM, $_strAction, $_arrData);


	KIIM::objFinish($objKIIM, array(
			'_strClass'		=> 'EDRO' , 
			'_strMethod'		=> 'Load:'.$_strEvent, 
			'_strMessage'		=> 'After construct',
			'_strVectorPoint'	=> 'Finish',
			));
	return $objEDRO;
	}

function LOADER($_strEvent, $_strAction='default', $_arrData=array('_strCond'=>'No data'))
	{
	global $objKIIM;
	$return='';
	$objKIIM=KIIM::objStart($objKIIM, array(
			'_strClass'		=> $_strEvent , 
//			'_strMethod'		=> $_strEvent, 
			'_strMessage'		=> '',
			'_strVectorPoint'	=> 'Start',
			));

	$objEDRO=new $_strEvent($objKIIM, $_strAction, $_arrData);


	KIIM::objFinish($objKIIM, array(
			'_strClass'		=>  $_strEvent, 
///			'_strMethod'		=>  $_strEvent, 
			'_strMessage'		=> 'Complete',
			'_strVectorPoint'	=> 'Finish',
			));
	return $return;
	}

?>
