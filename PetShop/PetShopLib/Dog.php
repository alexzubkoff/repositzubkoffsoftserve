<?php

class Dog extends Pet {

    protected $name = "";

    public function __construct($name, $color, $price) {
        parent::__construct($color, $price);
        if (empty($name)) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->name = $name;
        }
    }

    public function isYourName() {
        return $this->name;
    }

    public function toString() {
        return get_class($this) . "=>Name:" . $this->name . "; color: " 
                . $this->color . "; price: " . $this->price . ";<br/>";
    }

}
