<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
/*array(
	'CopyrightSign'=>array(
		'strType'=>'dir/',
		);
);*/
class FileTree extends Reality
	{
	private $strEnterDir	= '';
	//public function __construct($_objKIIM, $_strEnterDir = '')
	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strEnterDir = $_strEnterDir;
		if(empty($this->strEnterDir))
			{
			$this->strEnterDir = $this->strBaseDir;
			}
		$this->_Get($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function _Get($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMetod'=>__FUNCTION__, '_strMessage'=>''));

		$objFileList=new FileList($objKIIM, $objFile->strDir.$objFile->strName);
		//print_r($objFileList);
		foreach($objFileList->arr as $objFile)
			{
			if($objFile->arr['type']=='dir')
				{
				$strEnterDir = $objFile->strDir.$objFile->strName.'/';
				//$objSubFileList=new FileTree($objKIIM, $strEnterDir);
				//print_r($objSubFileList);
				//$objFile->arrList=$objFileList;
				}
			else
				{
				}
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMetod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>