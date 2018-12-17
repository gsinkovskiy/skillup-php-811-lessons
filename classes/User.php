<?php

namespace Data;

class User
{

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var \DateTime
	 */
	private $birthDate;

	/**
	 * User constructor.
	 *
	 * @param string   $name
	 * @param \DateTime $birthDate
	 */
	public function __construct(string $name = 'Никто', \DateTime $birthDate = null)
	{
		$this->name = $name;

		if ($birthDate === null) {
			$birthDate = new \DateTime();
		}

		$this->birthDate = $birthDate;
	}

	public function aboutMe(): string
	{
		return 'Меня зовут ' . $this->name . ', ' . $this->aboutAge();
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $value)
	{
		$this->name = $value;
	}

	public function getBirthDate(): \DateTime
	{
		return $this->birthDate;
	}

	public function setBirthDate(\DateTime $birthDate): void
	{
		$this->birthDate = $birthDate;
	}

	public function getAge(): int
	{
		$today = new \DateTime();
		$interval = $today->diff($this->birthDate);

		return $interval->y;
	}

	private function aboutAge(): string
	{
		return 'мне ' . $this->getAge() . ' лет.';
	}

}
