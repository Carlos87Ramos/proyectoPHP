<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/Cocina/CocinaModel.php';
require_once LIBS_ROUTE .'Session.php';

class CocinaController extends Controller


{
    private $session;
    private $model;

    public function __construct()
    {
        $this->session = new Session();
        $this->session->init();
        if ($this->session->getStatus()===1 || empty($this->session->get('cedula')))
                 exit ('acceso denegado');
        $this->model = new CocinaModel();
    }  

    public function exec()
    {
        $this->listarMenus();
    }
    public function listarMenus($message = '', $message_type= 'success')
    {
        $res = $this->model->listarMenus();
        $contador = 0;
        $info_menu = [];
        while ($row = $res->fetch_assoc())
        {
            $info_menu[$contador][1]= $row['ID'];
            $info_menu[$contador][2]= $row['Nombre'];
            $info_menu[$contador][3]= $row['Descripcion'];
            $info_menu[$contador][4]= $row['Foto'];
            $info_menu[$contador][5]= $row['Observaciones'];
            $contador++;
        }
        $params = array('info_menu' => $info_menu ,'show_listarMenus'=> true,'message_type'=>$message_type,'message'=> $message);
        $this->render(__CLASS__, $params);
    }
    public function addMenuForm()
    {
            $params=array('show_addMenuForm'=> true);
            $this->render(__CLASS__, $params);



    }

    public function addMenu($request_params)
    {

       
        $result = $this->model->addMenu($request_params);
        if (!$result) {
            return $this->listarMenus("Hubo un error al agregar el Menú", 'warning');
        }
        $this->listarMenus("  Menú agregado correctamente");

        
    }
    public function listarMenu($Id)
    {
       
       $result = $this->model->listarMenu($Id);
       $info_menu = !$result->num_rows ? $info_menu= array():$info_menu = $result->fetch_object();

        $params= array ('info_menu'=> $info_menu, 'show_editar_menu'=> true);
        $this->render(__CLASS__, $params);

    }
    // funcion para eliminar un menu

    public function deleteMenu($Id)
    {
        $result = $this->model->deleteMenu($Id);
        if (!$result) {
            return $this->listarMenus("Hubo un error al eliminar el Menú", 'warning');
        }
        $this->listarMenus("Menú eliminado correctamente");
  
    

    }
    public function updateMenu($request_params)
    {
        $result = $this->model->updateMenu($request_params);
        if (!$result) {
            return $this->listarMenus("Hubo un error al actualizar el Menú", 'warning');
        }
        $this->listarMenus("Menú actualizado correctamente");

    
    }

     public function addProductosReceta($Id,$message = '', $message_type= 'success')

    {
        $res = $this->model->listarProductosNotInReceta($Id);
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
        $res = $this->model->listarProductosReceta($Id);
        $contador = 0;
        $info_producto_Receta= [];
        while ($row = $res->fetch_assoc())
        {
            $info_producto_Receta [$contador][1]= $row['ID'];
            $info_producto_Receta [$contador][2]= $row['Nombre'];
            $info_producto_Receta [$contador][3]= $row['Descripcion'];
            $info_producto_Receta [$contador][4]= $row['Foto'];
            $info_producto_Receta [$contador][5]= $row['Cantidad'];
            $contador++;
        }

       $result = $this->model->listarMenu($Id);
       $info_menu = !$result->num_rows ? $info_menu= array():$info_menu = $result->fetch_object();
      
        $params = array('info_producto_Receta' => $info_producto_Receta,'info_producto' => $info_producto,'show_listarProductosReceta'=> true,'message_type' => $message_type,'message'=> $message,'info_menu'=>$info_menu);
        $this->render(__CLASS__,$params);
    }
    public function agregarProductoReceta($request_params)
    {

     $result = $this->model->agregarProductoReceta($request_params);
      if (!$result) 

    return $this->addProductosReceta($request_params['Id'],"Hubo un error al agregar el producto",'warning');
    $this->addProductosReceta($request_params['Id'], "Producto agregado  correctamente");
    } 
    public function eliminarProductoReceta($request_params)
    {
        $result = $this->model->eliminarProductoReceta($request_params);
        if (!$result) {
            return $this->addProductosReceta("Hubo un error al agregar el Producto", 'warning');
        }
        $this->addProductosReceta($request_params['Id'],"  Producto eliminado correctamente");

    }
  
    public function addProductoForm()
    {
            $params=array('show_addProductoForm'=> true);
            $this->render(__CLASS__, $params);

    }
 
    public function addProducto($request_params)
    {

       
        $result = $this->model->addProducto($request_params);
        if (!$result) {
            return $this->listarProductos("Hubo un error al agregar el Producto", 'warning');
        }
        $this->listarProductos("  Producto  agregado correctamente");

        
    }
    public function listarProductos($message = '', $message_type= 'success')
    {
        $res = $this->model->listarProductos();
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
      
        $params = array('info_producto' => $info_producto,'show_listarProductos'=> true,'message_type' => $message_type,'message'=> $message);
        $this->render(__CLASS__,$params);
    }

    public function listarProducto($Id)
    {
       
       $result = $this->model->listarProducto($Id);
       $info_producto = !$result->num_rows ? $info_producto= array():$info_producto = $result->fetch_object();

        $params= array ('info_producto'=> $info_producto, 'show_editar_producto'=> true);
        $this->render(__CLASS__, $params);

    }
    public function updateProducto($request_params)
    {
        $result = $this->model->updateProducto($request_params);
        if (!$result) {
            return $this->listarProductos("Hubo un error al actualizar el Producto", 'warning');
        }
        $this->listarProductos("Producto actualizado correctamente");

    
    }
    public function deleteProducto($Id)
    {
        $result = $this->model->deleteProducto($Id);
        if (!$result) {
            return $this->listarProductos("No se puede  eliminar el Producto", 'warning');
        }
        $this->listarProductos("Producto eliminado correctamente");
  
    

    }

    
}