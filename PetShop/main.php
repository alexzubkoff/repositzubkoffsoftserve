<?php

require_once "PetShopLib/PetShop.php";
require_once "PetShopLib/Pet.php";
require_once "PetShopLib/IsFluffy.php";
require_once "PetShopLib/Dog.php";
require_once "PetShopLib/Cat.php";
require_once "PetShopLib/Hamster.php";
require_once "DataProvider.php";

$dataprov = new DataProvider();
$text = $dataprov->readFile("DB.txt");

$arr_pets = PetShop::txtUnSerialize($text);
$petshop = new PetShop($arr_pets);
