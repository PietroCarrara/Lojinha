<!DOCTYPE html>
<html>
<head>
	<title>Feed</title>
	<meta charset="UTF-8" />
</head>
<body>

<?php

require_once("conexao.php");

$sql = "select * from texto";
$consulta = mysqli_query($conexao, $sql);

while ($exibirRegistro = mysqli_fetch_array($consulta, MYSQLI_NUM)){
									$titulo= $exibirRegistro[0];
									$corpo= $exibirRegistro[2];
echo "<div>$titulo<br>";								
echo "$corpo</div><br>";
}



?>

</body>
</html>
