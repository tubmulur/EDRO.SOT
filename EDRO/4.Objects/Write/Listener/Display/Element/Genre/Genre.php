<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Genre
	{
	
	public 		$strHTML;
	private 	$strReality;
	public function __construct($_objKIIM, $_strStyle, $arrParams)
		{
		$мФразы	=мСобратьФразы($_strStyle);
		foreach($мФразы as $сФраза)
			{
			$this->strReality	=$сФраза;
			$this->$strHTML		=$this->strObject();
			}
		}
/*-[E]*/private function strEvent()
		{
		//onStartLoading		=""
		//onFinishLoading		=""
		$strE	='

		onclick	="
			//objSearch.objValueInputStyle.value=\'\';
			objEvent.arrParams.strStyle=\'\';
			objEvent._UpdateURLDyn();
			return false;
			"
		';
		return $strE;
	/*-[.]*/}
/*-[D]*/private function strDesign()
		{
		$strD='
		class	="sensor block rel left border-right border-bottom"
		style	="
			color		:#4d4d4d;
			background-color:#e1dfdf;
			padding-left	:5px;
			padding-right	:5px;
			text-align	:center;
			height		:20px;
			text-decoration	:none;
			"
		';
		return $strD;
	/*-[.]*/}
/*-[R]*/private function strReality()
		{
		$strR=$this->strReality;
		}
/*-[O]*/private function strObject()
		{
		$strO.=
		'<'.strtolower(__CLASS__).
			$this->strEvent().
			$this->strDesign().
			'>';
			$strO.=
			Overlay::strHTML();
			$strO.=
			$this->strReality();
		$strO.=
		'</'.strtolower(__CLASS__).'>';
		return $strO;
/*-[.]*/	}
		//if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($strStyle))
		//href="/search'.strLinkGroove($arrParams, 'strStyle').'"
		//class="sensor block rel left border-right border-bottom"
	public static function strHTML($_objKIIM, $_strStyle, $arrParams)
		{
		$obj=new Genre($_objKIIM, $_strStyle, $arrParams);
		return $obj->strHTML;
		}
	}
?>