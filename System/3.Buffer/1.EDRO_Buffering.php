<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// EDRO
   //   /\
  //  <  **> 
 //     Jl  
////// 2020
//EDRO.Buffering.
//		EDRO.Buffer

//		EDRO.Process(HFIC.Construct)
		//R 'Report' -> Browser
		//R 'ReportError' -> Browser
		//R FMEM
		//R
		//R
		//R
		//W [x]
		//W [x]
		//W [x]
		//W [x]
		//W [x]
		//W [x]

//LOADER('EDRO_Buffering');

class EDRO_Buffering
	{
	private $strName	='';
	private $strPath	='';
	private $arrLib	= 
		array(
			//EDRO components
			'O2oЗаписьИтого'					=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/O2oЗаписьИтого.php',
			'ПрочитатьСлушателя'					=>'/home/EDRO/4.Objects/Read/Cloud/Disk/ПрочитатьСлушателей.php',
			'ЗапомнитьСлушателя'					=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/ЗапомнитьСлушателя.php',
			'[O] EDRO.Objects'					=>'/home/EDRO/4.Objects/Objects.php',
			'[R] EDRO.Reality'					=>'/home/EDRO/3.Reality/Reality.php',
			'[D] EDRO.Design'					=>'/home/EDRO/2.Design/Design.php',
			'[E] EDRO.Event'					=>'/home/EDRO/1.Event/Event.php',
			
			
			'EDRO_Objects.ObjectConstructor'			=>'/home/EDRO/EDRO.php',
			

			//EDRO object constructor
			

			//Wi is a short record of Waveinspiration
			//WiReach объединяет участников в проект.
			//WiReach - Assembles parttakers in to a complete project.  
		//	'WiReach_DjWorking'				=>'/home/EDRO/4.Objects/Read/Net/WiReach_DjWorking.php',
		//	'WiReach_HFIC_ParttakersSignatures'		=>'/home/EDRO/4.Objects/Write/Display/Element/WiReach_HFIC_ParttakersSignatures.php',
			
			'Listeners'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/Listeners.php',
			
			'Listener'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Listener/Listener.php',
			// 'Overlay'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Overlay/Overlay.php',
			'VectorKIIM_elementWaiting4Event_statisticalMembrane'	=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Membrane/VectorKIIM_elementWaiting4Event_statisticalMembrane.php',
			'Shader'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Shader/Shader.php',
			'Image'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Image/Image.php',
			'StationSearchBlock'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SearchBlocks/StationSearchBlock.php',
			// 'Genre'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Genre/Genre.php',
			'Tag'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Tag/Tag.php',
			// 'GenreTag'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Genre/GenreTag.php',
			'FormInput'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Form/FormInput.php',
			// 'Bitrate'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Bitrate/Bitrate.php',
			// 'BitrateTag'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Bitrate/BitrateTag.php',
			'AudioType'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/AudioType/AudioType.php',
			'CreatorType'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/CreatorType/CreatorType.php',
			'StationLink'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationLink.php',
			'StationQualityUPLink'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationQualityUPLink.php',
			'Header'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Header/Header.php',
			'PlayerEventIndicator'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Player/PlayerEventIndicator.php',
			'Player'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Player/Player.php',
			'SystemEventIndicatorStream'				=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/SystemEventIndicatorStream.php',
			'IndicatorRole'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorRole.php',
			'IndicatorNetwork'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorNetwork.php',
			'IndicatorMasterClock'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorMasterClock.php',
			'IndicatorLang'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorLang.php',
			'IndicatorHiFi'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorHiFi.php',
			'IndicatorDimensions'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorDimensions.php',
			'Pagination'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Pagination/Pagination.php',
			'HiFiNavigation'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/HiFiNavigation/HiFiNavigation.php',
			'DynaScreenEventIndicator'				=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/DynaScreen/DynaScreenEventIndicator.php',

			'DynaScreen'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/DynaScreen/DynaScreen.php',
			'DynaBlock'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/DynaBlock/DynaBlock.php',
			'StationBlock'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationBlock.php',
			'Sensor'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Sensor/Sensor.php',
			'SensorList'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/SensorList.php',
			'FileUploadForm'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Form/FileUploadForm.php',

			// 'FileSetupRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileSetupRead.php',
			'FileRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileRead.php',

			'FilePathsValidate'					=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FilePathsValidate.php',

			'FileTypeApply'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/FileTypeApply.php',
			'FileTemplateApply'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/FileTemplateApply.php',

			// 'FileInfoRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileInfoRead.php',
			// 'FileListRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileListRead.php',

			'File'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/File.php',

			// 'FileList'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileList.php',
			'StationList'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/StationList.php',
			//  'FileTreet'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileTree.php',
			// 'FileListSort'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileListSort.php',
			
			
			'FileWrite'						=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileWrite.php',

			'FileHistoryWrite'					=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileHistoryWrite.php',

			// 'FileUploadProcessWrite'				=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileUploadProcessWrite.php',
		);
		// 'Error'		=>'/home/chekmarev/Job/EDRO.SetOfTools/System/0.Reporter/Error.php',
		// 'Waveinspiration'	=>'/home/RCe.EDRO/4.Objects/Waveinspiration/Waveinspiration.php',
		 // 'FileReality'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Reality/FileAccess.php'
		// 'FileStream'		=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Stream/FileStream.php',
		// 'FileIndexWrite'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/ConstructorFile/LocalDisk/Write/FileIndexWrite.php',
		// 'FileUpload'		=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Upload//Upload.php',
		// 'FileUploadDesign'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Display/Upload/Design/UploadDesign.php',
		// FileAccess'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileAccess.php',
		// FileWrite'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileWrite.php',
		// FileIndex'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileIndex.php',
		// FileShow'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileShow.php',
	public function __construct($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		foreach($this->arrLib as $strName=>$strPath)
			{
			$this->strName	=$strName;
			$this->strPath	=$strPath;
			$this->_Read($objKIIM, $strName);
			//sleep(1);
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function _Read($_objKIIM, $_strName)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>$this->strName));
		
		require_once($this->strPath);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>$this->strName));
		}
	}
$objEDRO_Buffering=new EDRO_Buffering($objKIIM);
?>