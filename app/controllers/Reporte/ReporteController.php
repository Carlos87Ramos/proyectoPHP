<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/Reporte/ReporteModel.php';
require_once ROOT . FOLDER_PATH .'/app/models/Cocina/CocinaModel.php';
require_once LIBS_ROUTE .'Session.php';

class ReporteController extends Controller


{
    private $session;
    private $model;
    private $modelCocina ;
   

    public function __construct()
    {
        $this->session = Session::getSession();
       
        if ($this->session->getStatus()===1 || empty($this->session->get('cedula')))
                 exit ('acceso denegado');
        $this->model = new ReporteModel();
        $this->modelCocina = new CocinaModel();
    }

    public function exec()
    {
        $params = array('nombre'=>$this->session->get('nombre'));
        $this->render(__CLASS__,$params);}

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
            $contador++;
        }
      
        $params = array('nombre'=>$this->session->get('nombre'),'info_producto' => $info_producto,'show_listarProductos'=> true,'message_type' => $message_type,'message'=> $message);
        $this->render(__CLASS__,$params);
        }

        public function listarRegistrosActuales($message = '', $message_type= 'success')
{
$result=$this->model->listarRegistrosActuales();
$contador = 0;
$info_registro = [];

while ($row = $result->fetch_assoc())
{
    
    $info_registro[$contador][1]= $row['NombreProducto'];
    $info_registro[$contador][2]= $row['Foto'];
    $info_registro[$contador][3]= $row['Cedula'];
    $info_registro[$contador][4]= $row['NombreUsuario'];
    $info_registro[$contador][5]= $row['Tipo'];
    $info_registro[$contador][6]= $row['Cantidad'];
     $info_registro[$contador][7]= $row['Fecha'];
    $contador++;
}

$params = array('nombre'=>$this->session->get('nombre'),'info_registro' => $info_registro,'show_listarRegistros'=> true,'message_type' => $message_type,'message'=> $message);
$this->render(__CLASS__,$params);
}
public function listarRegistrosPorFecha($request_params,$message = '', $message_type= 'success')
{
    $result=$this->model->listarRegistrosPorFecha($request_params);
    $contador = 0;
    $info_registro = [];
    
    while ($row = $result->fetch_assoc())
    {
        
        $info_registro[$contador][1]= $row['NombreProducto'];
        $info_registro[$contador][2]= $row['Foto'];
        $info_registro[$contador][3]= $row['Cedula'];
        $info_registro[$contador][4]= $row['NombreUsuario'];
        $info_registro[$contador][5]= $row['Tipo'];
        $info_registro[$contador][6]= $row['Cantidad'];
         $info_registro[$contador][7]= $row['Fecha'];
        $contador++;
    }
    
    $params = array('nombre'=>$this->session->get('nombre'),'info_registro' => $info_registro,'show_listarRegistros'=> true,'message_type' => $message_type,'message'=> $message , 'fecha_inicial'=>$request_params['fechaInicial'],'fecha_final'=>$request_params['fechaFinal']);
    $this->render(__CLASS__,$params);
    }
}
  
 