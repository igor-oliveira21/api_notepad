<?php
include '../../conexao/conexao.php';

class usuario extends conexao{
    
    private $usu_nome;
    private $usu_cpf;
    private $usu_email;
    private $usu_telefone;
    private $usu_senha;

    function getusu_nome() {
        return $this->usu_nome;
    }

    function getusu_cpf() {
        return $this->usu_cpf;
    }

    function getusu_email() {
        return $this->usu_email;
    }

    function getusu_telefone() {
        return $this->usu_telefone;
    }

    function getusu_senha() {
        return $this->usu_senha;
    }

    function setusu_nome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function setusu_senha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }

    function setusu_telefone($usu_telefone) {
        $this->usu_telefone = $usu_telefone;
    }

    function setusu_cpf($usu_cpf) {
        $this->usu_cpf = $usu_cpf;
    }

    function setusu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    public function insert($obj){

        $sql = "insert into usuario (usu_nome, usu_cpf, usu_email, usu_telefone, usu_senha) values (:usu_nome, :usu_cpf, :usu_email, :usu_telefone, :usu_senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('usu_nome',  $obj->usu_nome);
        $consulta->bindValue('usu_cpf', $obj->usu_cpf);
        $consulta->bindValue('usu_email' , $obj->usu_email);
        $consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        $consulta->bindValue('usu_senha' , $obj->usu_senha);
    	return $consulta->execute();

	}

	public function update($obj,$usu_codigo = null){
		$sql = "UPDATE usuario SET usu_nome = :usu_nome, usu_cpf = :usu_cpf,usu_email = :usu_email, usu_telefone = :usu_telefone,usu_senha =:usu_senha WHERE usu_codigo = :usu_codigo ";
		$consulta = Conexao::prepare($sql);
	    $consulta->bindValue('usu_nome',  $obj->usu_nome);
        $consulta->bindValue('usu_cpf', $obj->usu_cpf);
        $consulta->bindValue('usu_email' , $obj->usu_email);
        $consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        $consulta->bindValue('usu_senha' , $obj->usu_senha);
		$consulta->bindValue('usu_codigo', $usu_codigo);
		return $consulta->execute();
	}

	public function delete($usu_codigo = null){
		$sql =  "DELETE FROM usuario WHERE usu_codigo = :usu_codigo";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('usu_codigo', $usu_codigo);
		$consulta->execute();
	}

	public function find($usu_codigo = null){
		$sql = "SELECT * FROM usuario where usu_codigo = :usu_codigo";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('usu_codigo', $usu_codigo);
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