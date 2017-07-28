<?php

class HR extends Worker {

    public function doWork() 
    {
        return "I am looking for candidates!";
    }

    public function toString() 
    {
        return get_class($this) . "=>Name: " . $this->name . ";salary: "
                . $this->salary . ";position: " . $this->position . ";team: "
                . $this->team . ";";
    }

}
