<?php

$a = 5;

if ($a > 3) {
	$b = 'Больше 3';
} else {
	$b = 'Не больше 3';
}

$b = $a > 3 ? 'Больше 3' : 'Не больше 3';
$b = isset($_POST['test']) ? $_POST['test'] : '';
$b = $_POST['test'] ?: '';

