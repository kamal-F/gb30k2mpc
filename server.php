<?php

class Mahasiswa{
	function getInfoMhs(){
		$re->Mhs = array(
						array(
							"nip" => "112221", 
							"nama" => "budi",
							"email" => "budi@yahu.con"),
							
						array(
							"nip" => "112222", 
							"nama" => "iwan",
							"email" => "iwan@yahu.con")
						array(
							"nip" => "112223", 
							"nama" => "wati",
							"email" => "wati@yahu.con")
						array(
							"nip" => "112224", 
							"nama" => "susi",
							"email" => "susi@yahu.con")
					);
		return $re;
	}	
}
$server = new SoapServer("uts.wsdl");
$server->setClass("Mahasiswa");
$server->handle();

?>