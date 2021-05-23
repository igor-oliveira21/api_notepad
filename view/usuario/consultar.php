<?php
include '../../control/usuariocontrol.php';
$usuariocontrol = new usuariocontrol();

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$usu_codigo = $obj->usu_codigo;

header('Content-Type: application/json');

$itens = array();

if(!empty($data)){
	foreach($usuariocontrol->find($usu_codigo) as $valor){
		$itens[] = $valor ;
	}
}

echo json_encode($itens);

?>