<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<script src="js/funcoes.js"></script>-->
	<title>BONA - WEB AGENDAMENTOS</title>
</head> 
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-danger col-12" >
				<a class="navbar-brand" href="#" style="background-color: #d22e2e;"><img src="img/cruz.png" width="40" height="40" class="d-inline-block align-top" alt="">BONA - WEB AGENDAMENTOS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Cadastrar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consultarClientes.php">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Editar</h5>
					<p>
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar($_GET['id']);
							//print_r($resultado);
						?>
						<form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['nome']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="form-group" style="background-color: #d22e2e;">
								<label for="exampleFormControlSelect1">Idade:</label>
								<select class="form-control" required name="txtIdade" id="txtIdade">
									<option <?php if($resultado[0]['idade'] == "0 a 1"){ echo "selected"; } ?>>0 a 1</option>
									<option <?php if($resultado[0]['idade'] == "2 a 5"){ echo "selected"; } ?>>2 a 5</option>
									<option <?php if($resultado[0]['idade'] == "5 a 12"){ echo "selected"; } ?>>5 a 12</option>
									<option <?php if($resultado[0]['idade'] == "13 a 18"){ echo "selected"; } ?>>13 a 18</option>
									<option <?php if($resultado[0]['idade'] == "19 a 30"){ echo "selected"; } ?>>19 a 30</option>
									<option <?php if($resultado[0]['idade'] == "31 a 59"){ echo "selected"; } ?>>31 a 59</option>
									<option <?php if($resultado[0]['idade'] == ">= 60"){ echo "selected"; } ?>>>= 60</option>									
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato" value="<?php echo $resultado[0]['data_contato']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Motivo</label>
								<textarea class="form-control" name="txtMotivo" id="txtMotivo" rows="3"><?php echo $resultado[0]['motivo']; ?></textarea>
							</div>
							<button type="submit" id="btnEditar" class="btn btn-primary" style="background-color: #d22e2e;">Editar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
