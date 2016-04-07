<?php
class getInfoMhs {
	function getInfoMhs() {
		$Mhs->$nim="112221";
		$Mhs->$nama="budi";
		$Mhs->$email="budi@yahu.con";
		
		return $getInfoMhs;		
		}
	}
$server=new SoapServer("mahasiswa.wsdl");
$server->addFunction ("getInfoMhs");
$server->setClass("getInfoMhs");
$server->handle();
?>	