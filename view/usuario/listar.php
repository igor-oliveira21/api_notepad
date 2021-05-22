<?php
include '../../control/conteudocontrol.php';
$conteudocontrol = new conteudocontrol();

header('Content-Type: application/json');

$itens = array();

foreach($conteudocontrol->findAll() as $valor){
	$itens[] = $valor ;
}

echo json_encode($itens);

?>