<?php

class Uts{
	function getInfoMhs() {
		$re->Mhs = array(
					array(
						"nim" => "112221",
						"nama" => "Budi",
						"email" => "budi@yahu.con",
					),
				);
	return $re;
	}
}
	
$server = new SoapServer("uts.wsdl");
$server->setClass("Uts");
$server->handle();

?>
