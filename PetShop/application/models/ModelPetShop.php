<?php

require_once '././main.php';

class ModelPetShop extends Model {

    protected $dataprov;
    protected $text;
    protected $petshop;

    public function __construct() 
    {
        $this->dataprov = new DataProvider();
        $this->text = $this->dataprov->readFile("DB.txt");
        $this->petshop = PetShop::txtUnSerialize($this->text);
        //$this->petshop = Petshop::getDataMySqlDb();     
    }

    public function getAllPets() 
    {
        return $this->petshop->getPets();
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
        return $this->petshop->getExpensivePets();
    }

}
