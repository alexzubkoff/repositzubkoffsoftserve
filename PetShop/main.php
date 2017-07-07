<?php
require_once "PetShopLib\PetShop.php";
require_once "PetShopLib\Pet.php";
require_once "PetShopLib\FluffyPets.php";
require_once "PetShopLib\Dog.php";
require_once "PetShopLib\Cat.php";
require_once "PetShopLib\Hamster.php";

$dog = new Dog("Jack","grey",100);
$cat = new Cat("Lisa","white",10);
$hamster = new Hamster("white",5);
$dog2 = new Dog("Laika","black",150);
$cat2 = new Cat("Luisa","black",13);
$hamster2 = new Hamster("brown",5);

$petshop = new PetShop(array($dog,$cat,$hamster,$dog2,$cat2,$hamster2));
echo $petshop->toString();
echo "<p><p/>";
echo $petshop->moreAveragePrice();
echo "<p><p/>";
echo $petshop->whiteOrFluffyCats();
echo "<p><p/>";
echo $petshop->getExpensivePet();


