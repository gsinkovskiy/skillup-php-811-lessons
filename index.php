<?php

$a = 1;
$b = 1;

echo '<br>';

echo 'A: ' . $a++ . '<br>';
// echo 'A: ' . $a . '<br>'; $a = $a + 1;


echo 'B: ' . ++$b . '<br>';
// $b = $b + 1; echo 'B: ' . $b . '<br>';

echo '======= после инкремента =======<br>';

echo 'A: ' . $a . '<br>';
echo 'B: ' . $b . '<br>';

$b = $b + 3;
$b += 3;


