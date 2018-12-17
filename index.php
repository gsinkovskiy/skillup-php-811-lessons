<?php

use Data\User;
use Data\Worker as Work;

header('Content-Type: text/plain; charset=utf-8');

function classLoader($class) {
	$class = substr($class, 5);
	$filename = __DIR__ . '/classes/' . $class . '.php';
	require $filename;
}

spl_autoload_register('classLoader');

$user = new User('Коля', new DateTime('1997-03-08'));
$user2 = new User('Вася', new DateTime('1994-08-20'));

echo 'Имя: ' . $user->getName() . "\n";
echo 'Возраст: ' . $user->getAge() . "\n";
echo $user->aboutMe() . "\n";

echo 'Имя2: ' . $user2->getName() . "\n";
echo 'Возраст2: ' . $user2->getAge() . "\n";
echo $user2->aboutMe() . "\n";

$user3 = new User();
echo 'Имя3: ' . $user3->getName() . "\n";
echo 'Возраст3: ' . $user3->getAge() . "\n";
echo $user3->aboutMe() . "\n";

$worker1 = new Work('Иван', new DateTime('1996-07-11'));
$worker1->setSalary(10000)->setName('Сергей');
echo 'Имя w1: ' . $worker1->getName() . "\n";
echo 'Возраст w1: ' . $worker1->getAge() . "\n";
echo $worker1->aboutMe() . "\n";

echo Work::whoAmI();
Work::$temp = 'test';

echo Work::$temp;

$worker1->setDepartment(Work::DEPARTMENT_DEVS);
