<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	//$id= $_SERVER['HTTP_ID'];	
  $json = file_get_contents('php://input');
  $id = $_GET['id'];
	$value = "didapatkan " .$id;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $json = file_get_contents('php://input');
	$obj = json_decode($json);
	$value =  "berhasil diinput ".$obj->{'nama'};
}

if($_SERVER['REQUEST_METHOD'] == "PUT"){
	$json = file_get_contents('php://input');
	$obj = json_decode($json);	
	//$id= $_SERVER['HTTP_ID'];
	$value = "berhasil diupdate ".$obj->{'nama'};
}

if($_SERVER['REQUEST_METHOD'] == "DELETE"){
	//$id= $_SERVER['HTTP_ID'];	
	$value = "dihapus ";
	
}

header('Content-type: application/json');
//return JSON array
exit(json_encode($value));
?>
