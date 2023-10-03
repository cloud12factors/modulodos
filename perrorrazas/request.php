<?php 
$method=$_SERVER['REQUEST_METHOD'] ;

include "conexion.php";

$json= file_get_contents('php://input');
$data=json_decode($json,true);



$path="perrorrazas";

$id=$data['id'];
$raza=$data['raza'];
$collection="perrorraza";




switch($method){

case 'PUT':
        include "update.php";
	break;
case 'GET':
	if($id!="")
		include "select.php";
	else
		include "selectall.php";
	break;
case 'DELETE':
	include "delete.php";
	break;
case 'POST':
	include "insert.php";
	break;
default:
	echo "error";
	break;

}

?>
