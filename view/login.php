<?php 
    require_once('../controller/c_login.php');

    $usuario = new c_login();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
<body>
<div class="login">
	<h1>Login</h1>
	    <form name="login"action="verificar.php" method="POST">
	    		<p>Email</p>
		        <input type="text" name="" placeholder="Email">
		        <p>Senha</p>
		        <input type="password" name=""placeholder="Senha">
		        <input type="submit" name=""value="Login">
		        <a href="cadastro_usuario.php">Cadrastre-se</a>
	    </form>
 </div>
</body>
</html>