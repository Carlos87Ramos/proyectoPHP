<?php


defined('BASEPATH') or exit ('no se permite acceso directo');

class HomeModel extends Model
{


    public function __construct()
    {
        parent::__construct();//usando el constructor de la clase padre Model.
    }
    public function listarProductos()
    {
        $sql = "SELECT * FROM Productos";
        return $this->db->query($sql);
    }
}
