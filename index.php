<<<<<<< HEAD
 
asdfasfd
=======
<?php
/**
 * A home de um novo começo
 *
 * @package index
 * @author pietro <pietro@the-arch>
 * @version 0.1
 * @copyright (C) 2018 pietro <pietro@the-arch>
 * @license MIT
 */

// require_once __DIR__ . '/vendor/autoload.php';

$hostname = "127.0.0.1";
$user = "lojinha";
$pass = "password";
$db = "test";
$conexao = new mysqli($hostname,$user,$pass,$db);

echo $conexao->error;
echo $conexao->connect_error;

echo '<br><br>';

$result = $conexao->query('SELECT * FROM users');

while ($row = $result->fetch_object()){
	foreach($row as $k => $v) {
		echo "$k: $v <br>";
	}
}

?>
>>>>>>> 74a45d96b3d793eeb19e8cc1bcd84a49837ad3a5
