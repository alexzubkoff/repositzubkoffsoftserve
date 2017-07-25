<?php

class Dog extends Pet {

    public function toString() 
    {
        return get_class($this) . "=>Name:" . $this->name . "; color: "
                . $this->color . "; price: " . $this->price . ";<br>";
    }

    public function txtSerialize() 
    {
        return get_class($this).":".$this->name.":".$this->color.":".$this->price.";";
    }

}
