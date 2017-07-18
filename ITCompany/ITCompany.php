<?php

class ITCompany {

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

    public function hire(HRTeam $hr) {
        foreach ($this->teams as $team) {
            if (!$team->isComplete()) {
                $needs = $team->getNeeds();
                foreach ($needs as $need) {
                    if ($hr->canFindSpecialist($team, $need)) {
                        $candidate = $hr->getSpecialist($team, $need);
                        $team->addTeamMember(new $need($candidate->getName(), $candidate->getWantsSalary(), $need, $team->getTeamName()));
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
        $result = '';
        foreach ($this->teams as $team) {
            $result.= $team->getTeamMembers() . "<br/>";
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

}
