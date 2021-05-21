<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $usuariocontrol = new usuariocontrol();
 $usuariocontrol->insert($obj);
 header('Location:listar.php');
}







?>