<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

$arr = [
	'key1' => 'val1',
	'key2' => 'val2',
];

if ($arr['key3']) {
	echo 'Нашли!';
} else {
	echo 'Не нашли!';
}


