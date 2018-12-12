<?php

require 'functions.php';

$values = [
	'name' => '',
	'email' => '',
	'password' => '',
	'subscribe' => 0,
];
$userAdded = false;

if (isset($_POST['name'])) {
	$errors = [];

	checkEmpty('name', 'Введите имя');
	checkEmpty('email', 'Введите email');
	checkEmpty('password', 'Введите пароль');

	if (empty($errors['email']) && strpos($values['email'], '@') === false) {
		$errors['email'] = 'Email должен содержать @';
	}

	if (!empty($_POST['subscribe'])) {
		$values['subscribe'] = 1;
	}

	if (!$errors) {
		saveUser($values);
		$userAdded = true;
	}
}

include 'form.html.php';
