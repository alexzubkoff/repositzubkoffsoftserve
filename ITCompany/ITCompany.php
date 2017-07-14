<?php

class ITCompany {

    protected $name = "";
    protected $city = "";
    protected $candidates = [];
    protected $teams = [];
    protected $needs = [];

    public function __construct($name, $city) 
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function getRecvisits() 
    {
        return get_class($this) . "=>name: " . $this->name . "; city: " . $this->city . ";<br/>";
    }

    public function addCandidates(array $candidates) 
    {
        array_push($this->candidates, $candidates);
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
                    switch ($need) {
                        case 'PM':
                            $candidate = $hr->getPM($team);
                            $team->addTeamMember(new PM($candidate->getName(), 1200, $need, $team->getTeamName()));
                            break;
                        case 'QC':
                            $candidate = $hr->getQC($team);
                            $team->addTeamMember(new QC($candidate->getName(), 1000, $need, $team->getTeamName()));
                            break;
                        case 'DEV':
                            $candidate = $hr->getDev($team);
                            $team->addTeamMember(new Dev($candidate->getName(), 1400, $need, $team->getTeamName()));
                            break;
                        default :
                            break;
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

}
