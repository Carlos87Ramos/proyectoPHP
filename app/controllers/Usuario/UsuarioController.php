<?php
defined('BASEPATH') or exit('No se permite acceso directo');



require_once ROOT .FOLDER_PATH .'/app/models/Usuario/UsuarioModel.php';
require_once ROOT .FOLDER_PATH .'/app/controllers/Cocina/CocinaController.php';
require_once LIBS_ROUTE .'Session.php';


class UsuarioController extends Controller
{

    private $model;
    private $session;
    private $cocinaController;
    
    public function __construct()
    {
        $this->model = new UsuarioModel();
        $this->session = Session::getSession();
        $this->cocinaController = new CocinaController();
    }
    
    public function exec()
    {
       $this->listarUsuarios();
    }
    public function addUsuarioForm(){

        $params = array('nombre'=>$this->session->get('nombre'),'show_addUsuarioForm' => true);
        $this->render(__CLASS__, $params);

    }
    public function addUsuario($request_params)
    {
       
        if (!$this->model->existeUsuario($request_params['Cedula'])){

           $result = $this->model->addUsuario($request_params);
       
              if (!$result) {
                 return $this->listarUsuarios("Hubo un error al agregar el Usuario", "warning");
            
        }
        $this->listarUsuarios("Usuario dado de alta correctamente"); 
     }
    $this->listarUsuarios(" Ya existe un Usuario con esa cedula","warning");
    }

    public function listarUsuarios($message='',$message_type='success')
    {
        $result = $this->model->listarUsuarios();
        $contador = 0;
       $info_Usuario= [];
       while ($row = $result->fetch_assoc())
       {
           $info_Usuario [$contador][1]= $row['Cedula'];
           $info_Usuario [$contador][2]= $row['Nombre'];
           $info_Usuario [$contador][3]= $row['Tipo'];
           $info_Usuario [$contador][4]= $row['Activo'];
        
           $contador++;
       }

        $params= array ('nombre'=>$this->session->get('nombre'),'info_usuario'=> $info_Usuario, 'show_listar_usuario'=> true,'message_type'=>$message_type,'message'=> $message);
        $this->render(__CLASS__, $params);


    }
    public function listarUsuario($cedula)
    {

$result= $this->model->listarUsuario($cedula);
$info_usuario = !$result->num_rows ? $info_usuario= array():$info_usuario = $result->fetch_object();

        $params= array ('nombre'=>$this->session->get('nombre'),'info_usuario'=> $info_usuario, 'show_editar_usuario'=> true);
        
  
 
        $this->render(__CLASS__, $params);

    }
    
       public function updateUsuario($request_params)
{
    $result = $this->model->updateUsuario($request_params);
    if (!$result) {
        return $this->listarUsuarios("Hubo un error al actualizar el Usuario", 'warning');
    }
    
    // En caso de éxito, también redirigir a la lista de usuarios
    return $this->listarUsuarios("Usuario actualizado correctamente");
}
    public function cambiarPassword($message='',$message_type='success')
    {
        
        
        $params= array ('nombre'=>$this->session->get('nombre'),
         'show_editar_password'=> true,'message_type'=>$message_type,'message'=> $message);
        
        $this->render(__CLASS__, $params);

    }
    public function actualizarPassword($request_params){
        if ($request_params ['Password'] === $request_params ['NewPassword']){
            if ($this->model->comprobarPassword($request_params, $this->session->get('cedula'))){
                $result =  $this->model->cambiarPasswordUsuario($this->session->get('cedula'), $request_params);
               
                if($result)
                {if($this->session->get('tipo')=='Director')
                    $this->listarUsuarios("Contraseña actualizada correctamente");
                    else{$this->cocinaController->listarMenus("Contraseña actualizada correctamente ");}
                 } else
                    $this->cambiarPassword("ocurrió un error al actualizar la contraseña", "warning");
            }else
                $this->cambiarPassword("Contraseña actual incorrecta", "warning");
        }else
            $this->cambiarPassword("Las contraseñas no coinciden", "warning");

        }
        

        public function resetearPassword($cedula){ 

            $result = $this->model->resetearPassword($cedula);

            if($result)
                $this->listarUsuarios("Contraseña del Usuario:". $cedula . " reseteada correctamente ");

            else 
            $this->listarUsuarios("Hubo un error al actualizar la contraseña", "warning");
            }
}


    
?>