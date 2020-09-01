<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StationSearchBlock
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_objKIIM, $_arrValues=array()) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		if(isset($_arrValues['name']))
			{
			$strSearchName		=$_arrValues['name'];
			}
		if(isset($_arrValues['style']))
			{
			$strSearchStyle		=$_arrValues['style'];
			}
		if(isset($_arrValues['bitrate']))
			{
			$strSearchBitrate	=$_arrValues['bitrate'];
			}
		if(isset($_arrValues['codec']))
			{
			$strSearchCodec		=$_arrValues['codec'];
			}
			unset($_arrValues);

		$this->strHTML	='
			<hficMenu
				class="fix HR0 V99 layer_4 default BBV BTA"
				>
				<ifCutDown
					class="block right sensor TC1 BC1 no-select"
					onclick="
						this.parentNode.classList.remove(\'CutDown\');
						this.parentNode.className+=\' Expanded\';
						"
					style="
						text-align	:center;
						line-height	:36px;
						height		:38px;
						width		:60px;
						"
					>
					<ifRU>
						МЕНЮ
					</ifRU>
					<ifEN>
						MENU
					</ifEN>
				</ifCutDown>
				<ifExpanded
					class="fix block layer_4  HL0 HV99 TC1 BC1"

					style="
						height		:100vh;
						width		:100vw;
						"
					>
					<menu
						class="block"
						style="
							width		:100%;
							height		:40px;
							padding		:0;
							margin		:0;
							"
						>
						<topTouchBuffer
							class	="block TC2 BC2"
							style	="
								height	:10px;
								width	:100%;
								font-size	:x-small;
								"
							>
							'.$_SERVER['HTTP_X_FORWARDED_FOR'].'
						</topTouchBuffer>
						//Menu
						<closeButton
							class="sensor block right TC3 BC3"
							style="
								height		:20px;
								width		:60px;
								text-align	:center;
								line-height	:18px;
								"
							onclick="
								this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
								this.parentNode.parentNode.parentNode.className+=\' CutDown\';
								"
							>
							<ifRU>
								x
							</ifRU>
							<ifEN>
								x
							</ifEN>
						</closeButton>
						<bottomTouchBuffer
							class	="block TC2 BC2"
							style	="
								height		:10px;
								width		:100%;
								font-size	:x-small;
								"
							>
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer>
					</menu>
					<data
						class="block scrollerY TC1 BC1"
						style="
							width	:100%;
							height	:100%;
							"
						>
						<form 
							id		="formStationSearch"
							class		="block TC1 BC1"
							action		="/search"
							onsubmit	="return false;"
							style		="
									width		:100%;
									height		:152px;
									"
							>'.
							//FormInput::strHtml($objKIIM, array('RU'=>'РФИд','EN'=>'RFId'), $strSearchId).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Название',
									'_EN'=>'Name'
								), array(
									'_strValue'	=>$strSearchName,
									'_strInputType'	=>'hidden',
									'_strInputName'	=>'Name'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Стиль',
									'_EN'=>'Style'
								), array(
									'_strValue'	=>$strSearchStyle,
									'_strInputType'	=>'text',
									'_strInputName'	=>'Style'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Битрейт',
									'_EN'=>'Bitrate'
								), array(
									'_strValue'	=>$strSearchBitrate,
									'_strInputType'	=>'number',
									'_strInputName'	=>'Bitrate'
								), array(
									'bIzEq'		=>true
								
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Кодек',
									'_EN'=>'Codec'
								), array(
									'_strValue'	=>$strSearchCodec,
									'_strInputType'	=>'text',
									'_strInputName'	=>'Codec'
								)).
							'
						</form>
						<questions
							class="block TC1 BC1 scrollerY"
							>
							<question class="block TC1 BC1">
								Are you robot?
							</question>
							<question class="block TC1 BC1">
								Are you assm programmer or coder?
							</question>
							<question class="block TC1 BC1">
								Are you scientist?
							</question>
							<question class="block TC1 BC1">
								Are you dancer?
							</question>
							<question class="block TC1 BC1">
								Are you poet?
							</question>
							<question class="block TC1 BC1">
								Are you singer?
							</question>
							<question class="block TC1 BC1">
								Are you radioDj?
							</question>
							<question class="block TC1 BC1">
								Are you hardcore filarmonia virtuose?
							</question>
							<question class="block TC1 BC1">
								Are you hardcore conservatoria composer?
							</question>
							<question class="block TC1 BC1">
								Are you a DjFeel?
							</question>
							<question class="block TC1 BC1">
								Are you a Julia Pugo?
							</question>
							<question class="block TC1 BC1">
								Are you a Dj Миша Пуго?
							</question>
							<question class="block TC1 BC1">
								Are you a Paul Oakenfold?
							</question>
							<question class="block TC1 BC1">
								Are you Armin van Buuren?
							</question>
							<question class="block TC1 BC1">
								Are you Ferry Corsten?
							</question>
							<question class="block TC1 BC1">
								Are you Dj Михаил Тумблер?
							</question>
							<question class="block TC1 BC1">
								Are you Dj Мозг?
							</question>
							<question class="block TC1 BC1">
								Are you music shop getway Yaroslav Pomogaykin?
							</question>
							<question class="block TC1 BC1">
								Are you music shop getway2.0 Bogdanova Tatiana?
							</question>
							<question class="block TC1 BC1">
								Are you hockey player Ginger Red?
							</question>
							<question class="block TC1 BC1">
								Are you guitar virtuoz Alexey Popov?
							</question>
							<question class="block TC1 BC1">
								Are you Dj store underground Talhin Tagir?
							</question>
							<question class="block TC1 BC1">
								Are you Yamaha dealler Юрий Фоминенко?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Roman Messer?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Alex Byrka?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Ruslan Device?
							</question>
							<question class="block TC1 BC1">
								Are you drum`n`bass composer and Dj Konstatin Gvozd?
							</question>
							<question class="block TC1 BC1">
								Are you house Dj Harisov?
							</question>
							<question class="block TC1 BC1">
								Are you opera singer Anastasia Makimova?
							</question>
							<question class="block TC1 BC1">
								Are you studio owner I. Zirinskiy?
							</question>
							<question class="block TC1 BC1">
								Are you chanson music composer Н.Мясников?
							</question>
							<question class="block TC1 BC1">
								Are you electro live player Dj Пришелец?
							</question>
							<question class="block TC1 BC1">
								Are you trance cmposer Alex Shevchenko?
							</question>
							<question class="block TC1 BC1">
								Are you from Trance.kG/Radio?
							</question>
							<question class="block TC1 BC1">
								Are you from any radio station listed?
							</question>
							<question class="block TC1 BC1">
								Are you dark longhair person?
							</question>
							<question class="block TC1 BC1">
								Dou you want to see gay stations?
							</question>
							<question class="block TC1 BC1">
								Dou you want to see getero stations?
							</question>
							<question class="block TC1 BC1">
								Are you grass smoker?
							</question>
							<question class="block TC1 BC1">
								FM Mode.
							</question>
							<question class="block TC1 BC1">
								Save your setup.
							</question>
							<question class="block TC1 BC1">
								Hfic selection.
							</question>
							<question class="block TC1 BC1">
								DjMode Experimental (+vl)
							</question>
						</questions>
						<bottomTouchBuffer
						class	="block TC1 BC1"
							style	="
							height	:200px;
							width	:100%;
								"
							>
						</bottomTouchBuffer>
					</data>
				</ifExpanded>
				'.
				$this->strObjectInit().
			'</hficMenu>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function strObjectInit()
		{
		return "
			<script>
				console.log('[V]EDRO.Object.objSearch: init');
				var objSearch		=new SearchForm();
				console.log('[.]EDRO.Object.objSearch: init');
			</script>
			";
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Object.SearchForm: Declare');
		class SearchForm //Init in  StationSearchBlock.php
			{
			constructor()
				{
				console.log('[Vv]EDRO.Object.SearchForm: Construct');
				this.objStationSearch		=document.getElementById('formStationSearch');
				//this.objXHR			=new XMLHttpRequest();
				//this.intPage			=0;
				//this.intOnPage		=0;
				this.objValueInputName		=document.getElementById('SearchByName');
				this.strValueInputName		='';
				//this.strValueInputName	=encodeURIComponent(document.getElementById('SearchByName').value);
				this.objValueInputStyle		=document.getElementById('SearchByStyle');
				this.strValueInputStyle		=this.objValueInputStyle.value;
				//this.strValueInputStyle	= '';
				this.objValueInputBitrate	=document.getElementById('SearchByBitrate');
				this.strValueInputBitrate	=this.objValueInputBitrate.value;
				/*this.strValueInputBitrate	=document.getElementById('SearchByBitrate').value;*/
				//this.strValueInputCodec		='';
				this.objValueInputCodec		=document.getElementById('SearchByCodec');
				this.strValueInputCodec		=this.objValueInputCodec.value;
				//this.strEvent			='/search';
				//this.strParams		='';
				//this.strUrl			='';
				//this.strUrlDynUpdate		='';
				//this.bIzHistory			=true;
				this.bIzHistory			=true;
				
				//this._ActualizeInputFieldsText();
				//this._SendXHR();
				console.log('[..]EDRO.Object.SearchForm: Construct');
				}
			_CreateUrl()
				{
				console.log('[Vv]EDRO.Object.SearchForm: _CreateUrl');
				/*objEvent.strName		='/search';
				this.strParams			='?name='+this.strValueInputName+'&style='+this.strValueInputStyle+'&bitrate='+this.strValueInputBitrate+'&codec='+this.strValueInputCodec+'&page='+objReality.intPage+'&onPage='+objReality.intOnPage;
				objReality.strURLShow		=objEvent.strName+this.strParams;
				objReality.strUrlDynUpdate	=objReality.strURLShow+'&d=1';*/
				console.log('[..]EDRO.Object.SearchForm: _CreateUrl');
				}
			_ActualizeInputFields()
				{
				console.log('[Vv]EDRO.Object.SearchForm: _ActualizeInputFields');
				//document.getElementById('SearchByName').value	=this.strValueInputName;
				this.objValueInputName.value	='';
				this.objValueInputStyle.value	=this.strValueInputStyle;
				this.objValueInputBitrate.value	=this.strValueInputBitrate;
				this.objValueInputCodec.value	=this.strValueInputCodec;
				//document.getElementById('SearchByCodec').value	='';
				console.log('[..]EDRO.Object.SearchForm: _ActualizeInputFields');
				}
			_Submit()
				{
				console.log('[Vv]EDRO.Object.SearchForm: _Submit');
				objReality.arrParams.strStyle	=this.strValueInputStyle;
				objReality.arrParams.intBitrate	=this.strValueInputBitrate;
				objReality.arrParams.strCodec	=this.strValueInputCodec;
				objObjects._Search();
				//this._CreateUrl();
				//objDynaScreenEventIndicator.objHTML.style.display="block";
				//console.log('SendXHRl');
				//this._UpdateUrl();
				//this.objXHR.open('POST', this.strURLSend);
				//console.log('LetShowUrl:');
				//this.objXHR.send();
				console.log('[..]EDRO.Object.SearchForm: _Submit');
				}
			/*
			_InitDynaScreen()
				{
				console.log('init: MoodSetter "Search" and  DynaScreen follower');
				objDynaScreen		=document.getElementById('DynaScreen');
				}
			*/
			}
		console.log('[.]EDRO.Object.SearchForm: Declare');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objKIIM, $_arrValues=array())
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_objKIIM, $_arrValues);
		return $obj->strHTML;
		}
	}
?>