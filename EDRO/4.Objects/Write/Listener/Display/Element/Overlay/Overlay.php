<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Overlay
	{
	public 	$strHTML;
	private $arrEvent	=array(
			'strLink'		=>'',
			'strOnClick'		=>'',
		);
	private $arrDesign	=array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>1,
		);
	private $objReality	=array(
			'strRole'		=>'',
			'strLang'		=>'',
			'strText'		=>'',
		);
	private $strObjects	=array(
			'strTag'		=>'a',
			'strOpen'		=>'>',
			'strClose'		=>'<',
		);
	
	public function __construct($_objKIIM, $_strStyle, $arrParams,  $_intLayer)
		{
		$this->strDesignTag	='a';
		$this->arrEvent	=array(
			'strLink'		=>'"/search'.strLinkGroove($this->arrParams, 'strStyle', '').'"',
			'strOnClick'		=>
<<<oo2oo
					//objSearch.objValueInputStyle.value='';
					objEvent.arrParams.strStyle='';
					objEvent._UpdateURLDyn();
					return false;
oo2oo,
			);
		$this->arrDesign	=array(
			'strClass'		=>'block abs layer_'.($_intLayer+1),
			'strStyle'		=>
<<<oo2oo
					top		: 0;
					left		: 0;
					width		: 100%;
					height		: 100%;
					text-align	: center;
					color		: #fff;
					background-color: #000;
oo2oo,
			);
		$this->objReality	=array(
			'arrRole'		=>array(
				'Listener', 'Operator'
				),
			'arrLang'		=>array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
		);

		if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($_strStyle))
			{
			$this->strHTML		=$this->strObject();
			}
		}
/*-[E]*/private function strEvent()
		{
		//$strE	='href="/search'.strLinkGroove($this->arrParams, 'strStyle', '').'"';
		//$strE	.="\n";
		//	onStartLoading		=""
		//	onFinishLoading		=""
		//$strE	.=<<<oo2oo
		//onclick="
		//	//objSearch.objValueInputStyle.value='';
		//	objEvent.arrParams.strStyle='';
		//	objEvent._UpdateURLDyn();
		//	return false;
		//	"
oo2oo;
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		// Updating soon 
		$strD.="\n".$strClose;
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		// Updating soon 
		$strR='';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
//		$strOpen="<";
//		$strClose=">";
		//$strOpen="<br/>";
		//$strClose="<br/>";
//		$strO=$strOpen.$this->strDesignTag."\n".$this->strEvent()."\n"
		$strE=$this->strEvent();
		$strD=$this->strDesign();
		$strR=$this->$this->strReality();
		$strO=$strOpen.$this->strDesignTag."\n".$this->strEvent()."\n".$strClose;
			$strO.=$this->strReality();
			$strO.=$strOpen.'/'.$this->strDesignTag.$strClose;
		return $strO;
/*-[.]*/	}
	public static function strHTML($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$objOverlay=new Overlay($_objKIIM, $_strStyle, $arrParams, $_intLayer);
		return $objOverlay->strHTML;
		}
	}
?>