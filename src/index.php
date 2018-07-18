<?php

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require 'rb-mysql.php';

/*
echo $_SERVER['REQUEST_URI'] . '<br>';
*/
// Carregar .env
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$hostname = "127.0.0.1";
$user = "lojinha";
$pass = getenv('MYSQL_PASSWORD');
$db = "lojinha";

R::setup("mysql:host=$hostname;dbname=$db", "$user", "$pass");

/*
$name = str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ");

// Cria um objeto do tipo post.
$post = R::dispense( 'post' );
$post->title = $name;
R::store( $post );

// Procura por todos os posts
$posts = R::find('post');
*/
/*
foreach($posts as $p) {
	echo "$p->title <br>";
}
*/

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    // Home page
    case '/':
        require 'home.php';
        break;
    // About page
    case '/produtos':
        require 'produtos.php';
        break;
}


?>
