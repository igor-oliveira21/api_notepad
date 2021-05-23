<?php
include '../../model/usuario.php';

class usuariocontrol{
	function insert($obj){
		$usuario = new usuario();
		return $usuario->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$usu_codigo){
		$usuario = new usuario();
		return $usuario->update($obj,$usu_codigo);
	}

	function delete($usu_codigo){
		$usuario = new usuario();
		return $usuario->delete($usu_codigo);
	}

	function find($usu_codigo){
		$usuario = new usuario();
		return $usuario->find($usu_codigo);
	}

	function findAll(){
		$usuario = new usuario();
		return $usuario->findAll();
	}
}

?>