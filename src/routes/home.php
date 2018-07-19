<?php

$router->get('/home', function() {
	require __DIR__ . '/../templates/home.php';
});

$router->get('/', function() {
	require __DIR__ . '/../templates/home.php';
});

?>
