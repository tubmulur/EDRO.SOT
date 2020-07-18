<?php
      /*© A.A.CheckMaRev assminog@gmail.com*/
////// 				//
   //   /\ RCe			/////////
  //  <  **> 				//
 //     Jl   				//
//////				/////////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');

class ПрочитатьСлушателей
	{
	public	$м020;
	public function __construct($_objKIIM, $_м020)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$м020		=$_м020;
			   unset($_м020)

		//$this->м020;
		//$м020['сСтиль']	=
		$чНомерокВремя		='';
		$чНомерокНомер		='';

		$чТекущВремяСекунд	=floor(microtime(true));

		$мВсеСлушатели		=scandir($м020['сРасполож']);

		$чДеньСекунд		=(60*60*24);

		$чСлушателейЗаПятьМинут	=0;

		//$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnlineCount']		=0;
		//$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnline24hCount']	=0;
		foreach($мВсеСлушатели as $сСлушательФайл)
			{
			if($сСлушательФайл!='..'&&$сСлушательФайл!='.')
				{
				$чНомерокВремя	=preg_replace('/^([0-9]*)\_([0-9]*)(\.020)$/', '$2', $сСлушательФайл);
				$чНомерокНомер	=preg_replace('/^([0-9]*)\_([0-9]*)(\.020)$/', '$1', $сСлушательФайл);
				/*
				if(($чТекущВремяСекунд-$чДеньСекунд)<$чТекущВремяСекунд)
					{
					//$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnline24hCount']++;
					}
				*/
				if(($чТекущВремяСекунд-300)<$чТекущВремяСекунд)
					{
					$мСлушателиПятьМинут[]	=FileRead::arrJSON($objKIIM, $м020['сРасполож'].'/'.$сСлушательФайл);
					$чСлушателиЗаПятьМинут	=++;
					
					}
				}
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function м($_objKIIM, $_strSetupFile)
		{
		//$this->arrEDRO['arrReality']['arrCurrentListeners'][$intSessionId]=$arrListener;
		//$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnlineCount']++;
		$оПрочитатьСлушателей	=new ПрочитатьСлушателей($_objKIIM, $_strSetupFile);
		}
	}
?>