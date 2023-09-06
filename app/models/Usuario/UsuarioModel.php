<?php

class UsuarioModel extends Model 
{

    public function __construct()

    {
        parent::__construct();
    }
    public function addUsuario($params)
    {
        $cedula= $this->db->real_escape_string($params['Cedula']);
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $tipo = $this->db->real_escape_string($params['Tipo']);
       
        
            $sql = "INSERT INTO Usuario (Cedula,Nombre,Tipo,Password, activo) 
                    VALUES ('$cedula','$nombre', '$tipo'aes_encrypt($cedula,'EMT2023'),'1')";  
                     return $this->db->query($sql);
        
        return null;
    }       
}
?>