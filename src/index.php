<?php

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require 'rb-mysql.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

// Carregar .env
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$hostname = "127.0.0.1";
$user = "lojinha";
$pass = getenv('MYSQL_PASSWORD');
$db = "lojinha";
R::setup("mysql:host=$hostname;dbname=$db", "$user", "$pass");

# Definir as rotas
# TODO: Definir essas funções em outros arquivos pra ficar bonito
$collector = new RouteCollector();
$collector->any('/', function(){
	echo 'test 1';
});
$collector->any('/products', function(){
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
});
$collector->any('/items/{id}', function($id){
	echo "test item: $id";
});

# Preparar o cara que escolhe a rota certa
$dispatcher = new Dispatcher($collector->getData());
# Escolher a rota
$dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

?>
