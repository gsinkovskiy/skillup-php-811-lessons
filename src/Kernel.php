<?php

namespace App;

use App\Service\Mailer;
use App\Service\Saver;
use App\Storage\Database;
use App\Storage\File;

class Kernel
{

	public function run()
	{
		header('Content-Type: text/plain');

		if (empty($_COOKIE['visits'])) {
			$_COOKIE['visits'] = 0;
		}

		$_COOKIE['visits']++;

		setcookie('visits', $_COOKIE['visits'], strtotime('+1 month'));
		echo 'Вы открыли страницу: ' . $_COOKIE['visits'] . ' раз';
	}

}
