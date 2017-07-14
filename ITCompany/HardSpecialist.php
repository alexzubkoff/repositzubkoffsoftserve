<?php

class HardSpecialist extends Worker {

    public function doWork() 
    {
        return "I am developing project!";
    }

    public function toString() 
    {
        return get_class($this) . "=>Name: " . $this->name . "; salary: "
                . $this->salary . "; position: " . $this->position . "; team: "
                . $this->team . ";<br/>";
    }

}
