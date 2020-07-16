<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Design/Destination/Doing
 //     Jl   	[R] Reality/Role
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
	public function __construct($_objKIIM, $_arr, $arrSearch=array())
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>$this, '_intShowTempo'=>'1000' ));

		$strSearchName	=strtolower($arrSearch['name']);
		$strSearchStyle	=strtolower($arrSearch['style']);
		$strSearchBitrate	=$arrSearch['bitrate'];
		$strSearchCodec		=$arrSearch['codec'];
		//echo preg_match('/'.$strSearchName.'/', 'rance house etc', $arrNameMatches);
		//exit(0);
		//parent::__construct($objKIIM);
		$strStationsXML=$_arr['arrList']['strStationsXML'];
		$intMaxElements=$_arr['arrList']['intMaxElements'];

		$objStations=Read::objXML($objKIIM, $strStationsXML);
		$intI=0;
		foreach($objStations as $objStation)
			{
			//echo substr($objStation->listen_url,0,5);
			//(strpos($objStation->genre,'trance')===FALSE)
			//substr($objStation->listen_url,0,5)=='https'
			if( (preg_match('/'.$strSearchName.'/', strtolower($objStation->server_name), $arrNameMatches)==1)&&
			    (preg_match('/'.$strSearchStyle.'/', strtolower($objStation->genre), $arrGenreMatches)==1)&&
			    (preg_match('/'.$strSearchBitrate.'/',strtolower($objStation->bitrate), $arrBitrateMatches)==1)&&
			    (preg_match('/'.$strSearchCodec.'/',strtolower($objStation->server_type), $arrCodecMatches)==1)
				//(
				//strpos($objStation->genre,'trance')!==FALSE || 
				//strpos($objStation->genre,'lounge')!==FALSE 
				//) &&
				//(
				//$objStation->server_name!='Trance Out!'
				//) &&
				//(
				//$objStation->server_name!='Radio Dancefloor - 90\'s'
				//)
					)
				{
				echo StationBlock::HTML($objKIIM,
					array(
						'strName'		=>$objStation->server_name,
						'strSearchName'		=>$strSearchName,
						'strAudio'		=>$objStation->listen_url,
						'strAudioType'		=>$objStation->server_type,
						'strSearchCodec'	=>$strSearchCodec,
						'strAudioBitrate'	=>$objStation->bitrate,
						'strSearchBitrate'	=>$strSearchBitrate,
						'strGenre'		=>$objStation->genre,
						'strSearchGenre'	=>$strSearchStyle
						)
					);
				
				
				if($intI>$intMaxElements)
					{
					break;
					}
				$intI++;
				}
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function _HTML($_objKIIM, $_arr, $arrSearch=array())
		{
		$objStationList=new StationList($_objKIIM, $_arr, $arrSearch);
		}
	}
?>