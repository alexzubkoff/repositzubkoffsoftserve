<?php

trait IsFluffy {

    protected $is_fluffy = true;

    public function getFluffy() 
    {
        return $this->is_fluffy;
    }

    public function txtSerialize() 
    {
        return get_class($this) . ":" . $this->name . ":" . $this->color . ":"
                . $this->price . ":" . $this->is_fluffy . ";";
    }

}
