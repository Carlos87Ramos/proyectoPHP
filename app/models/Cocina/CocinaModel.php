
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
    public function deleteProducto($Id)
    {

      //Buscar registros de stock del producto 

      $sql = "SELECT Id_Poducto FROM Registro  WHERE Id_Producto ={$Id}";
      $result = $this->db->query($sql);

      //SI no exixte el producto  elimino el Producto

      if ($result) {
        $sql = "DELETE FROM Producto WHERE Id = {$Id}";
        return $this->db->query($sql);
      }
    }
    public function addProducto($params)
    {
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $descripcion = $this->db->real_escape_string($params['Descripcion']);
       
       
         
      if ($this->addImagen($params['Foto'])) {

        $name = $params['Foto']['name'];
        $sql = "INSERT INTO Producto  (Nombre , Descripcion, Cantidad, Foto)VALUES('$nombre', '$descripcion' , '0', '$name')";
        
      }

      return $this->db->query($sql);
       

    }
}