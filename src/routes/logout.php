<?php

$router->any('/logout', function() {

	session_destroy();

	header('Location: /');

});
?>
