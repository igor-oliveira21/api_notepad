<?php
include '../../control/usuariocontrol.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);




if(!empty($data)){	
 $usuarioControl = new usuariocontrol();
 $usuarioControl->insert($obj);
 header('Location:listar.php');
}







?>