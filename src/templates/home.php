<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lojinha</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet" />

	<!--Import materialize.css-->
	<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />

</head>

<body>

	<nav>
		<div class="nav-wrapper">
			<a href="/" class="brand-logo">Lojinha</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="/sacola">Sacola</a></li>
				<li>
					<?php if (isset($_SESSION['user'])): ?>
						<span>Hello, <?=$_SESSION['user']->username?>!</span>
					<?php endif ?>
				</li>

				<ul>
					<?php if (!isset($_SESSION['user'])): ?>
						<li><a href="/login" >Login</a></li>
						<li><a href="/register" >Registrar</a></li>
					<?php else: ?>
						<li><a href="/logout" >Logout</a></li>
					<?php endif ?>
				</ul>
			</ul>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div>
				<form>
					<div class="input-field" id="search">
						<input type="text" id="search" name="search" />
						<label for="search"><i class="material-icons">search</i></label>
					</div>
				</form>
			</div>
		</div>

		<div class="row">

			<!-- Isso é o que vai iterar -->
			<div class="col s3">
				<div class="card">
					<div class="card-image">
						<img src="produtos/miniatura1.png">
						<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<span class="card-title">$product_name</span>
						<p>Olá, eu valho R$ $product_price e se tu apertar no FAB eu iriei pro seu carrinho :) </p>
					</div>
				</div>
			</div>
			<!-- End of iteração -->
		</div>
	</div>


	<!--Import jQuery before materialize.js-->
	<script type="text/javascript"
	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script
	src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
