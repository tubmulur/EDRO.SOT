<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
//$objReport = new Report($objKiiM, array(
//			'_strClass'		=>'',
//			'_strFunction' 		=>'',
//			'_strMessage'		=>'',
//			'_objBeforeCrash'	=>false,
//			));

class Report
	{
	public $strHtml;

	public function __construct($_objKIIM, $_arr)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		$this->strHTML.='Class	 ='.$_arr['_strClass'].'<br/>';
		$this->strHTML.='Function='.$_arr['_strFunction'].'<br/>';
		$this->strHTML.='Message ='.$_arr['_strMessage'].'<br/>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function _ShowMessage()
		{
		$str='<fatalError class="block" style="color:#FFF;background-color:red;font-size:22px;">';
			$str.=$this->strHTML;
		$str.='</fatalError>';
		$this->strHTML=$str;
		}
	public static function str($_objKIIM, $_arr)
		{
		$objReport=new Report($_objKIIM, $_arr);
		return $objReport->strHTML;
		}
	}
?>