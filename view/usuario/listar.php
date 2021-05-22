<?php
include '../../control/usuariocontrol.php';
$usuariocontrol = new usuariocontrol();

header('Content-Type: application/json');

$itens = array();

foreach($usuariocontrol->findAll() as $valor){
	$itens[] = $valor ;
}

echo json_encode($itens);

?>