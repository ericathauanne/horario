<?php 

	class Escola {
		
		private $id;
		private $nome;
		private $municipio;

		public function __construct($nome, $municipio){
		 	$this-> nome = $nome;
		 	$this-> municipio = $municipio;
		}
		
		public function getId(){
		 	return $this-> id;
		}

		public function getNome(){
		 	return $this-> nome;
		}

		public function getMunicipio(){
		 	return $this-> municipio;
		}

		public function setId($id){
		 	$this-> id = $id;
		}

		public function setNome($nome){
		 	$this-> nome = $nome;
		}

		public function setMunicipio($municipio){
		 	$this-> municipio = $municipio;
		}
	
	}

 ?>