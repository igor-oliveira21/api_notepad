<?php
include '../../conexao/conexao.php';

class usuario extends conexao{
    
    private $titulo;
    private $descricao;
    private $horario;
    private $curso_id;
    private $periodo_id;
    private $disciplina_id;

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getHorario() {
        return $this->horario;
    }

    function getCurso_id() {
        return $this->curso_id;
    }

    function getPeriodo_id() {
        return $this->periodo_id;
    }

    function getDisciplina_id() {
        return $this->disciplina_id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    function setPeriodo_id($periodo_id) {
        $this->periodo_id = $periodo_id;
    }

    function setDisciplina_id($disciplina_id) {
        $this->disciplina_id = $disciplina_id;
    }

    public function insert($obj){
    	$sql = "INSERT INTO usuario(usu_nome,usu_cpf,usu_email,usu_telefone,usu_senha) VALUES (:usu_nome,:usu_cpf,:usu_email,:usu_telefone,:usu_senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('usu_nome',  $obj->usu_nome);
        $consulta->bindValue('usu_cpf', $obj->usu_cpf);
        $consulta->bindValue('usu_email' , $obj->usu_email);
        $consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        $consulta->bindValue('usu_senha' , $obj->usu_senha);
      	return $consulta->execute();

	}

	public function update($obj,$id = null){
	$sql = "UPDATE usuario SET usu_nome = :usu_nome, usu_cpf = :usu_cpf,usu_email = :usu_email, usu_telefone = :usu_telefone,usu_senha=:usu_senha WHERE usu_codigo = :usu_codigo ";
	$consulta = Conexao::prepare($sql);
       	$consulta->bindValue('usu_nome',  $obj->usu_nome);
        $consulta->bindValue('usu_cpf', $obj->usu_cpf);
        $consulta->bindValue('usu_email' , $obj->usu_email);
        $consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        $consulta->bindValue('usu_senha' , $obj->usu_senha);
	return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM usuario WHERE usu_codigo = :usu_codigo";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find(){
		$sql = "SELECT * FROM usuario WHERE id = 8";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM usuario";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>