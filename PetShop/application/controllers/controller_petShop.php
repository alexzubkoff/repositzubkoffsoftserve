<?php

class Controller_Petshop extends Controller {

    public function __construct() 
    {
        $this->model = new Model_PetShop();
        $this->view = new View();
    }

    public function action_index() 
    {
        $data = $this->model->getAllPets();
        $this->view->generate('petshop_view.php','template_view.php', $data);
    }

    public function action_morethanaver() 
    {
        $data = $this->model->getMoreThanAveragePrice();
        $this->view->generate('morethanaver_view.php', 'template_view.php', $data);
    }

    public function action_catswhitefluffy() 
    {
        $data = $this->model->getCatsWhiteFluffy();
        $this->view->generate('catswhitefluffy_view.php', 'template_view.php', $data);
    }

    public function action_mostexpensive() 
    {
        $data = $this->model->getMostExpensivePets();
        $this->view->generate('mostexpensive_view.php', 'template_view.php', $data);
    }

}
