<?php

require_once '././main.php';

class Model_PetShop extends Model {

    protected $dataprov;
    protected $text;
    protected $arr_pets;
    protected $petshop;
    protected $connection;

    public function __construct() 
    {
        $this->dataprov = new DataProvider();
        $this->text = $this->dataprov->readFile("DB.txt");
        $this->arr_pets = PetShop::txtUnSerialize($this->text);
        $this->petshop = new PetShop($this->arr_pets);
        //$this->petshop = Petshop::getDBConnection();
    }

    public function getAllPets() 
    {
        /*
        $sth = $this->connection->prepare("SELECT * FROM Pets ");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return  $result;*/
        
        return $this->petshop->toString();
    }

    public function getMoreThanAveragePrice() 
    {
        /*
        $sth = $this->connection->prepare("SELECT * FROM Pets WHERE price >=(SELECT AVG(price)FROM Pets) ");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return  $result;*/
        
        return $this->petshop->getMoreThanAveragePricePets();
    }

    public function getCatsWhiteFluffy() 
    {
        /*
        $sth = $this->connection->prepare("SELECT * FROM Pets WHERE type='Cat' AND fluffiness='1' ");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);      
        return  $result;*/
        
        return $this->petshop->getWhiteOrFluffyCats();
    }

    public function getMostExpensivePets() 
    {
        /*
        $sth = $this->connection->prepare("SELECT * FROM Pets WHERE price = (SELECT MAX(price) FROM Pets)");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return  $result;*/
        
        return $this->petshop->getExpensivePets();
    }
    

}
