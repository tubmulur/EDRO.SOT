#!/usr/bin/php
<?php
//Copyright © assminog@gmail.com Andrey A. Chekmarev

//arrElectronicContactServices = array('str@strServiceName'=>'strContact');
class ElectronicContactServices
	{
	private $arrConstructTemplates		=array(); 
//array('arr@strServiceName'=>array(
//		'arr@strLang'=>array(
//			'arr@strDirection=array(
//				'arr@strServicePropery=array(
//					'strPropertyName'=>'strServiceInput',
//					}
//				)
//			)
//		);
	//arrElectronicContacts=array('str@strServiceName' => 'strServiceContact');
	public  $strHTML				='';
	public	$arrKIIM				=array('intK'=>0);
	private $arrContacts				=array(); 
	private $strLanguage				='EN'; 		//Default
	private $strPlatform				='Windows';	//Default
	private	$strDirection				='Output';
	private $strName				='';

	public function __construct($_arrKIIM, $_strDirection='Output', $_arr=array(
				'_arrConstructTemplates' 	=>array(), 
				'_arrContacts'			=>array(),
				'_strLanguage'			=>'',
				'_strPlatform'			=>'',
				)
			)
		{
		$this->arrKIIM			     =$_arrKIIM;
						unset($_arrKIIM);
		$this->strPlatform		     =$_arr['_strPlatform'];
						unset($_arr['_strPlatform']);
		$this->strLanguage		     =$_arr['_strLanguage'];
						unset($_arr['_strLanguage']);
		$this->strDirection		     =$_strDirection;
						unset($_strDirection);
		$this->arrConstructTemplates	     =$_arr['_arrConstructTemplates'];
						unset($_arr['_arrConstructTemplates']);
		$this->arrContacts		     =$_arr['_arrContacts'];
						unset($_arr['_arrContacts']);
		switch($this->strDirection)
			{
			case'Output':
			$this->_ElectronicContacts_constructHTML();
			break;
			case'Input':
			$this->_ElectronicContacts_constructHTML();
			break;
			}
		}
	private function _ElectronicContacts_constructHTML()
		{
		//$this->arrKIIM['intM']++;
		foreach($this->arrContacts as $strServiceName=>$strContact)
			{
			//$this->arrKIIM['intK']++;
		
			$strPlatformTemplate=$this->arrConstructTemplates[$strServiceName][$this->strLanguage][$this->strDirection]['Templates'][$this->strPlatform];
			$strServiceName=$this->arrConstructTemplates[$strServiceName][$this->strLanguage][$this->strDirection]['Names']['Name'];
			$strPlatformTemplateHTML=str_replace('{ServiceName}',$strServiceName,str_replace('{Contact}',$strContact,$strPlatformTemplate));
			$this->strHTML.=$strPlatformTemplateHTML;
			}
		}
	private function arrElectronicContacts_attachInputTemplate()
		{
		foreach($this->arrElectronicContacts as $strServiceName=>$strServiceContact)
			{
			}
		}
	}



$strLanguage="RU";
$strPlatform="IOS";
$arrKIIM=array();
$objNewElectronicContactsOutputHTML=new ElectronicContactServices($arrKIIM,'Output', array(
	'_arrConstructTemplates' 	=>$arrElectronicContactIOTemplates, 
	'_arrContacts'			=>$arrElectronicContacts,
	'_strLanguage'			=>$strLanguage,
	'_strPlatform'			=>$strPlatform,
	));
echo $objNewElectronicContactsOutputHTML->strHTML;
?>
