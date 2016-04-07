<?php
//Perhatikan alamat yang dituju oleh klien
//SoapClient, http://localhost:8064/uts/gb30k2mpc?wsdl

 $file='uts.wsdl';
 if(isset($_GET["wsdl"])) readfile($file); 
?>