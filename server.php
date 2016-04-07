<?php
class client2 {
	function getInfoMhs() {
		$Mhs->$nim="112221";
		$Mhs->$nama="budi";
		$Mhs->$email="budi@yahu.con";
		
		return $getInfoMhs;		
		}
	}
$server=new SoapServer("mahasiswa.wsdl");
$server->setClass("client2");
$server->handle();
?>	