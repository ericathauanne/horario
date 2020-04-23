<?php 
    require_once('../controller/c_login.php');

    $usuario = new c_login();

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $usuario->inserir($nome, $email, $senha);
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="login">
	<h1>Cadastre se</h1>
	<form method="POST" action="login.php">
		<p>Nome</p>
		<input type="text" name="" placeholder="Nome" >
	    <p>Email</p>
		<input type="text" name="" placeholder="Email" >
		<p>Senha</p>
		<input type="password" name=""placeholder="Senha" >
		<input type="submit" name=""value="Cadastar">
	</form>
 </div>
</body>
</html>