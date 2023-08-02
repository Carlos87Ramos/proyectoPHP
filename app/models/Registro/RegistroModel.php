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
}