<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Home/HomeModel.php';
class HomeController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new HomeModel();
    }
    
    public function exec()
    {
       $this->render(__CLASS__);
    }
   

}