<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
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
					<h5 class="card-title">Cadastrar agendamentos</h5>
					<p>
						<form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Idade:</label>
								<select class="form-control" required id="txtIdade">
									<option>0 a 1</option>
									<option>2 a 5</option>
									<option>5 a 12</option>
									<option>13 a 18</option>
									<option>19 a 30</option>
									<option>31 a 59</option>
									<option>>= 60</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Motivo do Agendamento:</label>
								<textarea class="form-control" name="txtMotivo" id="txtMotivo" rows="3"></textarea>
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary" style="background-color: #d22e2e;">Cadastrar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
