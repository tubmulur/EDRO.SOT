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
	private		$strDesignTag;
	private		$arrParams;
	private 	$strLayer;
	public function __construct($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$this->arrParams	=$arrParams;
		echo $this->intLayer		=$_intLayer;
		$мФразы			=мСобратьФразы($_strStyle);
		$this->strDesignTag	='a';
		//$strDesignTag		=strtolower(__CLASS__);
		foreach($мФразы as $сФраза)
			{
			//echo $сФраза;
			$this->strReality	=$сФраза;
			$this->strHTML		.=$this->strObject();
			}
		}
/*-[E]*/private function strEvent()
		{
		//onStartLoading		=""
		//onFinishLoading		=""
		$strE	='href="/search'.strLinkGroove($this->arrParams, 'strStyle', $this->strReality()).'"';
		$strE	.="\n";
		$strE	.=<<<oo2oo
		onclick	="
			//objSearch.objValueInputStyle.value	='__STR_REALITY__';
			objEvent.arrParams.strStyle		='__STR_REALITY__';
			objEvent._UpdateURLDyn();
			return false;
			"
oo2oo;
		$strE	=str_replace('__STR_REALITY__', $this->strReality(), $strE);
		return $strE;
	/*-[.]*/}
/*-[D]*/private function strDesign()
		{
		$strD	='
			class	="sensor block rel left BRJ BBV layer_'.$this->intLayer.'"
		';
		$strD	.='
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
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		$strOpen="<";
		//$strOpen="<br/>";
		$strClose=">";
		//$strClose="<br/>";
		
		$strO=$strOpen.$this->strDesignTag."\n".$this->strEvent()."\n".$this->strDesign().$strClose;
			$strO.=Overlay::strHTML($objKIIM, $this->strReality(), $this->arrParams, $this->_intLayer);
			$strO.=$this->strReality();
		$strO.=$strOpen.'/'.$this->strDesignTag.$strClose;
		

		return $strO;
/*-[.]*/	}
		//if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($strStyle))
		//href="/search'.strLinkGroove($arrParams, 'strStyle').'"
		//class="sensor block rel left border-right border-bottom"
	public static function strHTML($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$obj=new Genre($_objKIIM, $_strStyle, $arrParams, $_intLayer);
		return $obj->strHTML;
		}
	}
?>