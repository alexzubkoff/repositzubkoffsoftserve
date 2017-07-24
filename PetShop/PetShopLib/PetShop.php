<?php

class Petshop {

    public $pets_array = [];
    public static $array_pets = [];
    protected static $host = "127.0.0.1:3306";
    protected static $db = "zubkov";
    protected static $user = "root";
    protected static $pass = "";

    public function __construct(array $pets) 
    {
        $length = count($pets);
        for ($i = 0; $i < $length; $i++) {
            $this->pets_array[$i] = $pets[$i];
        }
    }

    public function getPets() 
    {
        return $this->pets_array;
    }

    public function toString() 
    {
        $result = "";
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            $result.= $this->pets_array[$i]->toString();
        }
        return $result;
    }

    public function getMoreThanAveragePricePets() 
    {
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

    public function getWhiteOrFluffyCats() 
    {
        $result = "";
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            if (($this->pets_array[$i]->getClassName() === "Cat" ) && (($this->pets_array[$i]->getColor() === 'white') || $this->pets_array[$i]->getFluffy())) {
                $result.= $this->pets_array[$i]->toString();
            }
        }
        return $result;
    }

    public function getExpensivePets() 
    {
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

    public function txtSerialize() 
    {
        $str = "";
        foreach ($this->pets_array as $pet) {
            $str .= $pet->txtSerialize();
        }
        return $str;
    }

    public static function txtUnSerialize($str) 
    {
        $pets_arr = explode(";", $str);
        array_pop($pets_arr);
        $new_arr = [];
        foreach ($pets_arr as $pet) {
            array_push($new_arr, explode(":", $pet));
        }
        $length = count($new_arr);
        for ($i = 0; $i < $length; $i++) {
            if (count($new_arr[$i]) === 4) {
                array_push(self::$array_pets, new $new_arr[$i][0]($new_arr[$i][1], $new_arr[$i][2], $new_arr[$i][3]));
            } else {
                array_push(self::$array_pets, new $new_arr[$i][0]($new_arr[$i][1], $new_arr[$i][2], $new_arr[$i][3], $new_arr[$i][4]));
            }
        }
        return self::$array_pets;
    }

    public static function getDBConnection() 
    {
        try {
            $connection = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db . ';charset=utf8', self::$user, self::$pass);
            $sth = $connection->prepare("SELECT * FROM Pets");
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $key => $value) {
                foreach ($value as $key => $v) {
                    if ($value['type'] === "Dog") {
                        self::$array_pets[] = new $value['type']($value['name'], $value['color'], $value['price']);
                    } else {
                        self::$array_pets[] = new $value['type']($value['name'], $value['color'], $value['price'], $value['fluffiness']);
                    }
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
        return new PetShop(self::$array_pets);
    }

}
