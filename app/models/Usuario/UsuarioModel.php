<?php

class UsuarioModel extends Model 
{

    public function __construct()

    {
        parent::__construct();
    }
    public function existeUsuario($cedula)
    {
        $sql = "SELECT Cedula FROM Usuario WHERE Cedula = '{$cedula}'";
        $result = $this->db->query($sql);
        
        if (!$result || $result->num_rows == 0) {
            return false;
            return true;
        }
    }
    public function addUsuario($params)
    {
        $cedula= $this->db->real_escape_string($params['Cedula']);
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $tipo = $this->db->real_escape_string($params['Tipo']);
       
        
            $sql = "INSERT INTO Usuario (Cedula,Nombre,Tipo,Password, Activo) 
                    VALUES ('$cedula','$nombre','$tipo',aes_encrypt($cedula,'EMT2023'),'1')"; 
                   
                     return $this->db->query($sql);
       
    }  
    public function listarUsuarios(){
        $sql="SELECT * FROM Usuario";
        return $this->db->query($sql);
    } 
    public Function listarUsuario($cedula)
    {

        $sql = "SELECT * FROM Usuario WHERE Cedula = '{$cedula}'";

        return $this->db->query($sql);
    }
    public function updateUsuario($params)
    {
        $cedula = $this->db->real_escape_string($params['Cedula']);
        $nombre = $this->db->real_escape_string($params['Nombre']);
        $tipo = $this->db->real_escape_string($params['Tipo']);
        $activo = $this->db->real_escape_string($params['Activo']);
        
        $sql = "UPDATE Usuario SET Nombre='{$nombre}', Tipo='{$tipo}', Activo='{$activo}' WHERE Cedula='{$cedula}'";
        
        return $this->db->query($sql);
    }
    public function comprobarPassword($params, $cedula){
        $password = $this->db->real_escape_string($params['OldPassword']);
    
        $sql = "SELECT cast(aes_decrypt(Password, 'EMT2023') as char) as Password from Usuario
        WHERE Cedula = '{$cedula}'";
        
        $result = $this->db->query($sql);
    
        if ($result){
            $info_usuario = $result->fetch_object();
            
            if($info_usuario->Password === $password){
                
                return true;
            }
        }
        return false;
    }
    public function cambiarPasswordUsuario($cedula, $params){
        $password = $this->db->real_escape_string($params['Password']);

        $sql = "UPDATE Usuario SET Password =aes_encrypt($password, 'EMT2023') WHERE Cedula = '{$cedula}'";

        return $this->db->query($sql);
    }
    public function resetearPassword($cedula){

        $sql = "UPDATE Usuario SET Password =aes_encrypt($cedula, 'EMT2023') WHERE Cedula = '{$cedula}'";
        return $this->db->query($sql);
    }
    }

  
?>