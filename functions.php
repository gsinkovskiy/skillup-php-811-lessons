<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DATA_FILE_NAME', 'users.txt');

function checkEmpty($fieldName, $errorMessage) {
	global $values, $errors;

	if (empty($_POST[$fieldName])) {
		$errors[$fieldName] = $errorMessage;
	} else {
		$values[$fieldName] = $_POST[$fieldName];
	}
}

function saveUser($values) {
	$file = fopen(DATA_FILE_NAME, 'a');
	fputs($file, implode("\t", $values) . "\n");
	fclose($file);
}
