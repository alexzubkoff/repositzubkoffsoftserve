<?php

abstract class Pet {

    protected $price = 0;
    protected $color = "";
    protected $is_fluffy = false;

    public function __construct($color, $price) {
        if (empty($color) || !is_numeric($price) || $price <= 0) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->color = $color;
            $this->price = $price;
        }
    }

    public function isYourPrice() {
        return $this->price;
    }

    public function isYourColor() {
        return $this->color;
    }

    public function getClassName() {
        return get_class($this);
    }

    public function isFluffy() {
        return $this->is_fluffy;
    }

    public abstract function toString();
}
