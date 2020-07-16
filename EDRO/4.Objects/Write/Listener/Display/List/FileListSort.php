<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class FileListSort extends Reality
	{
	public $arr	=array();
	private $arObj	=array();
	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		//no sorting works
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));

		$this->arrObj=$_arrData;
		switch($_strAction)
			{
			case 'Type':
			$this->arr=$this->arrType($objKIIM);

			break;
			case 'Name':
			break;
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function arrType($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		$arr 		=array();
		foreach($this->arrTypes as $strType)
			{
			print_r($strType);
			foreach ($this->arrObj as $obj)
				{
				if($obj->arr['type']==$strType)
					{
					$arr[]	=$obj;
					}
				}
			}
		print_r($arr);
		exit(0);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	/*
	private function _CompareIndex($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	private function _CreateIndex($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));



		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	*/
	}
?>