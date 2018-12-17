<?php

namespace App\Storage;

class File implements StorageInterface
{

	public function save($data)
	{
		echo 'Сохраняем в файлах: ' . $data . "\n";
	}

}
