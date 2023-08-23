<?php 
defined('BASEPATH') or exit( ' No se permite el acceso directo');
class ReporteModel extends Model
{
    public function __construct()
    {
        parent::__construct();//usando el constructor de la clase padre Model.
    }
  public function listarRegistrosActuales()
  {
    $sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
           FROM Producto p, Usuario u,Registro r
           WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario ";

           return $this->db->query($sql);
  }
  public function listarRegistrosPorFecha($params)
  {


    $fecha_inicio = $this->db->real_escape_string($params['fechaInicial']);

    $fecha_fin = $this->db->real_escape_string($params['fechaFinal']);

    $sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
            FROM Producto p, Usuario u,Registro r
             WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario and date_format(Fecha,\"%Y-%m-%d\")>='{$fecha_inicio} ' and date_format(Fecha,\"%Y-%m-%d\")<= '{$fecha_fin}'";
 
    return $this->db->query($sql);
  }
  public function listarUsuarios()
  {
    $sql= "SELECT Cedula , Nombre FROM Usuario";
    return $this->db->query($sql);
  }
} 