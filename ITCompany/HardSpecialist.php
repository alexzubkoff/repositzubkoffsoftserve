<?php

class HardSpecialist extends Worker implements IITWorker {

    public function doWork() 
    {
        return "I am developing project!";
    }

    public function toString() 
    {
        return $this->name . ", salary: "
                . $this->salary . "; position: " . $this->position . "; team: "
                . $this->team . ";<br/>";
    }

    public function doITWork() 
    {
        return "I do ITWork very good!";
    }

}
