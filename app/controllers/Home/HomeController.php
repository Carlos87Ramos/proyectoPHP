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
       $this->listarProductos();
    }
    public function listarProductos()
    {
        $res = $this->model->listarProductos();
        $contador = 0;
        while ($row = $res->fetch_assoc())
        {
            $info_producto[$contador][1]= $row['ID'];
            $info_producto[$contador][2]= $row['Nombre'];
            $info_producto[$contador][3]= $row['Descripcion'];
            $info_producto[$contador][4]= $row['Foto'];
            $info_producto[$contador][5]= $row['Cantidad'];
            $contador++;
        }
        $params = array('info_producto' => $info_producto);
        $this->render(__CLASS__, $params);
    }

}