<?php

class Hamster extends Pet {

    use IsFluffy;

    protected $name = "Hamster";

    public function __construct($color, $price) 
    {
        if (empty($color) || !is_numeric($price) || $price <= 0) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->color = $color;
            $this->price = $price;
        }
    }

    public function toString() 
    {
        return get_class($this) . "=> color: " . $this->color . "; price: "
                . $this->price . ";is_fluffy: " . $this->is_fluffy . ";<br/>";
    }

}
