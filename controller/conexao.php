<?php 
	
	class Conexao {

		private $servidor = "localhost";
		private $usuario = "root";
		private $senha = "";
		private $banco = "horario";
		
		private $con;

		public function __construct(){
			$this -> conectar();
		}
		
		public function conectar(){
			$this -> con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco);
		}

		public function executar($query){
			$sql = mysqli_query($this->con, $query);
			return $sql;
		}
		
		public function desconectar(){
			mysqli_close($this->con);
		}

	}

?>