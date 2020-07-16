<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Слушатели
	{
	public $сСлушательБраузер;
	public function __construct($_мСлушатели, $_мПоиск)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$мСлушатели	=$_мСлушатели;
		           unset($_мСлушатели);
		$this->сСлушательБраузер='
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
		foreach($мСлушатели as $чСлушательИД=>$мСлушательПараметры)
			{
			$this->сСлушательБраузер.='
				<activeListener 
					class="block left border-right border-left" 
					style="
						height:20px;
						"
					>
					';
					$this->сСлушательБраузер.=Genre::strHTML($objKIIM, $мСлушательПараметры['strStyle'], $_мПоиск);
			$this->сСлушательБраузер.='
				</activeListener>
				';
			}
		$this->сСлушательБраузер.='
			</activeListeners>
			';

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function сСлушательБраузер($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$о	=new Слушатели($_objKIIM, $_мСлушатели, $_мПоиск);
		return $о->__FUNCTION__;
		}
	}
?>