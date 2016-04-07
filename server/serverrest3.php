<?php

// This is the API, 2 possibilities: show the app list or show a specific app by id.
// This would normally be pulled from a database but for demo purposes, I will be hardcoding the return values.
// https://trinitytuts.com/build-first-web-service-php/
error_reporting(0);

function pid ($id) {

  if($id = "1") {
  error_reporting(0);
    $id = "Yang didapat 1";
  } else {
    $id = "tidak didapat";
  }
  return $id;

}



$possible_url = array("abc", "get_app","mhs","mhs1","pid","data_mhs",'id');

$id=$_GET['id'];

if (isset($_GET["id"]) && in_array($_GET["id"], $possible_url))
{
  switch ($_GET["id"])
    {
      case "id";
      if (isset ($_GET["id"]) && ($_GET["nama"]) && ($_GET["nim"]))
        $value = pid ($_GET["id"], $_GET["nama"], $_GET["nim"]);
      break;

       } 
}


// kamal
if($_SERVER['REQUEST_METHOD'] == "POST"){

  // TODO: gunakan authentication 
  //curl -i  -H "Accept:application/json" -H "Content-Type:application/json" -XPOST "http://localhost/latihan/wsphpserver/api.php/" -d '{"kode": "x2", "nama": "termos","deskripsi":"barang bagus","id_kantor":"10"}'
  //$au = $_SERVER['PHP_AUTH_USER'];
  $json = file_get_contents('php://input');
  $obj = json_decode($json);
  $obj=$_GET['nama'];
  $value = "berhasil diinput ".$obj;
}

if($_SERVER['REQUEST_METHOD'] == "PUT"){
  $json = file_get_contents('php://input');
  $obj = json_decode($json);  
  $id= $_SERVER['HTTP_ID'];
  $id=$_GET['id'];
  $obj=$_GET['nama'];
  $value = "berhasil diupdate ".$id." ".$obj;
}

if($_SERVER['REQUEST_METHOD'] == "DELETE"){
  $id= $_SERVER['HTTP_ID']; 
  $id=$_GET['id'];
  $value = "dihapus ". $id;
  
}

header('Content-type: application/json');
//return JSON array
exit(json_encode($value));
?>
