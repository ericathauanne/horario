<?php
	class Horario{
		private $id;
		private $disciplina;
		private $professor;
		private $escola;
		private $turma;
		private $aula;
		private $diadasemana;

		public function __construct($disciplina, $professor, $escola, $turma, $aula, $diadasemana){
		 	$this-> disciplina = $disciplina;
		 	$this-> professor= $professor;
		 	$this-> escola = $escola;
		 	$this-> turma = $turma;
		 	$this-> aula = $aula;
		 	$this-> diadasemana = $diadasemana;	
		}
		public function getId(){
		 	return $this-> id;
		}
		public function getDisciplina(){
		 	return $this-> disciplina;
		}
		public function getProfessor(){
		 	return $this-> professor;
		}
		public function getEscola(){
		 	return $this-> escola;
		}
		public function getTurma(){
		 	return $this-> turma;
		}
		public function getAula(){
		 	return $this-> aula;
		}
		public function getDiadasemana(){
		 	return $this-> diadasemana;
		}
		public function setId($id){
		 	$this-> id = $id;
		}
		public function setDisciplina($disciplina){
		 	$this-> disciplina = $disciplina;
		}
		public function setProfessor($professor){
		 	$this-> professor = $professor;
		}
		public function setEscola($escola){
		 	$this-> escola = $escola;
		}
		public function setTurma($turma){
		 	$this-> turma= $turma;
		}
		public function setAula($aula){
		 	$this-> aula= $aula;
		}
		public function setDiaDaSemana($diadasemana){
		 	$this-> diadasemana = $diadasemana;
		}
	}
?>