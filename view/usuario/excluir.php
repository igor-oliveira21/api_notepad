<?php
include '../../control/conteudocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $conteudoControl = new conteudoControl();
 $conteudoControl->delete($id);
 header('Location:listar.php');
}







?>