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
        return $this->usu_codigo;
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
        return $this->usu_telefone;
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

    function set usu_cpf($usu_cpf) {
        $this->usu_cpf = $usu_cpf;
    }

    function set usu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    function set usu_telefone($usu_telefne) {
        $this->usu_telefone = $usu_telefone;
    }
 
    function setusu_senha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }

    public function insert($obj){
    	$sql = "INSERT INTO usuario(usu_nome, usu_cpf, usu_email,usu_telefone,usu_senha) VALUES (:usu_nome,:usu_cpf,:usu_email,:usu_telefone,:usu_senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('usu_nome',  $obj->usu_nome);
        $consulta->bindValue('usu_cpf', $obj->usu_cpf);
        $consulta->bindValue('usu_email' , $obj->usu_email);
        $consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        $consulta->bindValue('usu_senha' , $obj->usu_senha);
       	return $consulta->execute();

	}

	public function update($usu_codigo,$id = usu_codigo){
		$sql = "UPDATE conteudo SET usu_nome= :usu_nome, usu_cpf = :usu_cpf,usu_email = :usu_email, usu_telefone = :usu_telefone,usu_senha =:usu_senha WHERE usu_codigo = :usu_codigo ";
		$consulta = Conexao::prepare($sql);
		$consulta = Conexao::prepare($sql);
        	$consulta->bindValue('usu_nome',  $obj->usu_nome);
        	$consulta->bindValue('usu_cpf', $obj->usu_cpf);
        	$consulta->bindValue('usu_email' , $obj->usu_email);
        	$consulta->bindValue('usu_telefone' , $obj->usu_telefone);
        	$consulta->bindValue('usu_senha' , $obj->usu_senha);
		$consulta->bindValue('usu_codigo', $usu_codigo);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM usuario WHERE usu_codigo = :usu_codigo";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find(){
		$sql = "SELECT * FROM conteudo WHERE id = 8";
		$consulta = Conexao::prepare($sql);one
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