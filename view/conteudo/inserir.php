<?php
include '../../control/conteudocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $conteudoControl = new conteudocontrol();
 $conteudoControl->insert($obj);
 header('Location:listar.php');
}







?>