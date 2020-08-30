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
	private $strHTML;
	public function __construct(	$_objKIIM, 
					$_arrData=array(
						'_strTitle'		=>'Test',
						'_strDescription'	=>'Test description', 
						'_strCopyrightInfo'	=>'....Comming soon',
						'_strLogo'		=>'/image.png'
						)
					)
		{

		}
/*-[E]*/private function strEvent()
		{
		$strE='
			onStartLoading		=""
			onFinishLoading		=""
			onclick="
				//objSearch.objValueInputStyle.value=\'\';
				objEvent.arrParams.strStyle=\'\';
				objEvent._UpdateURLDyn();
				return false;
				"
			';
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		$strD='
		class="block abs layer_5_1_Overlay"
		style="
			top		: 0;
			left		: 0;
			width		: 100%;
			height		: 100%;
			text-align	: center;
			color		: #fff;
			background-color: rgba(240, 240, 240, 0.6);
			"
			';
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		$strR='';
		}
/*-[O]*/private function strObject()
		{
		$strO.=
		'<'.strtolower(__CLASS__).
			$this->strEvent().
			$this->strDesign().
			'>';
			$strO.=
			$this->strReality();
		$strO.=
		'</'.strtolower(__CLASS__).'>';
/*-[.]*/	}
	public static function strHTML($_objKIIM, $_strData)
		{
		$objOverlay=new Overlay($_objKIIM, $_strData);
		return $objOverlay->strHTML;
		}
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
		//    /\                  // /   
		//  <  **>                  /// /  
	     //////   jl                    ///// /    
	    ./././././././*/
	}
?>