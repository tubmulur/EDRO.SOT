<?php
class ЗапомнитьСлушателя
	{
	public function __construct($_objKIIM, $_objEDRO)
		{
		$сФайлСлушателя					='';
		$чТекущееВремя					=floor(microtime(true));
		$чСуффиксФайла					='_'.$чТекущееВремя.'.о2о';
			if(isset($_SESSION['intListnerId']))
			{
			$intSafeSessionId		=(integer)$_SESSION['intListnerId'];
			$strListenerFile		=$intSafeSessionId.$strFileSuffix;
			}
		else
			{
			$intListenerCount		=count(scandir($strListnersPath));
			$strListenerFile		=$intListenerCount.$strFileSuffix;
			$_SESSION['intListnerId']	=$intListenerCount;
			}
		$intSafeSessionId=(integer)$_SESSION['intListnerId'];
		exec('rm -f '.$strListnersPath.$intSafeSessionId.'_*'); 
		file_put_contents($this->arrEDRO['arrReality']['strListnersPath'].$strListenerFile, json_encode(array('strStyle'=>$this->arrEDRO['arrEvent']['arrParams']['style'])));
		}
	public static function _ЛокалОблакоКИМ($_objKIIM, $_objEDRO)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$оЗапомнитьСлушателя= new ЗапомнитьСлушателя($_objKIIM, $_objEDRO);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function _ЛокалОблако()
		{
		$оЗапомнитьСлушателя= new ЗапомнитьСлушателя($_objEDRO);
		}
	}
?>