<?php

class ControllerITCompany extends Controller {

    public function __construct() 
    {
        $this->model = new ModelITCompany();
        parent::__construct();
    }

    public function actionCandidatesbefore() 
    {
        $data = $this->model->getAllCandidates();
        $this->view->generate('ITCompanyCandBeforeView.php', 'TemplateITCompany.php', $data);
    }

    public function actionTeamsbefore() 
    {
        $data = $this->model->getTeamsbefore();
        $this->view->generate('ITCompanyTeamsBeforeView.php', 'TemplateITCompany.php', $data);
    }

    public function actionTeamsafter() 
    {
        $data = $this->model->getTeamsafter();
        $this->view->generate('ITCompanyTeamsAfterView.php', 'TemplateITCompany.php', $data);
    }

    public function actionCandidatesafter() 
    {
        $data = $this->model->getAllCandidatesAfter();
        $this->view->generate('ITCompanyCandAfterView.php', 'TemplateITCompany.php', $data);
    }

    public function actionCandidatesfromdb() 
    {
        $data = $this->model->getCandidatesfromdb();
        $this->view->generate('ITCompanyGetCandidatesFromDBView.php', 'TemplateITCompany.php', $data);
    }

}
