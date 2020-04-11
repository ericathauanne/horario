<?php

	require_once("../model/horario.php");
	require_once("../controller/conexao.php");

	class c_horario {

		private $horario;
		
		public function __construct(){
			$this-> horario = new Horario(null, null, null, null, null, null);
		}

		public function inserir($disciplina, $professor, $escola, $turma, $aula, $diadasemana) {
			
			$con = new Conexao();

			$this->horario->setDisciplina($disciplina);
			$this->horario->setProfessor($professor);
			$this->horario->setEscola($escola);
			$this->horario->setTurma($turma);
			$this->horario->setAula($aula);
			$this->horario->setDiaDaSemana($diadasemana);

			$query = "INSERT INTO horario (disciplina, professor, escola, turma, aula, diadasemana) VALUES ('".$this->horario->getDisciplina()."','".$this->horario->getProfessor()."','".$this->horario->getEscola()."', '".$this->horario->getTurma()."', '".$this->horario->getAula()."', '".$this->horario->getDiaDaSemana()."')";
			
			$con->executar($query);
			$con->desconectar();

		}
		
		public function listar() {
			
			$con = new Conexao();
			
			$query = "SELECT * FROM horario";
			return $con->executar($query);
		}

	}
?>