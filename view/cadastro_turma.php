<?php
require_once('../controller/c_turma.php');

	$turma = new c_turma();

	if (isset($_POST['nome']) && isset($_POST['escola']) && isset($_POST['serie'])) {
	
		$nome = $_POST['nome'];
		$escola = $_POST['escola'];
		$serie = $_POST['serie'];

		$turma->inserir($nome, $escola, $serie);

	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
		
		<title>Horário</title>
		
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
		
		<!-- Plugins -->
		<link rel="stylesheet" href="css/vendors/bootstrap.min.css" />
		<link rel="stylesheet" href="css/fonts/font-awesome.min.css" />
		<link rel="stylesheet" href="css/fonts/ionicons.min.css" />
		
		<!-- Theme style -->
		<link rel="stylesheet" href="css/layout/AdminLTE.min.css" />
		<link rel="stylesheet" href="css/layout/_all-skins.min.css" />
		<link rel="stylesheet" href="css/custoescola.css" >
	</head>
	
	<body class="hold-transition skin-blue sidebar-mini" style="background-color: #222d32;" >
		
		<header class="main-header" >
			
			<!-- Logo -->
			<a href="#" class="logo" > 						<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">H</span> 	<!-- logo for regular state and mobile devices -->
				<span class="logo-lg" >HORÁRIO</span>
			</a>
			
			<nav class="navbar navbar-static-top" >
				
				<!-- Sidebar toggle button -->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
					<span class="sr-only" >Toggle navigation</span>
				</a>
				
				<div class="navbar-custom-menu" >
					
					<ul class="nav navbar-nav" >
						
						<li>
							<a href="#" >admin</a>
						</li>
						
						<li class="dropdown messages-menu" >
							
							<a href="#" >
								<i class="fa fa-sign-out" ></i> 
							</a>
							
						</li>
						
					</ul>
								
				</div>
				
			</nav>
			
		</header>
		
		<!-- Menu Lateral -->
		<aside class="main-sidebar" >
		
		<section class="sidebar" >
			
			<!-- Sidebar menu -->
			<ul class="sidebar-menu" data-widget="tree" >
				
				<!-- Ínicio -->
				<li>
					
					<a href="index.php" >
						<i class="fa fa-home" ></i>
						<span>Ínicio</span>
					</a>
					
				</li>
				
				<!-- Escola -->
				<li class="treeview" >
					
					<a href="#" >
						
						<i class="fa fa-university" ></i> 
						<span>Escola</span>
						<span class="pull-right-container" >
							<i class="fa fa-angle-left" ></i>
						</span>
						
					</a>
					
					<ul class="treeview-menu" >
						
						<li>
							<a href="cadastro_escola.php" >Cadastro</a>
						</li>
						
						<li>
							<a href="listagem_escola.php" >Listagem</a>
						</li>
						
					</ul>
									
				</li>
				
				<!-- Professor -->
				<li class="treeview" >
					
					<a href="#" >
						
						<i class="fa fa-user-circle" ></i>
						<span>Turma</span>
						<span class="pull-right-container" >
							<i class="fa fa-angle-left" ></i>
						</span>
						
					</a>
					
					<ul class="treeview-menu" >
						
						<li>
							<a href="cadastro_turma.php" >Cadastro</a>
						</li>
						
						<li>
							<a href="listagem_turma.php" >Listagem</a>
						</li>
						
					</ul>
					
				</li>
				
				<!-- Usuário -->
				<li class="treeview" >
					
					<a href="#" >
						<i class="fa fa-user" ></i>
						<span>Horário</span>
						<span class="pull-right-container" >
							<i class="fa fa-angle-left" ></i>
						</span>
					</a>
					
					<ul class="treeview-menu" >
						
						<li>
							<a href="cadastro_horario.php" >Cadastro</a>
						</li>
						
						<li>
							<a href="listagem_horario.php" >Listagem</a>
						</li>
						
					</ul>
					
				</li>
				
				<!-- Sair -->
				<li>
					
					<a href="#" >
						<i class="fa fa-sign-out" ></i>
						<span>Sair</span>
					</a>
					
				</li>
				
			</ul>
			
		</section>
		
		</aside>

		<!-- CONTEÚDO -->
		<div class="content-wrapper" >

			<section class="content" >
				<h1>Cadastro de Turma</h1>
				<div class="box box-primary" >
					
					<form th:action="@{/professor/form}" method="POST" >
						
						<div class="box-body" >

							<div class="row">
								<div class="col-md-4">
									<label for="nome">Nome</label>
									<input type="text" name="nome" class="form-control" id="nome" required="required" >
								</div>

								<div class="col-md-4">
									<label for="escola">Escola</label>
									<input type="text" name="escola" class="form-control" id="escola" required="required" >
								</div>

								<div class="col-md-4">
									<label for="serie">Serie</label>
									<input type="text" name="serie" class="form-control" id="serie" required="required" >
								</div>

							</div>

								<button type="submit" name="" class="btn btn-default" >salvar</button>
						</div>

					</form>

				</div>

			</section>

		</div>

		<!-- Plugins -->
		<script src="js/vendors/jquery-3.2.1.min.js" ></script>
		<script src="js/vendors/jquery-ui.min.js" ></script>
		<script src="js/vendors/bootstrap.min.js" ></script>
		
		<script src="js/layout/adminlte.min.js" ></script>
		<script src="js/custoescola.js" ></script>
		
		<!-- INÍCIO FUNÇÕES -->
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>

	</body>
	
</html>