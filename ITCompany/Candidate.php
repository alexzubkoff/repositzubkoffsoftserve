<?php

class Candidate extends Person {

    protected $wantsSalary = 0;
    protected $profile = "";
    protected $experience = "";

    public function __construct($name, $wantsSalary, $profile, $experience) 
    {
        $this->wantsSalary = $wantsSalary;
        $this->profile = $profile;
        $this->experience = $experience;
        parent::__construct($name);
    }

    public function getProfile() 
    {
        return $this->profile;
    }

    public function getName() 
    {
        return $this->name;
    }
    public function getExperience() 
    {
        return $this->experience;
    }

    public function toString() 
    {
        return get_class($this) . "=>Name: " . $this->name . "; wants salary: "
                . $this->wantsSalary . "; profile: " . $this->profile . "; experience: "
                . $this->experience . ";<br/>";
    }

}
