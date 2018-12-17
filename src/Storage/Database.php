<?php

namespace App\Storage;

class Database implements StorageInterface
{

	public function save($data)
	{
		echo 'Сохраняем с помощью БД: ' . $data . "\n";
	}
}
