<?php

abstract class Worker extends Person {

    protected $salary = 0;
    protected $position = "";
    protected $team = "";

    public function __construct($name, $salary, $position, $team) 
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->team = $team;
        parent::__construct($name);
    }

    abstract function doWork();
}
