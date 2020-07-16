<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Design/Destination/Doing
 //      Jl   	[R] Reality/Role
////// 2020	[O] Objects
/*array(
	CopyrightSign'=>array(
		'strType'=>'dir/',
	);
);*/
class StationList
	{
	public $strName;
	public $strDir;
	public $strFullPath;
	public $strSort;
	public $strSetupFile;
	public $strHTML;
	public function __construct($_objKIIM, $_arr, $arrSearch=array())
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>$this, '_intShowTempo'=>'1000' ));
		
		$strSearchName		=mb_strtolower($arrSearch['name']);
		$strSearchStyle		=mb_strtolower($arrSearch['style']);
		if(empty($strSearchStyle))
			{
			$strSearchStylePath='Stations/unordered';
			}
		else
			{
			$strSearchStylePath='Styles/unordered/'.$strSearchStyle.'/unordered';
			}
		$strSearchBitrate	=$arrSearch['bitrate'];
		$strSearchCodec		=$arrSearch['codec'];
		$intPage		=$arrSearch['page'];
		$intOnPage		=$arrSearch['onPage'];
		$intLastPageEl		=$arrSearch['lastPageEl'];
		$intMaxElements		=$intOnPage;
		$intStart		=$intPage*($intMaxElements+1);
		$intEnd			=$intStart+$intOnPage+1;
		$intUntill		=$intStart+$intMaxElements;
		//$arrSearch		=$_arrSearch;
		
		$intI		=$intLastPageEl;
		$intShowedEls	=0;
		//echo '/home/EDRO.Полимер/БазаДанных/HiFiIntelligentClub/'.$strSearchStylePath.'/total.plmr';
		$objTotal	=FileRead::objJSON($objKIIM, '/home/ЕДРО:ПОЛИМЕР/020.Синтез.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект/БазаДанных/HiFiIntelligentClub/'.$strSearchStylePath.'/total.plmr');
		$intTotal	=$objTotal->total;
		for($intI=$intStart;$intI<=$intUntill;$intI++)
			{
			$objStation=FileRead::objJSON($objKIIM, '/home/ЕДРО:ПОЛИМЕР/020.Синтез.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект/БазаДанных/HiFiIntelligentClub/'.$strSearchStylePath.'/'.$intI.'.plmr');
			//$objStation=$objStation[0];
			//echo substr($objStation->listen_url,0,5);
			//(strpos($objStation->genre,'trance')===FALSE)
			//substr($objStation->listen_url,0,5)=='https'
			/*if( (preg_match('/'.$strSearchName.'/', strtolower($objStation->server_name), $arrNameMatches)==1)&&
			    (preg_match('/'.$strSearchStyle.'/', strtolower($objStation->genre), $arrGenreMatches)==1)&&
			    (preg_match('/'.$strSearchBitrate.'/',strtolower($objStation->bitrate), $arrBitrateMatches)==1)&&
			    (preg_match('/'.$strSearchCodec.'/',strtolower($objStation->server_type), $arrCodecMatches)==1)
					)
			*/
			$arrElement[$intPage]=$intI;
			$arrData=array(
					'strName'		=>$objStation->server_name,
					'strSearchName'		=>$strSearchName,
					'strAudio'		=>$objStation->listen_url,
					'strAudioType'		=>$objStation->server_type,
					'strSearchCodec'	=>$strSearchCodec,
					'strAudioBitrate'	=>$objStation->bitrate,
					'strSearchBitrate'	=>$strSearchBitrate,
					'strGenre'		=>$objStation->genre,
					'strSearchGenre'	=>$strSearchStyle,
					'intPage'		=>$intPage,
					'intOnPage'		=>$intOnPage,
					'intTotal'		=>$intTotal,
					'intMaxElements'	=>$intOnPage
				);
			$this->$strHTML.= StationBlock::strHTML($objKIIM, $arrData, $arrSearch);
			
			}
		echo $this->$strHTML;
		echo HiFiNavigation::strHTML($objKIIM, $arrData, $arrSearch, $arrElement);
		
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function _HTML($_objKIIM, $_arr, $arrSearch=array())
		{
		$objStationList=new StationList($_objKIIM, $_arr, $arrSearch);
		return $objStationList->strHTML;
		}
	}
?>