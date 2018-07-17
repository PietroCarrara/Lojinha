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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'rb-mysql.php';

echo $_SERVER['REQUEST_URI'] . '<br>';

$hostname = "127.0.0.1";
$user = "lojinha";
$pass = "password";
$db = "test";

R::setup("mysql:host=$hostname;dbname=$db", "$user", "$pass");

$name = str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ");

// Cria um objeto do tipo post.
$post = R::dispense( 'post' );
$post->title = $name;
R::store( $post );

// Procura por todos os posts
$posts = R::find('post');

foreach($posts as $p) {
	echo "$p->title <br>";
}

?>
