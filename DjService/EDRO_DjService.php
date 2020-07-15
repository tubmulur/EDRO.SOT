#!/usr/bin/php
<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
set_time_limit(0);
$objEDRO_DjService = new EDRO_DjService();
class EDRO_DjService
	{
	private		$lnSock;
	protected	$arrReport;
	public function __construct()
		{
		//$this->_CreateListen_lnSock();
		$this->_SocketListen_strAudioBuffer();
		$this->_strAudioBuffer_Write_TransportS2S();
		$this->_Report();
		}
	private function _CreateListen_lnSock()
		{
		//$intUDP		=getprotobyname('udp');
		$intUDP			= 1;
		$strAddress		='192.168.1.198';
		$intPort		=898;
		$intSockListen		=3;
		//AF_INET(tcp, udp)
		//$this->lnSOCK	=socket_create(AF_INET, SOCK_RAW, $intUDP);
		$this->lnSOCK	=socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		$bIzBinded	=socket_bind($this->lnSOCK, $strAddress, $intPort);
		$bIzLIstening	=socket_listen($this->lnSOCK, $intSockListen);
		$this->lnSOCK	=socket_accept($this->lnSOCK);
		
		//socket_set_nonblock($lnSOCK);
		//var_dump($arrOption=socket_get_option($lnSOCK, SOL_SOCKET, SO_DEBUG));
		//print_r($arrOption);
		/*if($this->lnSOCK)
			{
			echo 'socket_create: OK'."\n";
			}
		else
			{
			$this->arrReport['socket_create']='Failed';
			}
		if($bIzBinded)
			{
			echo 'socket_bind: OK'."\n";
			}
		else
			{
			$this->arrReport['socket_bind']=array('Error','Failed');
			}
		if($bIsConnected)
			{
			echo 'socket_connected: OK'."\n";
			}
		else
			{
			$this->arrReport['socket_connect']=array('Error','Failed');
			}
		if($bIzLIstening)
			{
			echo 'socket_listen: OK'."\n";
			}
		else
			{
			$this->arrReport['socket_listen']=array('Error','Failed');
			}*/
		}
	private function _SocketListen_strAudioBuffer()
		{
		while(true)
			{
			$this->_CreateListen_lnSock();
			echo $_strBuf=socket_read($this->lnSOCK, 256, PHP_NORMAL_READ);
			echo "\n";
			if(!empty($_strBuf))
				{
				echo '!empty($_strBuf)';
				$HTML_DJP=file_get_contents('/home/chekmarev/Job/cloudrepublic.ru/compile.djs')."\r\n";
				$HTML_DJP_LEN=strlen($HTML_DJP);
				echo socket_write($this->lnSOCK, $HTML_DJP, $HTML_DJP_LEN);
				echo "\n";
				//socket_close($this->lnSOCK);
				}
			}
		}
	private function _strAudioBuffer_Write_TransportS2S()
		{
		}
	private function _Report()
		{
		}
	}
?>