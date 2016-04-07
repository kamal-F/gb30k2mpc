<?php 

class MyUts{
	function getInfoMhs() {
		$re->Mhs = array(
					array(
						"nim"=>"112221",
						"nama"=>"budi",
						"email"=>"budi@yahu.con",
		},
	};						
		return;
	}
}

$server = new SoapServer("utsfirman.wsdl");
$server->setClass("MyUts");
$server->handle();

?>


			