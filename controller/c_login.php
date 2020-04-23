<?php
require_once("../model/usuario.php");
require_once("../controller/conexao.php");
	class c_login{
		private $usuario;

			public function __construct(){
				$this-> usuario = new usuario (null,null,null,null);
			}

			public function inserir($nome, $email, $senha){
				
				$con = new Conexao();
				
				$this->usuario->setNome($nome);
				$this->usuario->setEmail($email);
				$this->usuario->setSenha($senha);
				
				$query = "INSERT INTO usuario(nome, email, senha) VALUES ('".$this->usuario->getNome()."','".$this->usuario->getEmail()."','".$this->usuario->getSenha()."')";

				$con->executar($query);
				$con->desconectar();
			}
			public function deletar($id){

				$con = new Conexao();
				$query = "DELETE FROM login WHERE id = $id";
				
				$sql = $con->executar($query);
				$con->desconectar();

			}

			public function atualizar($id, $nome, $email, $senha) {
				
				$con = new Conexao();

				$query = "UPDATE usuario SET nome = ('$nome') , SET email = ('$email'), SET senha = ('$senha'), WHERE id = ('$id')";
						
				$con->executar($query);
				return $con;
				$con->desconectar();
					echo'';

			}
}

?>
