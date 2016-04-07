<?php

class UtsKu{

	function getInfoMhs(){
		$re->Mhs = array(
						"nim" => "112221",
						"nama" => "budi",
						"email" => "budi@yahu.con",
			);
		return $re;
		}
	}
	
	
$server = new SoapServer("uts.wsdl");
$server->setClass("UtsKu");
$server->handle();

?>