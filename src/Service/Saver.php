<?php

namespace App\Service;

use App\Storage\StorageInterface;

class Saver
{

	/**
	 * @var StorageInterface
	 */
	private $storage;

	public function __construct(StorageInterface $storage)
	{
		$this->storage = $storage;
	}

	public function doIt()
	{
		$this->storage->save('Данные для сохранения');
	}

}
