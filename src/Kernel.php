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
		//$mailer = new Mailer();
		//$mailer->send('gleb@itworks-soft.com');

		$database = new Database();
		$files = new File();

		$databaseSaver = new Saver($database);
		$filesSaver = new Saver($files);

		$databaseSaver->doIt();
		$filesSaver->doIt();
	}

}
