
<?php 
defined('BASEPATH') or exit( ' No se permite el acceso directo');
class CocinaModel extends Model
{
    public function __construct()
    {
        parent::__construct();//usando el constructor de la clase padre Model.
    }
    public function listarMenus()
    {
        $sql = "SELECT * FROM Menu";
        return $this->db->query($sql);
    }

    public function listarMenu($id)

    {
        $sql = "SELECT * FROM Menu WHERE Id='{$id}'";
        return $this->db->query($sql);
    }

    public function addMenu($params)
    {
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $descripcion = $this->db->real_escape_string($params['Descripcion']);
        $observaciones= $this->db->real_escape_string($params['Observaciones']);
       
         
      if ($this->addImagen($params['Foto'])) {

        $name = $params['Foto']['name'];
        $sql = "INSERT INTO Menu  (Nombre , Descripcion, Observaciones, Foto)VALUES('$nombre', '$descripcion' , '$observaciones', '$name')";
        
      }

      return $this->db->query($sql);
       

    }
    


    public function addImagen($params)

    {
        if($params['size'] < 30000000){
            if ($params['type'] =='image/jpg'||$params['type'] =='image/jpeg'|| $params['type'] =='image/png' || $params['type'] =='image/gif') 
            {
              //Muevo la imagen de la carpeta temporal a la carpeta de destino
              move_uploaded_file($params['tmp_name'],PATH_UPLOAD_IMAGES.$params['name']);

              return true;
            }
        }

        return false;
    }  

    public function deleteMenu($Id)
    {

      //Borra las recetas asociadas al menu

      $sql = "DELETE FROM Receta  WHERE Id_Menu={$Id}";
      $result = $this->db->query($sql);
      // Si se iliminaron las recetas , elimino el menu
      if ($result) {
        $sql = "DELETE FROM Menu WHERE Id = {$Id}";
        return $this->db->query($sql);
      }
    }



    public function updateMenu($params)

    {
      $nombre = $this->db->real_escape_string($params['Nombre']);
      $descripcion = $this->db->real_escape_string($params['Descripcion']);
      $observaciones= $this->db->real_escape_string($params['Observaciones']);
       $id = $this->db->real_escape_string($params['Id']);
       
    
if ($this->addImagen($params['Foto']))

{
  $name = $params['Foto']['name'];
}else
{
  $name = $this->db->real_escape_string($params['nameFoto']);
  
}
$sql = "UPDATE Menu SET Nombre='{$nombre}', Descripcion='{$descripcion}' , Observaciones='{$observaciones}', Foto='{$name}' WHERE Id = '{$id}'";
     
        
      return $this->db->query($sql);
      
     

    }
    public function listarProductos()
    {
        $sql = "SELECT * FROM Producto";
        return $this->db->query($sql);
    }
    public function listarProductosNotInreceta($id_menu)

    {
    $sql = "SELECT  * FROM Producto   WHERE Id Not in 
    (SELECT id_Producto FROM Receta WHERE Id = Id_Producto and Id_Menu = $id_menu)";

    return $this->db->query($sql);
    }
    public function listarProductosReceta($id_menu)

    {
    $sql = "SELECT p.ID,p.Nombre,p.Descripcion,p.Foto,r.Cantidad FROM Producto p , Receta r WHERE Id  In 
    (SELECT id_Producto FROM Receta WHERE p.ID = Id_Producto and Id_Menu = $id_menu and Id_Menu = r.Id_Menu and Id_producto =r.Id_producto )";

     return $this->db->query($sql);
    }
    public function listarProducto($id)

    {
        $sql = "SELECT * FROM Producto WHERE Id='{$id}'";
        return $this->db->query($sql);
    }
    public function updateProducto($params)

    {
      $nombre = $this->db->real_escape_string($params['Nombre']);
      $descripcion = $this->db->real_escape_string($params['Descripcion']);
      $id = $this->db->real_escape_string($params['Id']);
       
    
if ($this->addImagen($params['Foto']))

{
  $name = $params['Foto']['name'];
}else
{
  $name = $this->db->real_escape_string($params['nameFoto']);
  
}
$sql = "UPDATE Producto SET Nombre='{$nombre}', Descripcion='{$descripcion}' ,Foto='{$name}' WHERE Id = '{$id}'";
     
        
      return $this->db->query($sql);
    
    }
    public function addProducto($params)
    {
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $descripcion = $this->db->real_escape_string($params['Descripcion']);
        $tipo = $this->db->real_escape_string($params['Tipo']);
        
        if ($this->addImagen($params['Foto']))
        {
            $name = $params['Foto']['name'];
            $sql = "INSERT INTO Producto (Nombre,Descripcion,Cantidad,Foto, Tipo) 
                    VALUES ('$nombre', '$descripcion','0', '$name', '$tipo')";  
        }
        return $this->db->query($sql);
    }       


    public function deleteProducto($Id)
    {

      //Buscar registros de stock del producto 

      $sql = "SELECT Id_Poducto FROM Registro  WHERE Id_Producto ={$Id}";
      $result = $this->db->query($sql);

      //SI no exixte el producto , elimino el Producto.

      if (!$result || !$this->db->affected_rows) {
        $sql = "DELETE FROM Producto WHERE Id = {$Id}";
        return $this->db->query($sql);
      }
    }
    public function addCantidadProducto($params)
    {
        $id = $this->db->real_escape_string($params['Id']);
        $addCantidad = $this->db->real_escape_string($params['Cantidad']);

        // Obtener cantidad actual de producto

        $sql= "SELECT Cantidad FROM Producto WHERE ID = '{$id}'";
        if ($params['Tipo']==='Entrada') 
          $cantidad = $this->db->query($sql)->fetch_object()->Cantidad + $addCantidad;
          else 
            $cantidad = $this->db->query($sql)->fetch_object()->Cantidad - $addCantidad;
          
            $sql = "UPDATE Producto SET Cantidad= '{$cantidad}'WHERE ID = '{$id}'";
        
       return $this->db ->query($sql);
       
    }
    public function agregarProductoReceta($params)
    {
      $id = $this->db->real_escape_string($params['Id']);
      $idProducto = $this->db->real_escape_string($params['IdProducto']);
      $cantidad = $this->db->real_escape_string($params['Cantidad']);

      $sql = "INSERT INTO Receta (Id_Menu,Id_Producto, Cantidad) 
      VALUES ($id,$idProducto, $cantidad)";
      return $this->db->query($sql);
    }
    public function editarCantidadProductoReceta($params)

   {
    $id = $this->db->real_escape_string($params['Id']);
    $idProducto = $this->db->real_escape_string($params['IdProducto']);
    $cantidad = $this->db->real_escape_string($params['Cantidad']);

     $sql = "UPDATE Receta SET Cantidad = $cantidad WHERE Id_Menu = $id and Id_Producto = $idProducto";
     return $this->db->query($sql);
   } 
      public function eliminarProductoReceta($params)
    {
      $id = $this->db->real_escape_string($params['Id']);
      $idProducto = $this->db->real_escape_string($params['IdProducto']);
      $sql = "DELETE FROM Receta WHERE Id_menu = $id and  Id_Producto = $idProducto";
      return $this->db->query($sql);
    }
   
}