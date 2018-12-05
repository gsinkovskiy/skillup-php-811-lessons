<?php

$salary = [
	'Иван' => 3000,
	'Виктор' => 2000,
	'Светлана' => 2500,
];

$dir = 'asc';

if (isset($_GET['dir']) && $_GET['dir'] == 'desc') {
	$dir = 'desc';
}

if (isset($_GET['sort'])) {
	switch ($_GET['sort']) {
		case 'name':
			if ($dir == 'asc') {
				ksort($salary);
			} else {
				krsort($salary);
			}
		break;
		case 'salary':
			if ($dir == 'asc') {
				asort($salary);
			} else {
				arsort($salary);
			}
		break;
	}
}

include 'salary.html.php';

