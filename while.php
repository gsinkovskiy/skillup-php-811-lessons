<?php
header('Content-type: text/plain; charset=utf8');

$r = 2;

while ($r < 100) {
	echo 'R: ' . $r . "\n";
	$r *= 2;
}

echo "--------------\n";

do {
	echo 'R: ' . $r . "\n";
	$r /= 2;
} while ($r > 1);
