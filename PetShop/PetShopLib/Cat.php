<?php

class Cat extends Pet {

    use IsFluffy;

    public function toString() 
    {
        return get_class($this) . "=>Name:" . $this->name . "; color: "
                . $this->color . "; price: " . $this->price . ";is_fluffy: "
                . $this->is_fluffy . ";<br/>";
    }

}
