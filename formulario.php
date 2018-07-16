<?php

require_once("conexao.php");

$titulo=$_POST['titulo'];
$corpo=$_POST['corpo'];


$sql = "insert into texto (titulo, corpo) values ('$titulo', '$corpo')";
$salvar = mysqli_query($conexao,$sql);

header('Location: formulario.html');

?>