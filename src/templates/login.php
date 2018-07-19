<!DOCTYPE html>
<html>
<head>

	<title>Entrar/Registrar</title>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet" />

	<!--Import materialize.css-->
	<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />

	<link rel="stylesheet" href="css/login-style.css" />

</head>

<body>

	<div class="container">
		<h3>Entrar/Registrar</h3>
		<div class="row">

			<!-- Escolher entre entrar ou registrar -->
			<div class="col s8 offset-s2">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#entrar">Entrar</a></li>
					<li class="tab col s3"><a href="#registrar">Registrar</a></li>
				</ul>
			</div>

			<div class="col s8 offset-s2">
				<?php require 'errors.php'; ?>
			</div>

			<!-- Entrar -->
			<div id="entrar" class="col s12">
				<div class="col s8 offset-s2 z-depth-1" id="panell">

					<form method="post" action="/login" class="form-signin">
						<div class="input-field" id="username">
							<input type="text" id="username" name="username" /><label for="username">Username</label>
						</div>
						<div class="input-field" id="password">
							<input type="password" id="password" name="password" /><label for="password">Password</label>
						</div>
						<div class="right-align">
							<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>

				</div>
			</div>
			<!-- End Entrar -->

			<!-- Registrar -->
			<div id="registrar" class="col s12">
				<div class="col s8 offset-s2 z-depth-1" id="panell">

					<form method="post" action="/register" class="form-signin">
						<div class="input-field" id="username">
							<input type="text" id="username" name="username" /><label for="username">Username</label>
						</div>
						<div class="input-field" id="password">
							<input type="password" id="password" name="password" /><label for="password">Password</label>
						</div>
						<div class="right-align">
							<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>

				</div>
			</div>
			<!-- End Registrar -->
		</div>

	</div>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
