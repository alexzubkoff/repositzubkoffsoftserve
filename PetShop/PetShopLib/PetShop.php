<?php

class Petshop implements JsonSerializable {

    public $pets_array = [];

    public function __construct(array $pets) {
        $length = count($pets);
        for ($i = 0; $i < $length; $i++) {
            $this->pets_array[$i] = $pets[$i];
        }
    }

    public function getPets() {
        return $this->pets_array;
    }

    public function toString() {
        $result = "";
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            $result.= $this->pets_array[$i]->toString();
        }
        return $result;
    }

    public function getMoreThanAveragePricePets() {
        $result = "";
        $average = 0;
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            $average+= $this->pets_array[$i]->getPrice();
        }
        $average = $average / $length;
        for ($i = 0; $i < $length; $i++) {
            if ($this->pets_array[$i]->getPrice() >= $average) {
                $result.= $this->pets_array[$i]->toString();
            }
        }
        return $result;
    }

    public function getWhiteOrFluffyCats() {
        $result = "";
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            if (($this->pets_array[$i]->getClassName() === "Cat" ) && (($this->pets_array[$i]->getColor() === 'white') || $this->pets_array[$i]->getFluffy())) {
                $result.= $this->pets_array[$i]->toString();
            }
        }
        return $result;
    }

    public function getExpensivePets() {
        $exp = $this->pets_array[0]->getPrice();
        $result = "";
        $length = count($this->pets_array);
        for ($i = 1; $i < $length; $i++) {
            if ($this->pets_array[$i]->getPrice() >= $exp) {
                $exp = $this->pets_array[$i]->getPrice();
            }
        }
        for ($i = 0; $i < $length; $i++) {
            if ($this->pets_array[$i]->getPrice() === $exp) {

                $result.=$this->pets_array[$i]->toString();
            }
        }
        return $result;
    }

    public function jsonSerialize() {
        $json_str = json_encode(get_object_vars($this));
        return $json_str;
    }

    public static function jsonUnSerialize($json_data) {
        $array = json_decode($json_data);
        $result = "";
        foreach ($array->pets_array as $key => $pets) {
            $result.= $pets;
        }
        return $array->pets_array;
    }

}
