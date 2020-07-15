<!doctype html>
<html
	lang="ru"
	xml:lang="ru"
	style="
		position:fixed;
		z-index:1;
		"
	>
	<head>
		<title>HiFiIntelligentClub</title>

		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-title" content="HiFiIntelligentClub">
		<!--link rel="apple-touch-startup-image" href=""-->
		<meta http-equiv="expires" content="Wed, 25 July 2020 23:00:00 GMT"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

		<meta name="milliseconds" content=".4446">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="author" content="assminog@gmail.com">
		<!--link rel="manifest" href="/manifest.json"/-->
		<?=$strDynascreenStyle?>

		<script>
			var K=0;
			var L=0;
			var strCurOperID;
			function b64clr(str)
				{
				return atob(str);
				}
		</script>
		<?php 
			echo   Event::strDeclareJs();
			echo  Design::strDeclareJs();
			echo Reality::strDeclareJs();
			echo           EventIndicator::strDeclareJs();
			echo                   Player::strDeclareJs();
			echo               DynaScreen::strDeclareJs();
			echo DynaScreenEventIndicator::strDeclareJs();
			echo       StationSearchBlock::strDeclareJs();
			echo VectorKIIM_elementWaiting4Event_statisticalMembrane::strDeclareJs();

			echo   Event::strInitJs();
			echo   VectorKIIM_elementWaiting4Event_statisticalMembrane::strInitJs();
		?>
		<script>
			//console.log('Setting event handler');
			//var objNav={hifi:1};
			//window.onpopstate=function(event)
				//{
				//var objEvent=new Event();
				//event.preventDefault(); 
				//event.target.objSearchForm._ActualizeInputFieldsText();.target.objSearchForm.strURLShow
				/*objSearchForm.bIzHistory=false;
				var arrSearch=document.location.search.substr(1).split('&');
				objSearchForm.strPage		=document.location.pathname;
				arrSearch.forEach(function(strCurrent)
					{
					var arrCurrent			=strCurrent.split('=');
					var strProperty			='strValueInput'+arrCurrent[0].substring(0,1).toUpperCase()+arrCurrent[0].substring(1);
					objSearchForm.strProperty	=arrCurrent[1];
					console.log(objSearchForm.strProperty);
					}
				);
				console.log(objSearchForm);
				objSearchForm._ActualizeInputFieldsText();
				objSearchForm._SendXHR();*/
				//console.log(arrSearch);
				//console.log(document.location.search);
				//console.log(document.location.pathname);
				//console.log(document.location.href.replace(document.location.origin,''));
				//objSearchForm._FollowHistory(document.location.href.replace(document.location.origin,''));
				//}
			
		</script>
	</head>
	<body
		id="HiFiIntelligentClub"
		style="
			position		:fixed;
			top			:0;
			left			:-0px;
			width			:100vw;
			height			:20.2vh;
			margin			:0;
			padding			:0;
			background-repeat	:no-repeat;
			background-size		:99vw;
			background-position	:0vw 14vh;
			background-color	:#FFF;
			overflow		:hidden;
			"
		>

		<imaliveandindependentwhenupdate
			class="block fixed layer_4_2" 
			style="
				bottom			:0;
				left			:0;
				height			:20px;
				max-width		:50%;
				font-size		:x-normal;
				color			:#FFF;
				background-color	:#000;
					"
			>
			<marquee direction="up" height="20px" scrollamount="1">
				<information
					class="block"
					style="
						height		:120px;
						"
					>
					<ifRU>
						<DynaKor 
							class="block left"
							>
							<line 
								class="block"
								>
								Текущее обновление
							</line>
							<line 
								class="block"
								>
								05.07.2020 21:09
							</line>
							<a 
								href	="https://vk.com/hifiintelligentclub"
								alt	="HiFi intelligent club"
								title	="HiFi intelligent club"
								target	="_blanc"
								style	="
									color		:#fff;
									text-decoration	:none;
									"
								>
								<status 
									class="block"
									style="
										color		:#FFF;
										font-size	:medium;
										background-color:#5181b8;
										"
										>
										Техподдержка.
								</status>
							</a>
						</DynaKor>
					</ifRU>
					<ifEN>
						<DynaKor 
							class="block left"
							>
							<line 
								class="block"
								>
								Current update:
							</line>
							<line 
								class="block"
								>
								2020-07-05 21:47
							</line>
							<a 
								href	="https://www.facebook.com/Hifiintelligentclub-106578714362302"
								alt	="HiFi intelligent club"
								title	="HiFi intelligent club"
								target	="_blanc"
								style	="
									color		:#fff;
									text-decoration	:none;
									"
								>
								<status 
									class="block"
									style="
										color		:#FFF;
										font-size	:medium;
										background-color:#5181b8;
										"
									>
									Techsupport.
								</status>
							</a>
						</DynaKor>
					</ifEN>
				</information>
			</marquee>
		</imaliveandindependentwhenupdate>
		<marquee
			class="fixed layer_4_1 block"
			style="
				background-color:rgb(212, 212, 212);
				left		:0px;
				bottom		:60px;
				color		:#444;
				height		:20px;
				/*border-bottom	:20px solid #eee;*/
				font-size	:small;
				">
			<ifRU class="block left" style="font-size	:small;"> 🚅    [RU] Всем привет! 🚃Сетевой аудио плеер HiFiIntelligentClub - самый высококачественный и производительный плеер в мире. 🚃Подходит для использования в автомобиле, мобильном телефоне, планшете, автомагнитоле, стационарном компьютере. 🚣Плеер сделан используя технологии, написанных нами с нуля. (🚲Мы пошли по этому пути, благодаря не решенной до сих пор проблеме, известной во всём мире как проблема "Нет денег 2000" и "Плати и владей 2020". 🚃В деньги мы не упёрлись, всё сделали сами. ☕Спасибо университету ИТМО, за то что, когда я  был студентом, нас драли как сидровых коз. Толк в этом есть. И знания языка Ассемблер помогли в том числе, экономить миллоны рублей ежегодно. 🚃Для нас миллион рублей - было не преодолимым препятствием для старта, а Ассемблер, взял и сэкономил этот миллион. И всё получилось). 💡Вот наши технологии: "Семафор[Сёма4]" (Сёма4 выбран за основу, тк в интернете очень много если и бардака, стандартов несколько а в процессе багрепортинга можно сильно загрустить, а у поездов семафор - это Бог, поэтому цвета плеера как у семофоров: Белый, жёлтый, голубой, красный. 🚃 Дебаггер "Вектор КИМа" (Философия: Отладь или умри, вне зависимости от того, сыт ты и есть ли у тебя хотя бы рубль в кармане) и 🚢  технологии синтеза исходного кода "ЕДРО" (Если Действие Реальность Объект). 🚑Мы немного задерживаемся с апдейтом универсального интерфейса (Поиск, сервер баз данных итд.), очень много технических нюансов. 🚃Ресурс в настоящий момент работает и возможно отвечает не всегда корректно на поисковые запросы  🚃. Дождитесь пожалуйста обновления, оно исправит положение дел. Спасибо что выбрали нас. Мы стараемся быть качественными. 🚃Мы хотим быть качественными и прилагаем для этого все имеющиеся силы. 🚑Исходные коды технологий проекта (Обновляются не всегда вовремя, приношу извинения, но разработчик всего один. Это я. Исходники со временем будут все.): https://github.com/tubmulur	 Разработчик приложения: 19005, Россия, Санкт-Петербург, Троицкий пр. 16/22, Индивидульный Предприниматель Чекмарёв А.А.[Метро Технологический институт, Адмиралтейский р-н, "Адмиралтейский Пэрэдайз Дистрикт" (Что-то вроде силиконовой долины)] ОГРНИП:309784721100325]; </ifRU>
			<ifEN class="block left"                                > 🚅    [EN] Hello evveryboody! 🚃You are on the HiFiIntelligentClub network audio player page. For today, HiFiIntelligentClub player is most universal and stable player of audiostream in the world. 🚃It supports stable playing in the background and on top, in carsaudio, mobile devices, laptops. 🚣Player was created using technologies, created by ourself (🚲Because of not solved yet "No money 2000" problem). 💡Here they are: Semafor[Sema4](It's train based filosophy, wnen semaphor signal is the God of the movement logics, so our colors are: Red, Blue, Yellow and white), debugger: VectorKIIM (Radical Javascript debugger. Debug or die filosophy), and 🚢code syntesis technology EDRO. 🚃Player is working, but we are on high difficulty update of enduser interface, database server and search engine. 🚃Sorry, that we can't fix any finded misstakes right now. 🚑Project has only one developer at all. 🚃Sorry for the navigation misstakes, guess we fix it. Please wait for updateю. 🚃 Source codes https://github.com/tubmulur:   🚃App developer: 19005, Russia, Saint-Petersbourg, Troitskiy pr. 16/22, Individual Entrepreneur Checkmarev A.A. [Metro Institute of Technology, Admiralteyskiy dc, "Admiralteyskiy Paradise District" some kind of the high tech area ] 🚃Registration certificate:309784721100325]; </ifEN>
			<!--FR class="block left"                               >  [FR] Search engine is Beta!!! Développeur d'application: 19005, Russia, Saint-Petersbourg, Troitskiy pr. 16/22, Individual Entrepreneur Checkmarev A.A. [Metro Technological Institute, Admiralteyskiy quartier, "Admiralteysky Paradise District",  Une sorte de quartier high-tech ] Certificat d'immatriculation:309784721100325]; </FR--> 
		</marquee>
		<debugWindow
			class="fixed block layer_4_1 scrollerY no-select"
			style="
				bottom			:40px;
				height			:20px;
				width			:100%;
				background-color	:white;
				font-size		:xx-small;
				"
			>
			<heading 
				class="block left" 
				style="
					background-color:red;
					color:#fff;
					margin-right:2px;
					"
				>
				vKIIM: 
			</heading>
			<strdata 
				id="strPlayerPlayEventsDebugString"
				class="block  left " 
				>
			</strdata>


		</debugWindow>
		<copyright
			class="layer_4_1 block fixed"
			style="
				color		:#fff;
				bottom		:0px;
				width		:100%;
				height		:20px;
				text-align	:right;
				font-size	:small;
				border		:1px solid #aaa;
				background-color:rgb(0, 0, 0);
				"
			>

			<ContactForAll
				class="layer4_1 block rel right"
				style="
					background-color:#000;
					color		:#fff;
					"
				>
				© tubmulur@yandex.ru
			</ContactForAll>
		</copyright>
		<?=EventIndicator::strHTML($objKIIM);?>
		<?=Reality::strInitJs()?>
		<?=$strKIIMWindowHTML?>