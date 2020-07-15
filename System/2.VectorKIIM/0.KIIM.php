<?php
/*
<!--/\ © A.A.CheckMaRev tubmulur@yandex.ru
  <  **>
    Jl-->
//How does it works (require):
//1. load VectorKIIM Class file (require/home/...VectorKIIM);
//1.1.
//2. Compile it into object (our name of compiled object is objKIIM);
//3. Call objectKIIM, after start method;
//4. Call objectKIIM, before end of method;
//example
//$objKIIM=KIIM::objStart($objKIIM,
//	array(
//		'_strClass'		=>__CLASS__, 
//		'_strMethod'		=>__FUNCTION__,
//		'_strMessage'		=> 'Optional',
//		'_strVectorPoint'	=> 'Optional',
//	));
// _strClass		=>__CLASS__,
// _strMethod		=>__FUNCTION__,
// _strMessage		=> Message you will see in debug mode, after Class/Method/essage,
// _strVectorPoint	=>Avaliable variants: Start/Finish;

/*
$objKIIM=KIIM::objStart($objKIIM, array(
	'_strClass'		=>'Index',
	'_strMethod'		=>'System loader',
	'_strMessage'		=>'LoadLibs',
	'_strVectorPoint'	=>'Start',
	));
*/
// License of usage VectorKIIM. I'm small code creator from Admiralteyskiy paradise district in SPB, Russia. I spand too mutch time to make my job,
// so i don't understend, what i must write to feel myself safe in terms of licensing. Please help me if you can. Thank you.
//
class KIIM
	{
	private $floatStartMicrotime	=0.00;
	private $intStep		=0;
	private $intDefaultTempo	=10;
	private $arrVector		=array();
	public function __construct(
			$_arrPosition=array(
				'_strClass'		=>'',
				'_strMethod'		=>'',
				'_strMessage'		=>'',
				'_strVectorPoint'	=>'',
				'_intShowTempo'		=>'',
				)
			)
		{
		$this->arrVector[]['arrPosition']=$this->arrPrepare($_arrPosition);

		if(empty($this->floatStartMicrotime))
			{
			$this->floatStartMicrotime=	round(microtime(true), 4);
			}
		$this->_Start($_arrPosition);
		}
	public function _Start($_arrPosition)
		{
		$arrPosition = $this->arrPrepare($_arrPosition);
					   unset($_arrPosition);
		$this->intStep++;
		$this->arrVector[$this->intStep]['arrTimers']=array(
				'floatStepStart'=>round(microtime(true),4),
				'floatStepFinish'=>0.0000,
				);
		$this->arrVector[$this->intStep]['arrPosition']=$arrPosition;
		$this->_Report('Begin');
		}
	public function _Finish($_arrPosition)
		{
		$arrPosition = $_arrPosition;
		unset($_arrPosition);
		if($this->arrVector[$this->intStep]['arrPosition']['strClass']		!=$arrPosition['strClass'])
			{
			$this->_Error('Error:begin->end strClass is not equal');
			}
		if($this->arrVector[$this->intStep]['arrPosition']['strMethod']		!=$arrPosition['strMethod'])
			{
			echo $this->_Error('Error:begin->end strMethod is not equal');
			}
		$this->arrVector[$this->intStep]['arrPosition']['strMessage']		=$arrPosition['strMessage'];
		$this->arrVector[$this->intStep]['arrPosition']['strVectorPoint']	=$arrPosition['strVectorPoint'];
		
		$this->arrVector[$this->intStep]['arrPosition']['intShowTempo']		=$arrPosition['intShowTempo'];
		$this->arrVector[$this->intStep]['arrTimers']['floatStepFinish']	=round(microtime(true), 4);
		$this->_Report('End');
		    
		unset($this->arrVector[$this->intStep]);
		$this->intStep--;
		}

	private function _Report($_strAction)
		{
		$bIsBegin	=false;
		$bIsEnd		=false;
		$bIsStart	=false;
		$bIsFinish	=false;
		$bIsMiddle	=false;
		$report=
			date('Y-m-d||H:I:s||').
			strNDigit(5, substr(microtime(true),10)).
			'||'.
			strNDigit($this->intStep,$this->intStep).
			'||';
		
		switch($_strAction)
			{
			case 'Begin':
				/*$report.='
				<KIIMLine
					id="KIIMLine"
					class="block border"
					style="
						margin-left:5px
						"
					>';*/
				if($this->arrVector[$this->intStep]['arrPosition']['strVectorPoint']=='Start')
					{
					}
				else
					{
					}
					$report.='v|   |       |       | |^v|   |       |       |v|';
					$report.=$this->arrVector[$this->intStep]['arrPosition']['strClass'];
					$report.=':';
					$report.=$this->arrVector[$this->intStep]['arrPosition']['strMethod'];
					$report.=':';
					$report.=$this->arrVector[$this->intStep]['arrPosition']['strMessage'];
					$report.=',';
					$report.=$this->arrVector[$this->intStep]['arrPosition']['strVectorPoint'];
					$report.=',';
					$report.=$this->arrVector[$this->intStep]['arrPosition']['intShowTempo'];
					$report.="\n";
			break;
			case 'End':
				$floatStepLength=$this->intRoundMicrotime(($this->arrVector[$this->intStep]['arrTimers']['floatStepFinish']-$this->arrVector[$this->intStep]['arrTimers']['floatStepStart']));
				$report.=
					'^|'.
					strNDigitVisible(3,$floatStepLength, 'fromBegin').
					'|'.
					strNDigitMainTrace($floatStepLength).
					'|'.
					strNDigitMicroTrace(strNDigitVisible(3,$floatStepLength,'fromEnd')).
					'|';

				$report.=',';
				$floatTotalLength=$this->intRoundMicrotime(($this->arrVector[$this->intStep]['arrTimers']['floatStepFinish']-$this->floatStartMicrotime));
				$report.=
					'|^^|'.
					strNDigitVisible(3,$floatTotalLength, 'fromBegin').
					'|'.
					strNDigitMainTrace($floatTotalLength).
					'|'.
					strNDigitMicroTrace(strNDigitVisible(3,$floatTotalLength,'fromEnd')).
					'|^|';
				//$report.=$floatTotalLength.'|';
				$report.="\n";
				if($this->arrVector[$this->intStep]['arrPosition']['strVectorPoint']=='Finish')
					{
					}
				else
					{
					}
				//$report.='</KIIMLine>';
			break;
			}
		//$report=str_replace("\n","",$report);
		//file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/log.txt', $report, FILE_APPEND);
		/*
		?>
		<script charset="utf-8">
			
			setTimeout(function()
				{
				
				var strReport='<?=$report?>';
				document.getElementById('KIIMDebug').innerHTML	+=strReport;
				},(K*50));
			K++;
			
		</script>
		<?php
		*/
		}
	private function intRoundMicrotime($_floatMicrotime)
		{

		$floatMicrotime		=$_floatMicrotime;
				   unset($_floatMicrotime);
		$floatMicrotime=round($floatMicrotime, 4);
		//if($_floatMicrotime<0)
		//	{
		//	$this->_Error('Time is <0');
		//	}
		//if($_floatMicrotime<0.0001)
		//	{
		//	return 0;
		//	}
		//else
		//	{
		return $floatMicrotime;
		//	}
		}
	private function arrPrepare($_arrPosition)
		{
		//$arrPosition['strClass']		= preg_replace('[^A-Za-z]', '', $_arrPosition['_strClass']);
		//$arrPosition['strMethod']	 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMethod']);
		//$arrPosition['strMessage']		= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMessage']);
		//$arrPosition['strVectorPoint'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strVectorPoint']);
		$arrPosition=$_arrPosition;
		return $arrPosition;
		}
	private function _Error($_strMessage)
		{
		echo'<pre>';
		print_r($this);
		echo'</pre>';
		echo '<Error class="block" style="color:red;">'.$_strMessage."</Error>";
		exit(0);
		}

	public static function objStart($_objKIIM, $_arrPosition=array(
								'_strClass'		=>'', 
								'_strMethod'		=>'', 
								'_strMessage'		=>'',
								'_strVectorPoint'	=>'',
								))
		{
		$objKIIM	=$_objKIIM;
			   unset($_objKIIM);
		$arrPosition['strClass']   	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strClass']);
		@$arrPosition['strMethod']   	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMethod']);
		$arrPosition['strMessage'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMessage']);
		@$arrPosition['strVectorPoint'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strVectorPoint']);
		@$arrPosition['intShowTempo'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_intShowTempo']);
								          unset($_arrPosition);
		if(is_object($objKIIM))
			{
			$objKIIM->_Start($arrPosition);
			}
		else
			{
			$objKIIM=new KIIM($arrPosition);
			}
		return $objKIIM;
		}
	public static function objFinish($_objKIIM, $_arrPosition=array(
								'_strClass'		=>'', 
								'_strMethod'		=>'', 
								'_strMessage'		=>'',
								'_strVectorPoint'	=>'',
								))
		{
		//echo'123';
		
		$objKIIM	=$_objKIIM;
			   unset($_objKIIM);
		$arrPosition['strClass']   	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strClass']);
		@$arrPosition['strMethod']   	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMethod']);
		$arrPosition['strMessage'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strMessage']);
		@$arrPosition['strVectorPoint'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_strVectorPoint']);
		@$arrPosition['intShowTempo'] 	= preg_replace('[^A-Za-z]', '', $_arrPosition['_intShowTempo']);
		unset($_arrPosition);
		if(is_object($objKIIM))
			{
			$objKIIM->_Finish($arrPosition);
			}
		else
			{
			Report::strError($_objKIIM, array(
				'_strClass'		=>__CLASS__,
				'_strFunction'		=>__FUNCTION__,
				'_strMessage'		=>'Error: Kiim vector is lost continiuty',
			//	'_objBeforeCrash'	=> $this,
				));
			}
		return $objKIIM;
		}
	}
?>