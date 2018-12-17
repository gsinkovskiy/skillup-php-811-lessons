<?php

namespace Data;

class Worker extends User
{

	const DEPARTMENT_DEVS = 1;
	const DEPARTMENT_SALES = 2;
	const DEPARTMENT_QA = 3;

	/**
	 * @var int
	 */
	private $salary;

	static public $temp;

	/**
	 * @var int
	 */
	private $department;

	/**
	 * @return int
	 */
	public function getSalary(): int
	{
		return $this->salary;
	}

	/**
	 * @param int $salary
	 *
	 * @return Worker
	 */
	public function setSalary(int $salary): Worker
	{
		$this->salary = $salary;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getDepartment(): int
	{
		return $this->department;
	}

	/**
	 * @param int $department
	 */
	public function setDepartment(int $department): void
	{
		$this->department = $department;
	}

	static public function whoAmI()
	{
		return 'Я работник';
	}

	public function aboutMe(): string
	{
		return parent::aboutMe() . ' Я получаю ' . $this->salary;
	}

}
