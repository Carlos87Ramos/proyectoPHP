



<?php
defined('BASEPATH') or exit('No se permite acceso directo');



require_once ROOT .FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

class LoginController extends Controller
{

    private $model;
    private $session;
    
    public function __construct()
    {
        $this->model = new LoginModel();
        $this->session = new Session();
    }
    
    public function exec()
    {
       $this->render(__CLASS__);
    }
    public function signIn($request_params)
    {
        
           
           
            $result = $this->model->signIn($request_params['cedula']);
            if (!$result->num_rows)
             {
                return $this->renderErrorMessage("La cedula {$request_params['cedula']} no fue encontrada");
            }
            $result = $result->fetch_object();
            
            if ($request_params['password'] === $result->Password)
             {
                $this->session->init();
                $this->session->add('cedula', $result->Cedula);
                $this->session->add('nombre', $result->Nombre);
                
                if ($result->Tipo == 'Cocinero')
         
                header('location: /proyectoPHP/Home');

            } else
             {

                return $this->renderErrorMessage("La Contraseña es incorrecta ");
        
            }
        
    }
   private function renderErrorMessage($message)
{
    
    $params = array('error_message'=> $message);
    $this->render(__CLASS__, $params);
    }
}


