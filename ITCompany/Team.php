<?php

class Team {

    protected $name = "";
    protected $project = "";
    protected $teamMembers = [];
    protected $needs = [];

    public function __construct($name, $project) 
    {
        $this->name = $name;
        $this->project = $project;
    }

    public function addTeamMember(HardSpecialist $hardspec) 
    {
        array_push($this->teamMembers, $hardspec);
        foreach ($this->needs as $need) {
            if ($need == get_class($hardspec)) {
                array_unshift($this->needs, $need);
            }
        }
    }

    public function addNeeds($needs) 
    {

        array_push($this->needs, $needs);
    }

    public function isComplete() 
    {
        if (count($this->needs) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getNeeds() 
    {

        return $this->needs;
    }

    public function getNeedstoString() 
    {
        $result = "Teams needs:";
        foreach ($this->needs as $need) {
            $result .= $need . "<br/>";
        }
        return $result;
    }

    public function doJob() 
    {
        return $this->project;
    }

    public function getTeamName() 
    {
        return $this->name;
    }

    public function getTeamMembers() 
    {
        $result = "";
        foreach ($this->teamMembers as $member) {
            $result .= $member->toString();
        }
        return get_class($this) . "=>name: " . $this->name . "; project: "
                . $this->project . ";" . $result . "<br/>";
    }

}
