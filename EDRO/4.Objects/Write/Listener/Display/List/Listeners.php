<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Listeners
	{
	public $strHTML;
	public function __construct($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$мСлушатели5Мин	=$_мСлушатели['мСлушателиЗаПятьМинут'];
		           unset($_мСлушатели);
		$this->strHTML='
			<activeListeners 
				class="fixed block scrollerY layer_5" 
				style="
					bottom		:20px;
					left		:0px;
					Width		:100%;
					height		:20px;
					background-color:#fff;
					"
				>';
		foreach($мСлушатели5Мин as $чСлушательИД=>$мСлушательПараметры)
			{
			$this->strHTML.='
				<activeListener 
					class="block left border-right border-left" 
					style="
						height:20px;
						"
					>
					';
					$this->strHTML.=Genre::strHTML($objKIIM, $мСлушательПараметры['strStyle'], $_мПоиск);
			$this->strHTML.='
				</activeListener>
				';
			}
		$this->strHTML.='
			</activeListeners>
			';
		$this->strHTML;
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$о	=new Listeners($_objKIIM, $_мСлушатели, $_мПоиск);
		return $о->strHTML;
		}
	}
?>