<?php
include '../../conexao/conexao.php';

class conteudo extends conexao{
    
    private $usu_codigo;
    private $usu_nome;
    private $usu_cpf;
    private $usu_email;
    private $usu_telefone;
    private $usu_senha;

    function get usu_codigo() {
        return $this->codigo;
    }

    function get usu_nome() {
        return $this->usu_nome;
    }

    function get usu_cpf() {
        return $this->usu_cpf;
    }

    function get usu_email() {
        return $this->usu_email;
    }

    function get usu_telefone() {
        return $this->usu_|telefone;
    }

    function get usu_senha() {
        return $this->usu_senha;
    }

    function set usu_codigo($usu_codigo) {
        $this->usu_codigo = $usu_codigo;
    }

    function set usu_nome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function set usu-cpf($usu_cpf) {
        $this->usu_cpf = $usu_cpf;
    }

    function set usu_email($curso_id) {
        $this->curso_id = $curso_id;
    }

    function setPeriodo_id($periodo_id) {
        $this->periodo_id = $periodo_id;
    }

    function setDisciplina_id($disciplina_id) {
        $this->disciplina_id = $disciplina_id;
    }

    public function insert($obj){
    	$sql = "INSERT INTO conteudo(titulo,descricao,horario,curso_id,periodo_id,disciplina_id) VALUES (:titulo,:descricao,:horario,:curso_id,:periodo_id,:disciplina_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo',  $obj->titulo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario' , $obj->horario);
        $consulta->bindValue('curso_id' , $obj->curso_id);
        $consulta->bindValue('periodo_id' , $obj->periodo_id);
        $consulta->bindValue('disciplina_id' , $obj->periodo_id);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET titulo = :titulo, descricao = :descricao,horario = :horario, curso_id = :curso_id,periodo_id =:periodo_id, disciplina_id = :disciplina_id WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('titulo', $obj->titulo);
		$consulta->bindValue('descricao', $obj->descricao);
		$consulta->bindValue('horario' , $obj->horario);
		$consulta->bindValue('curso_id', $obj->curso_id);
		$consulta->bindValue('periodo_id' , $obj->periodo_id);
		$consulta->bindValue('disciplina_id' , $obj->disciplina_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM conteudo WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find(){
		$sql = "SELECT * FROM conteudo WHERE id = 8";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM USUARIO";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>