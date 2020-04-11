<?php 

	class Turma{
		
		private $id;
		private $nome;
		private $escola;
		private $serie;


		public function __construct($nome, $escola,$serie){
		 	$this-> nome = $nome;
		 	$this-> escola = $escola;
		 	$this-> serie = $serie;
		}
		
		public function getId(){
		 	return $this-> id;
		}

		public function getNome(){
		 	return $this-> nome;
		}

		public function getEscola(){
		 	return $this-> escola;
		}
		public function getSerie(){
		 	return $this-> serie;
		}

		public function setId($id){
		 	$this-> id = $id;
		}

		public function setNome($nome){
		 	$this-> nome = $nome;
		}

		public function setEscola($escola){
		 	$this-> escola = $escola;
		}

		public function setSerie($serie){
		 	$this-> serie = $serie;
		}
	
	}

 ?>