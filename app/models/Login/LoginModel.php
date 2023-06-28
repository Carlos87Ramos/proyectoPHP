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
        $sql = "SELECT * from Usuario  WHERE Cedula = '{$cedula}'";
        return $this->db->query($sql);
        
      }

}