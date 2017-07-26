<?php

class ControllerPetshop extends Controller {

    public function __construct() 
    {
        $this->model = new ModelPetShop();
        $this->view = new View();
    }

    public function actionindex() 
    {
        $data = $this->model->getAllPets();
        $this->view->generate('PetshopView.php','TemplateView.php', $data);
    }

    public function actionmorethanaver() 
    {
        $data = $this->model->getMoreThanAveragePrice();
        $this->view->generate('MorethanaverView.php', 'TemplateView.php', $data);
    }

    public function actioncatswhitefluffy() 
    {
        $data = $this->model->getCatsWhiteFluffy();
        $this->view->generate('CatswhitefluffyView.php', 'TemplateView.php', $data);
    }

    public function actionmostexpensive() 
    {
        $data = $this->model->getMostExpensivePets();
        $this->view->generate('MostexpensiveView.php', 'TemplateView.php', $data);
    }

}
