<?php
include '../../control/usuariocontrol.php';
$usuariocontrol = new usuariocontrol();

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

header('Content-Type: application/json');

$itens = array();

if(!empty($data)){
	foreach($usuariocontrol->find($id) as $valor){
		$itens[] = $valor ;
	}
}

echo json_encode($itens);

?>