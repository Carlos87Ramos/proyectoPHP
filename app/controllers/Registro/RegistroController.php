<?php

defined ('BASEPATH') or exit ('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/Registro/RegistroModel.php';
require_once ROOT . FOLDER_PATH .'/app/models/Cocina/CocinaModel.php';
require_once LIBS_ROUTE .'Session.php';

class RegistroController extends Controller


{
    private $session;
    private $model;
    private $modelCocina;


    public function __construct()
    {
        $this->session = new Session();
        $this->session->init();
        if ($this->session->getStatus()===1 || empty($this->session->get('cedula')))
                 exit ('acceso denegado');
        $this->model = new RegistroModel();
        $this->modelCocina = new CocinaModel();

    }  

    public function exec()
    {
      $this->listarProductos();  
    }

    public function listarProductos($message = '', $message_type= 'success')
    {
        $res = $this->modelCocina->listarProductos();
        $contador = 0;
        $info_producto= [];
        while ($row = $res->fetch_assoc())
        {
            $info_producto [$contador][1]= $row['ID'];
            $info_producto [$contador][2]= $row['Nombre'];
            $info_producto [$contador][3]= $row['Descripcion'];
            $info_producto [$contador][4]= $row['Foto'];
            $info_producto [$contador][5]= $row['Cantidad'];
            $info_producto [$contador][6]= $row['Tipo'];
            $contador++;
        }
      
        $params = array('info_producto' => $info_producto,'show_listarProductos'=> true,'message_type' => $message_type,'message'=> $message);
        $this->render(__CLASS__,$params);
    }

    public function listarProducto($Id)
    {
       
       $result = $this->modelCocina->listarProducto($Id);
       $info_producto = !$result->num_rows ? $info_producto= array():$info_producto = $result->fetch_object();

        $params= array ('info_producto'=> $info_producto, 'show_editar_producto'=> true);
        $this->render(__CLASS__, $params);

    }

    public function registroProducto($request_params)
    {
  $result = $this->model->addRegistro($request_params);
  if ($result)
  {
    
    $result = $this->modelCocina->addCantidadProducto($request_params);
  }
  $this->listarProductos('Stock actualizado con exito');

    }
}