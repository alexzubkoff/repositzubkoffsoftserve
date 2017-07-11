<?php
class ITCompanyRegional extends ITCompanyGlobal{
	protected $name = "";
	protected $country = "";
	protected $city = "";
	protected $contacts = "";

	protected $candidates = array();
	protected $teams = array();

	public function __construct($name,$country,$city,$contacts)
	{
		if (empty($name)||empty($country)||empty($city)||empty($contacts)){
           throw new Exception("<h1>Value must be not empty</h1>");
        }else {
        	$this->name = $name;
			$this->country = $country;
			$this->city = $city;
			$this->contacts = $contacts;
            }
	}
	public function destructItCompRegional()
	{
		if (empty($this->name)||empty($this->country)||empty($this->city)||empty($this->contacts)){
           throw new Exception("<h1>Value must be not empty</h1>");
        }else {
        	$this->name = "";
			$this->country = "";
			$this->city = "";
			$this->contacts = "";
            }

	}
	public function getItCompRecvisits()
	{
		return "ITCompany: ".$this->name.";"."Country: ".$this->country.";City:".$this->city.";Contacts".$this->contacts.";";
	}

	public function getCandidates(HrDepartment $hrdepartment)
	{
		$str = $hrdepartment->getCandidates();

		if ($str!="Candidates' base is empty!"){
			$this->candidates = $hrdepartment->getCandidates();
		}
	}

	public function addTeams(Team $team)
	{
		if ($team->isComplete()){
			array_push($this->teams,$team);
		}else{
			$name = $this->candidates[0]->getName();
			$surname = $this->candidates[0]->getSurname();
			$date_born = $this->candidates[0]->getDateBorn();
			$salary = 500;
			$position = "QC";
			$team_name = $team->getName();
			$qc = new Qc($name,$surname,$date_born,$salary,$position,$team_name);

			$name = $this->candidates[1]->getName();
			$surname = $this->candidates[1]->getSurname();
			$date_born = $this->candidates[1]->getDateBorn();
			$salary = 600;
			$position = "PM";
			$team_name = $team->getName();
			$pm = new Pm($name,$surname,$date_born,$salary,$position,$team_name);

			$name = $this->candidates[2]->getName();
			$surname = $this->candidates[2]->getSurname();
			$date_born = $this->candidates[2]->getDateBorn();
			$salary = 700;
			$position = "Dev";
			$team_name = $team->getName();
			$dev = new Dev($name,$surname,$date_born,$salary,$position,$team_name);
			
			$new_team = new Team($team->getName());
			$new_team->addTeamMember($qc);
			$new_team->addTeamMember($pm);
			$new_team->addTeamMember($dev);

			array_push($this->teams,$new_team);

		}
	}

	public function getTeams()
	{    
		$str_teams = "";
		$length = count($this->teams);
		for ($i = 0; $i<$length; $i++){
           $str_teams .= $this->teams[$i]->toString()."<br/>";
		}
       return $str_teams;
	}
}