<?php

$router->get('/login', function() {


	if (isset($_SESSION['user'])) {
		header('Location: /');
		return;
	}

	require __DIR__ . '/../templates/login.php';
});

$router->post('/login', function() {

	$user = R::findOne('user', 'username = ?', [ $_POST['username'] ]);

	if ($user != NULL && password_verify($_POST['password'], $user->password)) {

		$_SESSION['user'] = $user;
		header('Location: /');

		return;

	} else {

		$_SESSION['errors'][] = "Wrong username/password!";
		header('Location: /login');

	}
});

?>
