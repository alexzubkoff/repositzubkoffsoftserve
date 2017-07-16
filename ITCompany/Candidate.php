<?php

require_once 'IComparable.php';
require_once 'IITWorker.php';

class Candidate extends Person implements IComparable, IITWorker {

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
    
    public function getWantsSalary() 
    {
        return $this->wantsSalary;
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

    public function compareTo(Candidate $other) 
    {
        if ($this->profile < $other->getProfile()) {
            return -1;
        } elseif ($this->profile > $other->getProfile()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function doITWork() 
    {
        return "I do ITWork good!";
    }

}
