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

// Banco
$hostname = "127.0.0.1";
$user = "lojinha";
$pass = getenv('MYSQL_PASSWORD');
$db = "lojinha";
R::setup("mysql:host=$hostname;dbname=$db", "$user", "$pass");

# Sessão
session_start();

# Definir as rotas
# TODO: Definir essas funções em outros arquivos pra ficar bonito
$router = new RouteCollector();

include 'routes/home.php';
include 'routes/login.php';
include 'routes/register.php';
include 'routes/logout.php';

# Preparar o cara que escolhe a rota certa
$dispatcher = new Dispatcher($router->getData());
# Escolher a rota
$dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

?>
