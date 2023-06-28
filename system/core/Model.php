<?php

defined('BASEPATH') or exit ('no se permite acceso directo');
class Model{

    protected$db;
    public function __construct()
    {
        //inicializa la conexion con la base de datos 

        $this->db = new Mysqli(HOST, USER ,PASSWORD, DB_NAME);
        mysqli_set_charset($this->db,"utf8");
    }
    public function __destruct()
    {
        $this-> db-> close();
    }
}