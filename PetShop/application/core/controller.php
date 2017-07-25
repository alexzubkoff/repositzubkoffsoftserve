<?php

abstract class Controller {

    public $model;
    public $view;

    public function __construct() 
    {
        $this->view = new View();
    }

    abstract public function action_index();
    abstract public function action_morethanaver();
    abstract public function action_catswhitefluffy();
    abstract public function action_mostexpensive();
}
