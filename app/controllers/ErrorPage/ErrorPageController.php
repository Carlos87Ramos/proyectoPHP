<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');

require_once LIBS_ROUTE .'Session.php';

class ErrorPageController extends Controller

{
    private $session;
    

    public function __construct()
    {
        $this->session = Session::getSession();
       
        if ($this->session->getStatus()===1 || empty($this->session->get('cedula')))
                 exit ('acceso denegado');
        
    }  

    public function exec()
    {
        $this->render(__CLASS__);
    }
}