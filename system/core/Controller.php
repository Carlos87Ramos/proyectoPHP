<?php

    defined('BASEPATH') or exit('No se permite el acceso directo');
    
    abstract class Controller {

private $view;

# inicializa la vista 

 public function render($controller_name = '', $params = array())
 {
    $this->view = new View($controller_name , $params);
 }
 abstract public function exec();

    }