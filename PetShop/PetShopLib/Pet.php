<?php

abstract class Pet {

    protected $name = "";
    protected $price = 0;
    protected $color = "";

    public function __construct($name, $color, $price) 
    {
        if (empty($color) || !is_numeric($price) || $price <= 0) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getPrice() 
    {
        return $this->price;
    }

    public function getColor() 
    {
        return $this->color;
    }

    public function getClassName() 
    {
        return get_class($this);
    }

    public abstract function txtSerialize();

    public abstract function toString();
}
