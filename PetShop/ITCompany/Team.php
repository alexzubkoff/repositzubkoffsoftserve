<?php

class Team implements JsonSerializable {

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
        $arr = [];
        for ($i = 0; $i < count($this->needs); $i++) {
            if ($this->needs[$i] === get_class($hardspec)) {
                $arr[] = array_splice($this->needs, $i);
            }
        }
        $this->needs = $arr;
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

    public function getNeedsString() 
    {
        if (!is_null($this->needs)) {
            return implode(';', $this->needs);
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

    public function getClassName() 
    {
        return get_class($this);
    }

    public function doJob() 
    {
        return $this->project;
    }

    public function getTeamName() 
    {
        return $this->name;
    }

    public function getTeamProject() 
    {
        return $this->project;
    }

    public function getTeamMembers() 
    {
        $result = "";
        foreach ($this->teamMembers as $member) {
            $result .= $member->toString();
        }
        return $result;
    }

    public function txtSerialize() 
    {
        $result = "";
        foreach ($this->teamMembers as $member) {
            $result .= $member->txtSerialize();
        }
        return $this->name . ":" . $result;
    }

    public function jsonSerialize() 
    {       
        return get_object_vars($this);
    }

}
