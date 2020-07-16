<?php
//
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//
$strDynascreenStyle='
<style>
	/*EDRO father*/
	body		{font-family:sans-serif;}
	.feetScreen	{width:100vw;height:93.5vh;}

	/*Vertical*/
	.V100		{top	:0px;}
	.V99		{top	:20px;}
	.V98		{top	:40px;}
	.V97		{top	:60px;}
	.V96		{top	:80px;}
	.V95		{top	:100px;}

	.V50pc 		{bottom	:50%;}

	.V5 		{bottom	:100px;}
	.V4 		{bottom	:80px;}
	.V3 		{bottom	:60px;}
	.V2 		{bottom	:40px;}
	.V1 		{bottom	:20px;}
	.V0 		{bottom	:0px;}


	/*Horizontal*/
	.HOL		{left	:0px;}
	.HOR		{right	:0px;}

	/*//EDRO matrix*/



	/*EDRO base*/
	window 		{} /*Not configured yet. Will be in a future.*/
	.block		{display:block; overflow:hidden;}
	.rel		{display:block; position:relative;}
	.abs		{display:block; position:absolute;}
	.fix		{display:block; position:fixed;}
	.fixed		{display:block; position:fixed;}
	.left		{float:left;}
	.right		{float:right;}
	.scrollerY	{overflow-x:hidden;overflow-y:scroll;}
	.scrollerX	{overflow-y:hidden;overflow-x:scroll;}
	scrollerY	{overflow-x:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch;}
	scrollerX	{overflow-y:hidden;overflow-x:scroll;-webkit-overflow-scrolling:touch;}
	.scrollerGlide	{-webkit-overflow-scrolling:touch;}
	.border		{border:	1px solid #1a1a1a4a;}
	.border-bottom	{border-bottom: 1px solid #1a1a1a4a;}
	.border-top	{border-top: 	1px solid #1a1a1a4a;}
	.border-left	{border-left:	1px solid #1a1a1a4a;}
	.border-right	{border-right:	1px solid #1a1a1a4a;}


	.groundLand	{background-color:rgba(255,255,255,0);}
	.groundFly	{background-color:rgba(255,255,255,0.7);}
	.bcol1		{background-color:#FFF;}
	.bcol2		{background-color:#c7c7c7;}
	.bcol3		{background-color:#000;}
	.tcol1		{color:#000;}
	.tcol2		{color:#c7c7c7;}
	.tcol3		{color:#FFF;}
	.tcenter	{text-align:center;}
	.tleft		{text-align:right;}
	.tright		{text-align:left;}
	.cursor		{cursor:pointer;}
	 /*//EDRO base*/

	/*Overlay*/
	.loading overlay{display:block;}
	.loaded overlay {opacity:0!important;visibility:hidden!important;transition: visibility 0s linear 0.9s, opacity 0.9s ease-in-out;}
	/*Overlay*/

	 /*//EDRO sensor*/
	a.sensor				{text-decoration:none;}
	sensorHorizontalRotate 			{overflow-y:hidden;overflow-x:scroll!important;-webkit-overflow-scrolling:touch;user-select:none;-webkit-user-select:none;-ms-user-select:none;cursor:pointer;}
	sensorButton				{cursor:pointer;}
	sensorHorisontalDisplay			{font-weight:lighter;}
	sensorHorisontalDisplay .selected	{font-weight:normal;color:#000;padding-left:3px;padding-right:3px;}
	 /*//EDRO sensor*/
	/*
	© A.A.CheckMaRev tubmulur@yandex.ru 2020

	MasterMoodSetter: EDRO Language selector. 
	1.Master flag is a mood setter. 
	2.Followers nodes are started with "if" prefix
		after setting Master mood flag,
		followers will form as Master mood setter flag desires.  
	
	Example:
		1. If we set master mood setter flag to EN:
			set MasterMoodSetter="EN";
		   We will get all followers showing only ifEN blocks.
			set MasterMoodSetter=EN,RU
		   We will get all followers showing only ifEN and ifRU blocks forever.
	*/
	body.EN ifEN{display:block;}
	body.EN ifRU{display:none;}
	body.EN ifFR{display:none;}
	body.EN ifIT{display:none;}
	body.EN ifGE{display:none;}
	body.EN ifBY{display:none;}
	body.EN ifUA{display:none;}

	body.RU ifRU{display:block;}
	body.RU ifEN{display:none;}
	body.RU ifFR{display:none;}
	body.RU ifIT{display:none;}
	body.RU ifGE{display:none;}
	body.RU ifBY{display:none;}
	body.RU ifUA{display:none;}

	body.FR ifFR{display:block;}
	body.FR ifRU{display:none;}
	body.FR ifEN{display:none;}
	body.FR ifIT{display:none;}
	body.FR ifGE{display:none;}
	body.FR ifBY{display:none;}
	body.FR ifUA{display:none;}

	body.BY ifBY{display:block;}
	body.BY ifRU{display:none;}
	body.BY ifEN{display:none;}
	body.BY ifFR{display:none;}
	body.BY ifIT{display:none;}
	body.BY ifGE{display:none;}
	body.BY ifUA{display:none;}

	body.IT ifIT{display:block;}
	body.IT ifRU{display:none;}
	body.IT ifEN{display:none;}
	body.IT ifFR{display:none;}
	body.IT ifGE{display:none;}
	body.IT ifBY{display:none;}
	body.IT ifUA{display:none;}

	body.GE ifGE{display:block;}
	body.GE ifRU{display:none;}
	body.GE ifEN{display:none;}
	body.GE ifFR{display:none;}
	body.GE ifIT{display:none;}
	body.GE ifBY{display:none;}
	body.GE ifUA{display:none;}

	body.UA ifUA{display:block;}
	body.UA ifGE{display:none;}
	body.UA ifRU{display:none;}
	body.UA ifEN{display:none;}
	body.UA ifFR{display:none;}
	body.UA ifIT{display:none;}
	body.UA ifBY{display:none;}




	/*© A.A.CheckMaRev tubmulur@yandex.ru*/
	/*EDRO Language*/

	/*EDRO layers*/
	.layer_1		{z-index:1;}
	.layer_1_1		{z-index:2;}
	.layer_1_2		{z-index:3;}
	.layer_1_3		{z-index:4;}
	.layer_1_4		{z-index:5;}

	.layer_2		{z-index:20;}
	.layer_2_1		{z-index:21;}
	.layer_2_2		{z-index:22;}
	.layer_2_3		{z-index:23;}
	.layer_2_4		{z-index:24;}

	.layer_3		{z-index:30;}
	.layer_3_1		{z-index:31;}
	.layer_3_2		{z-index:32;}
	.layer_3_3		{z-index:33;}
	.layer_3_4		{z-index:34;}

	.layer_4		{z-index:40;}
	.layer_4_1		{z-index:41;}
	.layer_4_2		{z-index:42;}
	.layer_4_3		{z-index:43;}
	.layer_4_4		{z-index:44;}

	.layer_5	 	{z-index:50;}
	.layer_5_Membrane 	{z-index:52;}
	.layer_5_Overlay	{z-index:51;}
	.layer_5_Debug		{z-index:52;}
	/*//EDRO layers*/

	/*//EDRO touch*/
	sensor.small{width:60px;height:60px;user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	.sensor{cursor:pointer;user-select:none;-webkit-user-select:none;-ms-user-select:none;};
	.touch-active:hover{border-color:green!important;}
	.touch-active:active{border-color:red!important;}
	.no-select{user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	/*//EDRO touch*/

	/*/ EDRO Station FollowingDj*/
	HiFi.NoFollowingDj ifNoFollowingDj		{display:block;}
	HiFi.FollowingDj ifFollowingDj			{display:none;}
	HiFi.FollowingDj ifNoFollowingDj		{display:none;}
	HiFi.NoFollowingDj ifFollowingDj		{display:none;}
	/*/ EDRO Station FollowingDj*/

	/*/ EDRO Station Search expanded*/
	.stationSearch.CutDown				{width:20px!important}
	.stationSearch.CutDown ifCutDown		{display:block!important;}
	.stationSearch.CutDown form.ifExpanded		{display:none!important;}
	.stationSearch.CutDown ifExpanded		{display:none!important;}

	.stationSearch.Expanded ifExpanded		{display:block!important;}
	.stationSearch.Expanded form.ifExpanded		{display:block!important;}
	.stationSearch.Expanded ifCutDown		{display:none!important;}
	/*/ EDRO Station Search expanded*/

	/*/ EDRO Station*/
	station:hover {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:actve {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:focus {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	/*/ EDRO Station*/

	/*EDRO player*/
	/*/EDRO.Author.table*/
	/*/EDRO.Author.table*/
	audioTrack 		{border-top: 1px solid #aaa;border-bottom: 1px solid #aaa;}
	audioTrack:hover 	{background-color:#ccc;}
	/*EDRO player*/

	/*EDRO station switch*/
	station ifReady:hover
		{
		color			:#000!important;
		background-color	:#ccc;
		}

	station.playing 				ifReady,
	station.loadingAudio 				ifReady,
	station.errorAudio 				ifReady
		{
		display:none!important;
		}
	playerControlAlwaysVisible.playing 		ifPlaying,
	station.playing 				ifPlaying,
	station.loadingAudio 				ifLoadingAudio,
	playerControlAlwaysVisible.loadingAudio 	ifLoadingAudio
		{
		display:block!important;
		}
	playerControlAlwaysVisible.stopped 		ifStopped
		{
		display:block!important;
		}
	playerControlAlwaysVisible.overload 		ifOverload,
	station.overload ifOverload
		{
		display:block!important;
		}
	playerControlAlwaysVisible.errorAudio 		ifNoConnection,
	station.errorAudio ifNoConnection
		{
		display:block!important;
		}
	/*EDRO station switch*/

	/*EDRO station switch colors*/
	playerControlAlwaysVisible.playing,
	station.playing
		{
		/*border:1px solid #6fff6f!important;*/
		background-color: #6fb6ff!important;
		background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;
		}
	playerControlAlwaysVisible.loadingAudio,
	station.loadingAudio
		{
		/*border:1px solid yellow!important;*/
		background-color:yellow!important;
		}

	playerControlAlwaysVisible.errorAudio,
	station.errorAudio
		{
		/*border:1px solid #ecc1be!important;*/
		background-color: #ecc1be!important;
		}
	/*EDRO station switch colors*/

	/*EDRO station switch header colors*/
	station.playing 				h2
		{
		color: #c3dffb!important;
		}
	station.loadingAudio 				h2
		{
		color:yellow!important;
		}
	station.errorAudio 				h2
		{
		color: #ecc1be!important;
		}
	/*EDRO station switch header colors*/

	/*EDRO station switch event indicator*/
	station.playing 				whiteblock
		{
		background-color: #6fb6ff!important;
		animation-name: Blink-play;
		animation-duration: 1s;
		/* animation-timing-function: easy; */
		animation-delay: 0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	station.loadingAudio 				whiteblock
		{
		background-color: yellow!important;
		animation-name: Blink1;
		animation-duration: 1s;
		/* animation-timing-function: easy; */
		animation-delay: 0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	station.errorAudio 				whiteblock
		{
		background-color: #ecc1be!important;
		}
	/*EDRO station switch event indicator*/
	/*//EDRO station*/

	/*// EDRO.Objects */
	article{padding: 0 0 0 0;}
	/*// EDRO.Objects */

	/*// EDRO.Mobile compatibility */
	@media screen and (max-width:1200px)
		{
		dynablock a
			{
			width:48%;
			height: 100px;	
			margin:1px;
			}
		dynablock overlay
			{
			line-height:100px;
			}
		}
	@media screen and (min-width:1200px)
		{
		dynablock a
			{
			width: 24%;
			height: 200px;
			margin:3px;
			}
		dynablock overlay
			{
			line-height:200px;
			}
		}
	/*// EDRO.Mobile compatibility */

	/*// EDRO.Animation */
	.blink
		{
		animation-name: Blink1;
		animation-duration: 4s;
		/*animation-timing-function: easy;*/
		animation-delay: 0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast
		{
		animation-name: Blink-fast;
		animation-duration: 1s;
		/*animation-timing-function: easy;*/
		animation-delay: 0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast1
		{
		animation-name: Blink-fast;
		animation-duration: 1.6s;
		/*animation-timing-function: easy;*/
		animation-delay: 0.3s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast2
		{
		animation-name: Blink-fast;
		animation-duration: 1.4s;
		/*animation-timing-function: easy;*/
		animation-delay: 0.6s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast3
		{
		animation-name: Blink-fast;
		animation-duration: 1.3s;
		/*animation-timing-function: easy;*/
		animation-delay: 0.8s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast4
		{
		animation-name: Blink-fast;
		animation-duration: 1.2s;
		/*animation-timing-function: easy;*/
		animation-delay: 0.1s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast5
		{
		animation-name: Blink-fast;
		animation-duration: 1.1s;
		/*animation-timing-function: easy;*/
		animation-delay: 0.0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-fast6
		{
		animation-name: Blink-fast;
		animation-duration: 1.5s;
		/*animation-timing-function: easy;*/
		animation-delay: 1.2s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	.blink-medium
		{
		animation-name: Blink-medium;
		animation-duration: 1s;
		/*animation-timing-function: easy;*/
		animation-delay: 0s;
		animation-iteration-count: infinite;
		animation-direction: normal;
		animation-fill-mode: none;
		animation-play-state: running;
		}
	@keyframes Blink1
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	@keyframes Blink-medium
		{
		0% {
		    opacity:1;
		    }
		33% {
		    opacity:0;
		    }
		
		66% {
		    opacity:0;
		    }
		
		100% {
		    opacity:0;
		    }
		}
	@keyframes Blink-fast
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:0;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:0;
		    }
		80% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes Blink-play
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:1;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:1;
		    }
		99% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes hideElement
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	/*// EDRO.Animation */

</style>
';
?>