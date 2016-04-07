<?php

$wsdl = "http://localhost:1234/gb30k2mpc/gb30k2mpc/klien_xml.wsdl";
$client2 = new SoapClient ( $wsdl, array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=>1) );

class dsagara {
function getInfoMhs() {
	$Mhs->nim='112221';
	$Mhs->nama='Budi';
	$Mhs->email='budi@yahu.con';
	
	return $Mhs;
		}
	}
	
	$server = new SoapServer("klien_xml.wsdl");
	$server->setClass("Mhs");
	$server->handle();
	
	?>