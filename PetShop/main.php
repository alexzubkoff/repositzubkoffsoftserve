<?php

require_once "PetShopLib/PetShop.php";
require_once "PetShopLib/Pet.php";
require_once "PetShopLib/IsFluffy.php";
require_once "PetShopLib/Dog.php";
require_once "PetShopLib/Cat.php";
require_once "PetShopLib/Hamster.php";
require_once "DataProvider.php";

try {
    $dog = new Dog("Jack", "grey", 100);
    $cat = new Cat("Lisa", "white", 10, true);
    $hamster = new Hamster("Hamster", "white", 5, true);
    $dog2 = new Dog("Laika", "black", 150);
    $cat2 = new Cat("Luisa", "black", 13, true);
    $hamster2 = new Hamster("Hamster", "brown", 7, true);
    $cat3 = new Cat("Lulu", "black", 130, true);
    $cat4 = new Cat("Barsik", "blue", 100, true);
    $petshop = new PetShop(array($dog, $cat, $hamster, $dog2, $cat2, $hamster2, $cat3, $cat4));
    ViewPetshop($petshop);
} catch (Exception $e) {
    echo '<h1>' . $e->getMessage() . '</h1>';
}

$dataprov = new DataProvider();
$dataprov->writeFile("DB.txt", $petshop);
$text = $dataprov->readFile("DB.txt");

$arr_pets = PetShop::txtUnSerialize($text);
$petshop = new PetShop($arr_pets);
echo "<h3>Objects recreated from DB.txt</h3><br/>";
echo $petshop->toString();

function ViewPetshop($petshop) 
{
    echo "<h3>1.Petshop List</h3>";
    echo "<p>" . $petshop->toString() . "</p>";
    echo "<p><p/>";
    echo "<h3>1.1 Pets more average price</h3>";
    echo "<p>" . $petshop->getMoreThanAveragePricePets() . "</p>";
    echo "<p><p/>";
    echo "<h3>1.2 Cats white or fluffy</h3>";
    echo "<p>" . $petshop->getWhiteOrFluffyCats() . "</p>";
    echo "<p><p/>";
    echo "<h3>1.3 Get most expensive pet</h3>";
    echo "<p>" . $petshop->getExpensivePets() . "</p>";
}
