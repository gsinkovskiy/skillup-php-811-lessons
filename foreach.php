<?php
header('Content-type: text/plain; charset=utf8');

$salary = [
	'Иван' => 3000,
	'Виктор' => 2000,
	'Светлана' => 2500,
];

foreach ($salary as $name => $value) {
	echo $name . ' получает ' . $value . "\n";
}

echo "-------------------\n";

$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

foreach ($a as $item) {
	echo 'День: ' . $item . "\n";
//	echo "День: $item\n";
}

