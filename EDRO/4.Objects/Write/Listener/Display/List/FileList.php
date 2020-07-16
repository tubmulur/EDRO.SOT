<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Design/Destination/Doing
 //     Jl   	[R] Reality/Role
////// 2020	[O] Objects
/*array(
	CopyrightSign'=>array(
		'strType'=>'dir/',
	);
);*/

// Usage:
//	$objFileList=new FileList($objKIIM, array('_strEnterDir'=>'/home/...','_strSort'=>'type/name'));
//
class FileList extends FilePathsValidate
	{
	// $public	$strHtml;
	//public		$arr		=array();

	public $strName;
	public $strDir;
	public $strFullPath;
	public $strSort;
	public $strSetupFile;
	protected $arrEvent=
		array(
		'strType'	=>'Write',
		'strDevice'	=>'Display'
		);
	protected $arrDesign=
		array(
		'arrTittle'=>
			array(
			'arrListener'=>
				array(
				'RU'=>'Список элементов',
				'EN'=>'Elements list',
				)
			),
		);
	protected $arrReality=
		array(
		'arrObjects'=>
			array(
			'File'
			),
		'arrRoles'=>
			array('
			Listener',
			'Dj'
			),
		'arrLanguages'=>
			array(
			'RU',
			'EN'
			),
		'arrDevices'=>
			array(
			'Display'=>
				array(
				'strName'=>'',
				),
			'Disk'=>
				array(
				)
			)
		);
	protected $strObject	='FileList';
	
	//private $bIsUpperDir=false;

	public function __construct($_objKIIM, $_strAction='default', $_arrData=array())
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>$this, '_intShowTempo'=>'1000' ));

		global $arrTypes;
		print_r($arrTypes);
		
		// 1.CreateProcessPath;
		// 2.GetProcessSetup ->  2FilterProcessSetupInEDRO
		// 		ProcessSetup=EventDesignReality
		// 3.BuildObject
		//
		//
		/////////////////////////////////////////////////////////////////
		$this->strDir		=$_arrData['_strDir'];
		$this->strName		=$_arrData['_strName'];
		$this->strSort		=$_arrData['_strSort'];

		parent::__construct($objKIIM);
		?>
			<ifRU>
				Мы обещаем что никакая информация, помимо информации о станции и радиодиджее не будет доступна без авторизации. 
				Это основная концепция HiFiIntelligentClub и главная парадигма составных технологий: EDRO, EDRO.SetOfTools, EDRO.Polymer, GoodCatJS<br/><br/>

				Всем привет. Это Hfic Samin. Слушайте радиостанции со всего мира.<br/> Не все станции работают 24/7.<br/>
				Если после нажатия на кнопку "Слушать", станция стала красной, не переживайте, это значит станция в настоящий момент 
				недоступна. Просто нажмите на другую кнопку  "Слушать", и слушайте другую станцию.<br/><br/>
				Иногда бывает, что станция подсветилась зелёным, и написано, что она играет, но звука нет. Не переживайте, такое бывает. 
				Просто выберите другую станцию из списка.<br/><br/>
				Случается, что загорается жёлтый статус "Loading", и он не меняется в течении минуты. Да, так бывает. Вы слушаете радиостанции напрямую из других городов, регионов, 
				напрямую из-за границы. Если звук не появился спустя 10-15 сек. после нажатия на кнопку "Слушать",  просто выберите другую станцию.<br/><br/>
				Для того чтобы отключить воспроизведение, можно нажать на кнопку "STOP",  в самом верху (Загорается во время воспроизведения станции).<br/><br/>
				Нажатие на жёлтую кнопку "Loading" остановит загрузку станции.<br/><br/>
				Мы не собираем никакой статистики помимо стандартной (собираемой всеми по умолчанию) : IP шлюза вашей подсети провайдера, название операционки. название браузера. <br/><br/><br/>
				Мы планируем собирать статистику отказов и сбоев. Для этого будут использованы, 
				в том числе и куки, область видимости которых будет ограничена доменами hhifiintelligentclub.ru и hifiintelligentclub.com.<br/><br/><br/>
				Мы не планируем установку yandex.metrika, google.analytics и любых других внешних  счётчиков посетителей.<br/>
				Мы сообщим за неделю о включении кукиз в нашей группе в ВК.<br/>
				https://vk.com/loudrepublic
			</ifRU>
			<ifEN>
				Project features declaration: ID3 and information not about station or station dj, will be avaliable only from personal area after autorization. This is our basis. This basis was integratetd when creating our construction technologys HiFiIntelligentClub (com and ru) consists of: EDRO, EDRO.SetOfTools, EDRO.Polymer, GoodCatJS.  Hfic Samin. HiFiIntelligentClub owner, the creator of technologys.<br/><br/>
				Translation in progress.
				

				https://facebook.com/hifiintelligentclub
			</ifEN>
		<?php
		//$objFileListRead=new FileListRead($objKIIM, $this->strFullPath);
		//print_r($objFileListRead);

	//	print_r($this);

	//	exit(0);
		//$objInfo	=new ReadFileInfo($_objKIIM, 'default', $_arrData);
		//print_r($objInfo);
		//print_r($objInfo->arr);
		/*
		exit(0);
		$this['arrReality']=$objInfo->arr;
		print_r($this);
		parent::__construct($objKIIM, $_arrData);


		$this->strDir 		=$_arrData['_strDir'];


		$this->strSort		=$_arrData['_strSort'];



		$this->bIsUpperDir	=false;

		if(empty($this->strEnterDir))
			{
			$this->strEnterDir	=$this->strBaseDir;
			$this->bIsUpperDir	=true;
			}


		foreach($this->arr as $strFile)
			{
			$arrFile['_strDir']	=$this->strEnterDir;
			$arrFile['_strName']	=$strFile;
			$objFile		=EDRO('File', $arrFile['_strName'], $arrFile);
			}

		$this->_GetFolder($objKIIM);
		$this->_Sort($objKIIM);
		$this->_ProcessElements($objKIIM);
		//$this->strHTML;
		*/
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHtml($_objKIIM, $_arr=array('_strEnterDir'=> '', '_strSort'=>'Type'))
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$objFileList=new FileList($objKIIM, $_arr);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>