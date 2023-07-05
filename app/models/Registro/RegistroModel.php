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
        $fecha = $this->db->real_scape_string($params['Fecha']);
        $sql = "INSERT INTO Registro (Tipo, Cantidad, Fecha) values ('$tipo','$cantidad','$fecha')";
        return $this->db->query($sql);
       
    } 
}