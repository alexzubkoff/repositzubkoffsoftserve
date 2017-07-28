<?php

class ControllerPetshop extends Controller {
     
    public function __construct() 
    {
        $this->model = new ModelPetShop();
        parent::__construct();
    }

    public function actionIndex() 
    {
        $data = $this->model->getAllPets();
        $this->view->generate('PetshopView.php', 'TemplatePetShop.php', $data);
    }

    public function actionMorethanaver() 
    {
        $data = $this->model->getMoreThanAveragePrice();
        $this->view->generate('MorethanaverView.php', 'TemplatePetShop.php', $data);
    }

    public function actionCatswhitefluffy() 
    {
        $data = $this->model->getCatsWhiteFluffy();
        $this->view->generate('CatswhitefluffyView.php', 'TemplatePetShop.php', $data);
    }

    public function actionMostexpensive() 
    {
        $data = $this->model->getMostExpensivePets();
        $this->view->generate('MostexpensiveView.php', 'TemplatePetShop.php', $data);
    }

    public function actionCandidatesbefore() 
    {
        $this->view->generate('ITCompanyCandBeforeView.php', 'TemplateITCompany.php', $data);
    }

}
