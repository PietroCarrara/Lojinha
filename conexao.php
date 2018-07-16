<?php
	$hostname = "localhost";
	$user = "gabriela";
	$password = "gabriela";
	$database = "versatilizando";
	$conexao = mysqli_connect($hostname,$user,$password,$database);
	$salvar = mysqli_set_charset($conexao,"UTF8");

	if(!$conexao){
		echo "Falha na conexão";
	}
?>