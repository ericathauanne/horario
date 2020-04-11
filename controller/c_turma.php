<?php

	require_once("../model/turma.php");
	require_once("../controller/conexao.php");

	class c_turma {

		private $turma;
		
		public function __construct(){
			$this-> turma = new Turma(null, null, null);
		}

		public function inserir($nome, $escola, $serie) {

			$con = new Conexao();

			$this->turma->setNome($nome);
			$this->turma->setEscola($escola);
			$this->turma->setSerie($serie);

			$query = "INSERT INTO turma (nome, escola, serie) VALUES ('".$this->turma->getNome()."','".$this->turma->getEscola()."','".$this->turma->getSerie()."')";
			
			$con->executar($query);
			$con->desconectar();

		}

		public function listar() {
			
			$con = new Conexao();
			
			$query = "SELECT * FROM turma";
			return $con->executar($query);
		}

	}
?>