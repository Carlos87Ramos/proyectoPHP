<?php

class LoginModel extends Model 
{

    public function __construct()

    {
        parent::__construct();
    }

    
    
    

      public function signIn($cedula)
      {

        $cedula = $this->db->real_escape_string($cedula);
        $sql = "SELECT Cedula,Nombre, cast(aes_decrypt(Password,'EMT2023') as char) as Password, Activo,Tipo From Usuario  WHERE Cedula = '{$cedula}'";
        return $this->db->query($sql);
        
      }

}