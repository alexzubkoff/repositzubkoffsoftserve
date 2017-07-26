<?php

class Petshop {

    protected $pets_array = [];
    protected static $array_pets = [];
    protected static $host = "127.0.0.1:3306";
    protected static $db = "zubkov";
    protected static $user = "root";
    protected static $pass = "";

    public function __construct(array $pets) {
        $length = count($pets);
        for ($i = 0; $i < $length; $i++) {
            $this->pets_array[] = $pets[$i];
        }
    }

    public function getPets() {
        $arrPetsAssoc = [];

        foreach ($this->pets_array as $pet) {
            if ($pet->getClassName() === 'Dog') {
                $arrPetsAssoc[] = ['type' => $pet->getClassName(),
                    'name' => $pet->getName(),
                    'color' => $pet->getColor(),
                    'price' => $pet->getPrice(),
                    'fluffiness' => '0'];
            } else {
                $arrPetsAssoc[] = ['type' => $pet->getClassName(),
                    'name' => $pet->getName(),
                    'color' => $pet->getColor(),
                    'price' => $pet->getPrice(),
                    'fluffiness' => $pet->getFluffy()];
            }
        }

        return $arrPetsAssoc;
    }

    public function toString() {
        $result = "";
        $length = count($this->pets_array);
        for ($i = 0; $i < $length; $i++) {
            $result .= $this->pets_array[$i]->toString();
        }
        return $result;
    }

    public function getMoreThanAveragePricePets() {
        $arrResult = [];
        $average = 0;
        foreach ($this->pets_array as $pet) {
            $average += $pet->getPrice();
        }
        $average = $average / count($this->pets_array);
        foreach ($this->pets_array as $pet) {
            if ($pet->getPrice() > $average) {
                if ($pet->getClassName() === 'Dog') {
                    $arrResult[] = ['type' => $pet->getClassName(),
                        'name' => $pet->getName(),
                        'color' => $pet->getColor(),
                        'price' => $pet->getPrice(),
                        'fluffiness' => '0'];
                } else {
                    $arrResult[] = ['type' => $pet->getClassName(),
                        'name' => $pet->getName(),
                        'color' => $pet->getColor(),
                        'price' => $pet->getPrice(),
                        'fluffiness' => $pet->getFluffy()];
                }
            }
        }

        return $arrResult;
    }

    public function getWhiteOrFluffyCats() {
        $arrResult = [];
        foreach ($this->pets_array as $pet) {
            if (($pet->getClassName() === "Cat" ) && (($pet->getColor() === 'white') || $pet->getFluffy())) {
                $arrResult[] = ['type' => $pet->getClassName(),
                                'name' => $pet->getName(),
                                'color' => $pet->getColor(),
                                'price' => $pet->getPrice(),
                                'fluffiness' => $pet->getFluffy()];
            }
        }

        return $arrResult;
    }

    public function getExpensivePets() {
        $exp = $this->pets_array[0]->getPrice();
        $arrResult = [];
        $length = count($this->pets_array);
        for ($i = 1; $i < $length; $i++) {
            if ($this->pets_array[$i]->getPrice() >= $exp) {
                $exp = $this->pets_array[$i]->getPrice();
            }
        }
        foreach ($this->pets_array as $pet) {
            if ($pet->getPrice() === $exp) {
                if ($pet->getClassName() === 'Dog') {
                    $arrResult[] = ['type' => $pet->getClassName(),
                                    'name' => $pet->getName(),
                                    'color' => $pet->getColor(),
                                    'price' => $pet->getPrice(),
                                     'fluffiness' => '0'];
                } else {
                    $arrResult[] = ['type' => $pet->getClassName(),
                                    'name' => $pet->getName(),
                                    'color' => $pet->getColor(),
                                    'price' => $pet->getPrice(),
                                    'fluffiness' => $pet->getFluffy()];
                }
            }
        }
        return $arrResult;
    }

    public function txtSerialize() {
        $str = "";
        foreach ($this->pets_array as $pet) {
            $str .= $pet->txtSerialize();
        }
        return $str;
    }

    public static function txtUnSerialize($str) {
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
        return new PetShop(self::$array_pets);
    }

    public static function getDataMySqlDb() {
        try {
            $connection = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db . ';charset=utf8', self::$user, self::$pass);
            $sth = $connection->prepare("SELECT * FROM Pets");
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $animal) {
                if ($animal['type'] === "Dog") {
                    self::$array_pets[] = new $animal['type']($animal['name'], $animal['color'], $animal['price']);
                } else {
                    self::$array_pets[] = new $animal['type']($animal['name'], $animal['color'], $animal['price'], $animal['fluffiness']);
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
        return new PetShop(self::$array_pets);
    }

}
