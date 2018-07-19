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

		<h1>Home</h1>

		<?php if (isset($_SESSION['user'])): ?>
			<span>Hello, <?=$_SESSION['user']->username?>!</span>
		<?php endif ?>

		<ul>
			<?php if (!isset($_SESSION['user'])): ?>
				<li><a href="/login" >Login</a></li>
				<li><a href="/register" >Registrar</a></li>
			<?php else: ?>
				<li><a href="/logout" >Logout</a></li>
			<?php endif ?>
		</ul>

	</div>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
