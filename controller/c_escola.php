<?php 
	
	require_once("../model/escola.php");
	require_once("../controller/conexao.php");
	
	class c_escola {

		private $escola;
		
		public function __construct(){
			$this-> escola = new Escola(null, null);
		}

		public function inserir($nome, $municipio) {
	
			$con = new Conexao();

			$this->escola->setNome($nome);
			$this->escola->setMunicipio($municipio);

			$query = "INSERT INTO escola(nome, municipio) VALUES ('".$this->escola->getNome()."','".$this->escola->getMunicipio()."')";
			
			$con->executar($query);
			$con->desconectar();

		}

		public function listar() {
			
			$con = new Conexao();
			
			$query = "SELECT * FROM escola";
			return $con->executar($query);
		}

	}

?>