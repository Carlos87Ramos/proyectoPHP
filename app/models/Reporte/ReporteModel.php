<?php 
defined('BASEPATH') or exit( ' No se permite el acceso directo');
class ReporteModel extends Model
{
    public function __construct()
    {
        parent::__construct();//usando el constructor de la clase padre Model.
    }
    // Lista registro del mes actual
  public function listarRegistrosActuales()
  {

    $sql = "SELECT p.Nombre as NombreProducto, Foto, Cedula, u.Nombre as NombreUsuario, r.Tipo, r.Cantidad, Fecha
        FROM Producto p, Usuario u, Registro r
        WHERE p.ID = r.Id_Producto
          AND u.Cedula = r.ci_Usuario
          AND MONTH(Fecha) = MONTH(CURDATE())order by Fecha desc";

return $this->db->query($sql);

  
  }
  public function listarRegistrosPorFecha($params)
  {


    $fecha_inicio = $this->db->real_escape_string($params['fechaInicial']);

    $fecha_fin = $this->db->real_escape_string($params['fechaFinal']);

    $sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
            FROM Producto p, Usuario u,Registro r
             WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario and date_format(Fecha,\"%Y-%m-%d\")>='{$fecha_inicio} ' and date_format(Fecha,\"%Y-%m-%d\")<= '{$fecha_fin}' order by Fecha desc";
 
    return $this->db->query($sql);
  }
  public function listarUsuarios()
  {
    $sql= "SELECT Cedula , Nombre FROM Usuario";
    return $this->db->query($sql);
  }
  public function listarProductos()
  {
    $sql= "SELECT ID , Nombre FROM Producto";
    return $this->db->query($sql);
  }
  
  public function listarRegistrosPorUsuario($params)
  {
$cedula = $this->db->real_escape_string($params['cedula']);

$sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
FROM Producto p, Usuario u,Registro r
 WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario and r.ci_Usuario = '{$cedula}' order by Fecha desc";

return $this->db->query($sql);

  }

  public function listarRegistrosPorProducto($params)
  {
$ID = $this->db->real_escape_string($params['producto']);

$sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
FROM Producto p, Usuario u,Registro r
 WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario and r.ID_producto = '{$ID}' order by Fecha desc";

return $this->db->query($sql);

  }
  public function listarRegistrosPorTipo($params)
  {
$tipo = $this->db->real_escape_string($params['tipo']);

$sql = "SELECT p.Nombre as NombreProducto,Foto,Cedula,u.Nombre as NombreUsuario,r.Tipo,r.Cantidad,Fecha
FROM Producto p, Usuario u,Registro r
 WHERE p.ID = r.Id_Producto and u.Cedula = r.ci_Usuario and r.Tipo = '{$tipo}' order by Fecha desc";

return $this->db->query($sql);

  }
} 