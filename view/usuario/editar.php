<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);


$id = $obj->id;


if(!empty($data)){	
 $usuariocontrol = new usuariocontrol();
 $usuariocontrol->update($obj , $id);
 header('Location:listar.php');
}







?>