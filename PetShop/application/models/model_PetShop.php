<?php

require_once '././main.php';

class Model_PetShop extends Model {

    protected $dataprov;
    protected $text;
    protected $arr_pets;
    protected $petshop;

    public function __construct() 
    {
        $this->dataprov = new DataProvider();
        $this->text = $this->dataprov->readFile("DB.txt");
        $this->arr_pets = PetShop::txtUnSerialize($this->text);
        $this->petshop = new PetShop($this->arr_pets);
    }

    public function getAllPets() 
    {
        return $this->petshop->toString();
    }

    public function getMoreThanAveragePrice() 
    {
        return $this->petshop->getMoreThanAveragePricePets();
    }

    public function getCatsWhiteFluffy() 
    {
        return $this->petshop->getWhiteOrFluffyCats();
    }

    public function getMostExpensivePets() 
    {
        //$this->petshop = Petshop::getDBConnection();
        return $this->petshop->getExpensivePets();
    }
    

}
