<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class ReportError
	{
	public $html;
	public function __construct($_objKIIM, $_strMessage)
		{
		/*echo '<warning
			class="block"
			style="color:red;"
			>';
			echo $_strMessage;
		echo '</warning>';*/
		}
	private function _ShowMessage($_strMessage)
		{
		print_r($this);
		echo '<Error class="block" style="color:red;">'.$_strMessage."</Error>";
		}
	}
?>