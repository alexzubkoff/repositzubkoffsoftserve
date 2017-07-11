<?php
abstract class Person{
	protected $name = "";
	protected $surname = "";
	protected $date_born = "";
	public function __construct($name,$surname,$date_born)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->date_born = $date_born;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getSurname()
	{
		return $this->surname;
	}
	public function getDateBorn()
	{
		return $this->date_born;
	}
	//abstract public function getPersonalData();
}