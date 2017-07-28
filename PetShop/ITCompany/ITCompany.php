<?php

class ITCompany implements JsonSerializable {

    protected $name = "";
    protected $city = "";
    private $teams = [];
    protected $needs = [];
    protected $hr_team;

    public function __construct($name, $city) 
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function addHRTeam(HRTeam $hr_team) 
    {
        $this->hr_team = $hr_team;
    }

    public function getRecvisits() 
    {
        return get_class($this) . ": " . $this->name . "; city: " . $this->city . ";<br/>";
    }

    public function addTeams(Team $team) 
    {
        array_push($this->teams, $team);
    }

    public function hire(HRTeam $hr) 
    {
        foreach ($this->teams as $team) {
            if (!$team->isComplete()) {
                $needs = $team->getNeeds();
                foreach ($needs as $need) {
                    if ($hr->canFindSpecialist($team, $need)) {
                        $specialist = $hr->getSpecialist($team, $need);
                        $team->addTeamMember($specialist);
                    }
                }
            }
        }
    }

    public function getFun() 
    {
        return "We are getting fun!!!";
    }

    public function getTeams() 
    {
        $result = [];
        foreach ($this->teams as $team) {
            $result[] = ['type'=>$team->getClassName(),
                         'name'=>$team->getTeamName(),
                         'project'=>$team->getTeamProject(),
                         'teammembers'=>$team->getTeamMembers(),
                         'needs'=>$team->getNeedsString()];
        }
        return $result;
    }

    public function getCandidates(HRTeam $hr_team) 
    {
        return $hr_team->getCandidates();
    }

    public function txtSerialize() 
    {
        $result = "";
        foreach ($this->teams as $team) {
            $result .= $team->txtSerialize();
        }
        return $this->name . ":"
                . $this->city . ":" . $result;
    }

    public function jsonSerialize() 
    {
        return get_object_vars($this);
    }

    public static function jsonUnSerialize(array $teams) 
    {
        $itNew = null;
        $itNewName = "";
        $itNewCity = "";
        foreach ($itComp as $key => $value) {
            if ($key === "name") {
                $itNewName = $value;
            }
            if ($key === "city") {
                $itNewCity = $value;
            }
            echo $key . ":" . $value . "<br/>";
        }
        $itNew = new ITCompany($itNewName, $itNewCity);

        foreach ($itComp['teams'] as $key => $value) {
            foreach ($value as $key => $value) {
                echo $key . ":" . $value . "<br/>";
            }
        }
        return  $itNew;
    }

}
