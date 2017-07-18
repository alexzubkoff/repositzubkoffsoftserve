<?php

class Hamster extends Pet {

    use IsFluffy;

    public function __construct($name = "Hamster", $color, $price, $is_fluffy) 
    {
        if (empty($color) || !is_numeric($price) || $price <= 0) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
            $this->is_fluffy = $is_fluffy;
        }
    }

    public function toString() 
    {
        return get_class($this) . "=> color: " . $this->color . "; price: "
                . $this->price . ";is_fluffy: " . $this->is_fluffy . ";<br/>";
    }

}
