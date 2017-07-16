<?php

abstract class Pet implements JsonSerializable {

    protected $type;
    protected $name = "";
    protected $price = 0;
    protected $color = "";

    public function __construct($name, $color, $price) {
        if (empty($color) || !is_numeric($price) || $price <= 0) {
            throw new Exception("Choose correct properties of the pet");
        } else {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getColor() {
        return $this->color;
    }

    public function getClassName() {
        return get_class($this);
    }

    public function jsonSerialize() {
        $this->type = get_class($this);
        return json_encode(get_object_vars($this));
    }

    public static function jsonUnSerialize($json_data) {
        return json_decode($json_data);
    }

    public abstract function toString();
}
