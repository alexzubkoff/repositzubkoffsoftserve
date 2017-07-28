<?php

class HardSpecialist extends Worker implements IITWorker,  JsonSerializable {

    public function doWork() 
    {
        return "I am developing project!";
    }

    public function toString() 
    {
        return    $this->name . ", salary: "
                . $this->salary . "; position: " . $this->position . "; team: "
                . $this->team . ";<br/>";
    }

    public function doITWork() 
    {
        return "I do ITWork very good!";
    }

    public function txtSerialize() 
    {
        return    $this->name . ":"
                . $this->salary . ":" . $this->position . ":"
                . $this->team . ";";
    }

    public function jsonSerialize() 
    {
        return get_object_vars($this);
    }

}
