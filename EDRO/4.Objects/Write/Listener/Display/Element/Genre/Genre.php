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
			$this->strReality=$сФраза;
			$this->$strHTML		.=$this->strObject();
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
		$strR=.$this->strReality;
		}
/*-[O]*/private function strObject()
		{
		$strO.=
		'<'.strtolower(__CLASS__).
			Overlay::strHTML().
			$this->strEvent().
			$this->strDesign().
			'>';
			$strO.=
			$this->strReality();
		$strO.=
		'</'.strtolower(__CLASS__).'>';
/*-[.]*/	}
	/*private function strDesign()
		{
		}*/
		/*if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($strStyle))
			{
			$this->strHTML.='
			<a
				href="/search'.strLinkGroove($arrParams, 'strStyle').'"
				class="sensor block rel left border-right border-bottom"
				style="
					color		:#4d4d4d;
					background-color:#e1dfdf;
					padding-left	:5px;
					padding-right	:5px;
					text-align	:center;
					height		:20px;
					text-decoration	:none;
					"
				>'.
				$strStyle.
				'<overlay 
					class="abs block layer_5_Overlay" 
					style="
						top		:0;
						left		:0;
						text-align	:center;
						width		:100%;
						height		:100%;
						color		:#fff;
						background-color:rgba(240, 240, 240, 0.6);
						"
					onclick="
						//objSearch.objValueInputStyle.value=\'\';
						objEvent.arrParams.strStyle=\'\';
						objEvent._UpdateURLDyn();
						return false;
						"
					>
					x
				</overlay>
					'.
			'</a>';
			}
		else
			{
			if(!empty($strStyles)&&strpos('!!',$strStyles)!==FALSE)
				{
				$strColor='red';
				}
			else
				{
				$strColor='#4d4d4d';
				}
			$this->strHTML.='
			<a
				href="/search'.strLinkGroove($arrParams, 'strStyle', $strStyles, true).'"
				class="sensor block left border-right border-bottom"
				style="
				color		:'.$strColor.';
				background-color:#e1dfdf;
			
				padding-left		:5px;
				padding-right		:5px;
				text-align	:center;
				height		:20px;
				text-decoration	:none;
				"
				onclick="
				//objSearch.objValueInputStyle.value=\''.$strStyles.'\';
							objEvent.arrParams.strStyle=\''.$strStyles.'\';
							objEvent._UpdateURLDyn();
							return false;
							"
				>'.
				$strStyle.
			'</a>';
			}
		
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}*/
	public static function strHTML($_objKIIM, $_strStyle, $arrParams)
		{
		$obj=new Genre($_objKIIM, $_strStyle, $arrParams);
		return $obj->strHTML;
		}
	}
?>