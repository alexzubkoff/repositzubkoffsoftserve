<?php
 class Hr extends Worker{
	protected $salary = 0;
	public function __construct($name,$surname,$date_born,$salary)
	{
		parent::__construct($name,$surname,$date_born);
		$this->salary = $salary;
	}
	public function getPersonalData()
	{
		return "HR name: ".$this->name.";"."surname: ".$this->surname.";date of born:".$this->date_born.";salary".$this->salary.";";
	}

}