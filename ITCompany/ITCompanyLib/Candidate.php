<?php
class Candidate extends Person{
	protected $wants_salary = 0;
	protected $cv = true;
	public function __construct($name,$surname,$date_born,$wants_salary,$cv)
	{
		parent::__construct($name,$surname,$date_born);
		$this->wants_salary = $wants_salary;
		$this->cv = $cv;
	}
	public function getPersonalData()
	{
		return "Candidate name: ".$this->name.";"."surname: ".$this->surname.";date of born:".$this->date_born.";wants salary".$this->wants_salary.";cv:".$this->cv.";";
	}

}