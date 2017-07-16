<?php

trait IsFluffy {

    protected $is_fluffy = true;

    public function getFluffy() 
    {
        return $this->is_fluffy;
    }

}
