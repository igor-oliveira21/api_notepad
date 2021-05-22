<?php
include '../../conexao/conexao.php';

class conteudo extends conexao{
    
    private $codigo;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $senha;

    function getcodigo() {
        return $this->usu_codigo;
    }

    function getnome() {
        return $this->usu_nome;
    }

    function getcpf() {
        return $this->usu_cpf;
    }

    function getemail() {
        return $this->usu_email;
    }

    function gettelefone() {
        return $this->usu_telefne;
    }

    function getsenha() {
        return $this->usu_senha;
    }

    function setcodigo($usu_codigo) {
        $this->usu_codigo = $usu_codigo;
    }

    function setnome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function setcpf($usu_cpf) {
        $this->usu_cpf = $usu_cpf;
    }

    function setemail($usu_email) {
        $this->usu_email = $usu_email;
    }

    function settelefone($usu_telefone) {
        $this->usu_telefone = $usu_telefone;
    }

    function setsenha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }

    public function insert($obj){
    	$sql = "INSERT INTO usuario(usu_nome, usu_cpf, usu_email, usu_telefone, usu_senha) VALUES (:usu_nome,:usu_cpf,:usu_email,:usu_telefone,:usu_senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('usu_nome',  $obj->nome);
        $consulta->bindValue('usu_cpf', $obj->cpf);
        $consulta->bindValue('usu_email' , $obj->email);
        $consulta->bindValue('usu_telefone' , $obj->telefone);
        $consulta->bindValue('usu_senha' , $obj->senha);
        return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET noms = :usu_nome, cpf = :usu_cpf,email = :usu_email, telefone = :usu_telefone,senha =:usu_senha WHERE codigo = :usu_codigo ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('usu_nome', $obj->nome);
		$consulta->bindValue('usu_cpf', $obj->cpf);
		$consulta->bindValue('usu_email' , $obj->email);
		$consulta->bindValue('usu_telefone', $obj->telefone);
		$consulta->bindValue('usu_senha' , $obj->senha);
		$consulta->bindValue('usu_codigo', $codigo);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM conteudo WHERE codigo = :usu_codigo";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('usu_codigo',$codigo);
		$consulta->execute();
	}

	public function find(){
		$sql = "SELECT * FROM conteudo WHERE id = 8";
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