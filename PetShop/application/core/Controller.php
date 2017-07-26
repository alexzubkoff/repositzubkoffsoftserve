<?php

abstract class Controller {

    public $model;
    public $view;

    public function __construct() 
    {
        $this->view = new View();
    }

    abstract public function actionindex();
    abstract public function actionmorethanaver();
    abstract public function actioncatswhitefluffy();
    abstract public function actionmostexpensive();
}
