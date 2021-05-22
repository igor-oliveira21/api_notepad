<?php
include '../../control/conteudocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $conteudocontrol = new conteudocontrol();
 $conteudocontrol->update($obj , $id);
 header('Location:listar.php');
}







?>