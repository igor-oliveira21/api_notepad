<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$usu_codigo = $obj->usu_codigo;


if(!empty($data)){	
 $usuarioControl = new usuarioControl();
 $usuarioControl->delete($usu_codigo);
 header('Location:listar.php');
}







?>