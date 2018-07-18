<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lojinha</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<!-- Navbar -->
	<?php
	require 'navbar.html';
	?>
	<!-- End Navbar -->

	<!-- Imagem grande que chama atenção -->
	<header class="full header valign-wrapper">
		<div class="container valign">
			<div class="row">
				<div class="col s12 m6">
					<figure>
						<img src="assets/img/header.png"  alt="Header" class="responsive-img center-box">
					</figure>
				</div>
				<div class="col s12 m6">
					<h5 class="tittles center-align">Lojinha Doki Doki</h5>
					<p class="flow-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing. 
					</p>
				</div>
			</div>
		</div>
	</header>
	<!-- End Imagem grande que chama atenção -->

	<!-- Três cards com alguns produtos de destaque -->
	<section class="full new-prod">
		<h5 class="tittles center-align">Lorem ipsum dolor sit amet</h5>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="assets/img/header.png" >
							<figcaption class="card-title">Card Title</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt.
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>	
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="assets/img/header.png" >
							<figcaption class="card-title">Card Title</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt.
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="assets/img/header.png" >
							<figcaption class="card-title">Card Title</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt.
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Três cards com alguns produtos de destaque -->

	<!-- Formas de pagamento para encher linguiça -->
	<section class="full promo">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h5 class="tittles center-align">Formas de Pagamento</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quos dolore modi officiis eius voluptas consequatur facilis, praesentium aspernatur! Ipsum qui ratione sequi veniam facilis quaerat sit porro consectetur itaque!
					</p>
				</div>
				<div class="col s12 m4">
					<p class="center-align">
						<i class="zmdi zmdi-card-giftcard zmdi-hc-5x"></i>
					</p>
					<p class="center-align flow-text">Lorem ipsum dolor</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="col s12 m4">
					<p class="center-align">
						<i class="zmdi zmdi-card zmdi-hc-5x"></i>
					</p>
					<p class="center-align flow-text">Lorem ipsum dolor</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="col s12 m4">
					<p class="center-align">
						<i class="zmdi zmdi-money zmdi-hc-5x"></i>
					</p>
					<p class="center-align flow-text">Lorem ipsum dolor</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
		</div>	
	</section>
	<!-- Formas de pagamento para encher linguiça -->

	<!-- Footer -->
	<?php
	require 'footer.html';
	?>
	<!-- End Footer -->


	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/materialize.min.js" ></script>
	<script src="js/main.js" ></script>
</body>
</html>