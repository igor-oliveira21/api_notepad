<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $usuarioControl = new usuariocontrol();
 $usuarioControl->delete($id);
 header('Location:listar.php');
}







?>