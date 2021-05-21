<?php
include '../../model/conteudo.php';

class conteudocontrol{
	function insert($obj){
		$conteudo = new Conteudo();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Conteudo();
		return $conteudo->update($obj,$id);
	}

	function delete($id){
		$conteudo = new Conteudo();
		return $conteudo->delete($id);
	}

	function find(){
		$conteudo = new Conteudo();
		return $conteudo->find();
	}

	function findAll(){
		$conteudo = new Conteudo();
		return $conteudo->findAll();
	}
}

?>