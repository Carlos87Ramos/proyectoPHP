<?php 
defined('BASEPATH') or exit( ' No se permite el acceso directo');
class RegistroModel extends Model
{
    public function __construct()
    {
        parent::__construct();//usando el constructor de la clase padre Model.
    }
    public function listarRegistros()
    {
        $sql = "SELECT * FROM Registro";
        return $this->db->query($sql);
    }

    public function listarRegistro($id)

    {
        $sql = "SELECT * FROM Registro WHERE Id='{$id}'";
        return $this->db->query($sql);
    }
    public function addRegistro($params)
    {
        $tipo = $this->db->real_escape_string($params['Tipo']);
        $cantidad = $this->db->real_escape_string($params['Cantidad']);
        $id= $this->db->real_escape_string($params['Id']);
        
        $sql = "INSERT INTO Registro (Tipo, Cantidad,Id_Producto) values ('$tipo','$cantidad','$id')";
        return $this->db->query($sql);
       
    } 
    public function registrarProductosMenu($params)
    {
        $id = $this->db->real_escape_string ($params['Id']);
        $sql= " SELECT* FROM Receta WHERE id_Menu = $id";
        $result = $this->db->query($sql);
        $contador = 0;
        $values = '';
        while ($row = $result->fetch_assoc())
        {
            
            if ($contador == 0) 
         
                    $values .= "('Salida', " . $row['Cantidad'] . ", " . $row['Id_Producto'] . ")";
                
                else 
                {
                    $values .= ", ('Salida', " . $row['Cantidad'] . ", " . $row['Id_Producto'] . ")";
                }
                $contador++;
           
            }
           
         $sql = "INSERT INTO Registro (Tipo, Cantidad, Id_Producto) values".$values ;
        return $this->db->query($sql);
    }
}
