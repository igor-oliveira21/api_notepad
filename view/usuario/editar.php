<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$usu_codigo = $obj->usu_codigo;


if(!empty($data)){	
 $usuariocontrol = new usuariocontrol();
 $usuariocontrol->update($obj , $usu_codigo);
 header('Location:listar.php');
}







?>