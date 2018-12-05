<?php

header('Content-type: text/plain; charset=utf8');

for ($i = 0; $i < 10; $i++) {
	if ($i == 5) {
		continue;
	}

	echo 'I: ' . $i . "\n";
}

$r = 2;

for (;$r < 100;) {
	echo 'R: ' . $r . "\n";
	$r *= 2;
}

