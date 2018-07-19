<?php

$router->post('/register', function() {

	if (isset($_SESSION['user'])) {
		$_SESSION['errors'][] = "You are already logged in!";
		header('Location: /');
		return;
	}

	$user = R::find('user', 'username = ?', [ $_POST['username'] ]);
	if ($user != NULL) {
		$_SESSION['errors'][] = "This username is already taken!";
		header('Location: /login#registrar');
		return;
	}

	$user = R::dispense('user');

	$user->username = $_POST['username'];

	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	R::store($user);
	$_SESSION['user'] = $user;
	header('Location: /');
});

?>
