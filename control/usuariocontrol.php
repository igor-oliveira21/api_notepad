<?php
include '../../model/usuariocontrol.php';

class usuariocontrol{
	function insert($obj){
		$usuario = new usuario();
		return $usuario->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$usuario = new usuario();
		return $usuario->update($obj,$id);
	}

	function delete($id){
		$usuario = new usuario();
		return $usuario->delete($id);
	}

	function find(){
		$usuario = new usuario();
		return $usuario->find();
	}

	function findAll(){
		$usuario = new usuario();
		return $usuario->findAll();
	}
}

?>