<?php
abstract class HardSpecialist extends Worker{
	protected $salary = 0;
	protected $team = "";
	protected $position = "";
	public function __construct($name,$surname,$date_born,$salary,$position,$team)
	{
		parent::__construct($name,$surname,$date_born);
		$this->salary = $salary;
		$this->position = $position;
		$this->team = $team;
		
	}
	public function getPersonalData()
	{
		return "Worker name: ".$this->name.";"."surname: ".$this->surname.";date of born:".$this->date_born.";salary".$this->salary.";position:".$this->position.";team: ".$this->team.";";
	}

}