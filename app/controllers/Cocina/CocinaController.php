<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/Cocina/CocinaModel.php';
require_once ROOT . FOLDER_PATH .'/app/models/Registro/RegistroModel.php';
require_once LIBS_ROUTE .'Session.php';

class CocinaController extends Controller

{
    private $session;
    private $model;
    private $modelRegistro;

    public function __construct()
    {
        $this->session = Session::getSession();
       
        if ($this->session->getStatus()===1 || empty($this->session->get('cedula')))
                 exit ('acceso denegado');
        $this->model = new CocinaModel();
        $this->modelRegistro = new RegistroModel();
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
            $info_menu[$contador][6]= $row['CantidadPersonas'];
            $contador++;
        }
        $params = array('nombre'=>$this->session->get('nombre'),'info_menu' => $info_menu ,'show_listarMenus'=> true,'message_type'=>$message_type,'message'=> $message);
        $this->render(__CLASS__, $params);
    }

    public function addMenuForm()
    {
            $params=array('nombre'=>$this->session->get('nombre'),'show_addMenuForm'=> true);
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

    public function listarMenu($Id , $message = '', $message_type= 'success')
    {
       
       $result = $this->model->listarMenu($Id);
       $info_menu = !$result->num_rows ? $info_menu= array():$info_menu = $result->fetch_object();

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
           $info_producto_Receta [$contador][6]= $row['Tipo'];
           $contador++;
       }

        $params= array ('nombre'=>$this->session->get('nombre'),'info_menu'=> $info_menu, 'show_aplicar_menu'=> true,'info_producto_Receta'=>$info_producto_Receta ,'message_type'=>$message_type,'message'=> $message);
        $this->render(__CLASS__, $params);

    }

    public function editarMenu($Id)
    {
       
       $result = $this->model->listarMenu($Id);
       $info_menu = !$result->num_rows ? $info_menu= array():$info_menu = $result->fetch_object();

        $params= array ('nombre'=>$this->session->get('nombre'),'info_menu'=> $info_menu, 'show_editar_menu'=> true);
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
    
    // funcion dar de baja y chekear las cantidades
    public function aplicarMenu($request_params)
    {
        $result=$this->model->checkearCatidadades($request_params);
       
        if(mysqli_num_rows($result) === 0)
        {
            $result =$this->model->actualizarCantidades($request_params);
            if($result)
            {
                $result= $this->modelRegistro->registrarProductosMenu($request_params , $this->session->get('cedula'));

                return $this->listarMenus("Menu aplicado con exito . los productos fueron dados de baja correctamente");
            }
          
        }
        $this->listarMenu($request_params['Id'],"Error conpruebe las cantidades disponibles ",'warning');
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
            $info_producto [$contador][6]= $row['Tipo'];
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
            $info_producto_Receta [$contador][6]= $row['Tipo'];
            $contador++;
        }

       $result = $this->model->listarMenu($Id);
       $info_menu = !$result->num_rows ? $info_menu= array():$info_menu = $result->fetch_object();
      
        $params = array('nombre'=>$this->session->get('nombre'),'info_producto_Receta' => $info_producto_Receta,'info_producto' => $info_producto,'show_listarProductosReceta'=> true,'message_type' => $message_type,'message'=> $message,'info_menu'=>$info_menu);
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

    public function editarCantidadProductoReceta($request_params)
    {
        $result = $this->model->editarCantidadProductoReceta($request_params);  
        if (!$result) 
            return $this->listarMenu($request_params['Id'], "Hubo un error al actualizar la cantidad",'warning');
        
            $this->listarMenu($request_params['Id'], "Cantidad actualizada correctamente");
        
    }
  
    public function addProductoForm()
    {
            $params=array('nombre'=>$this->session->get('nombre'),'show_addProductoForm'=> true);
            $this->render(__CLASS__, $params);

    }
 
    public function addProducto($request_params)
    {

       
        $result = $this->model->addProducto($request_params);
        if (!$result) {
            return $this->listarProductos("Hubo un error al agregar el Producto.Compruebe el formato de la imagen.", 'warning');
        }
        $this->listarProductos("  Producto  agregado correctamente");

        
    }
    public function listarProductos($message = '', $message_type= 'success')
	{
		$busqueda = $this->model->listarProductos();
		/*$contador = 0;
		$info_producto = [];
		while ($row = $res->fetch_assoc())
		{
			$info_producto[$contador][1] = $row['Id'];
			$info_producto[$contador][2] = $row['Nombre'];
			$info_producto[$contador][3] = $row['Descripcion'];
			$info_producto[$contador][4] = $row['Foto'];
			$info_producto[$contador][5] = $row['Cantidad'];
			$info_producto[$contador][6] = $row['Tipo'];
			$contador++;
		}*/
		$params = array('nombre'=> $this->session->get('nombre'), 'busqueda' => $busqueda, 'show_listarProductos' => true, 'message_type' => 
		$message_type, 'message' => $message);
		$this->render(__CLASS__, $params);
	}

    public function listarProducto($Id)
    {
       
       $result = $this->model->listarProducto($Id);
       $info_producto = !$result->num_rows ? $info_producto= array():$info_producto = $result->fetch_object();

        $params= array ('nombre'=>$this->session->get('nombre'),'info_producto'=> $info_producto, 'show_editar_producto'=> true);
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