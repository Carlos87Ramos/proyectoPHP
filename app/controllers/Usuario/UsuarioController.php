



<?php
defined('BASEPATH') or exit('No se permite acceso directo');



require_once ROOT .FOLDER_PATH .'/app/models/Usuario/UsuarioModel.php';
require_once LIBS_ROUTE .'Session.php';

class UsuarioController extends Controller
{

    private $model;
    private $session;
    
    public function __construct()
    {
        $this->model = new UsuarioModel();
        $this->session = Session::getSession();
    }
    
    public function exec()
    {
       $this->render(__CLASS__);
    }
    public function addUsuarioForm(){

        $params = array('nombre'=>$this->session->get('nombre'),'show_addUsuarioForm' => true);
        $this->render(__CLASS__, $params);

    }
    public function adUsuario($request_params)
    {
        
        $result=$this->model->addUsuario($request_params);
    }
}
?>