<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');

require_once ROOT . FOLDER_PATH . '/app/views/template/body.php';

$filtro == 'Fecha' ? require 'app/views/Reporte/filtroFecha.php' :'';
$filtro == 'Usuario' ? require 'app/views/Reporte/filtroUsuario.php' :'';
$filtro == 'Tipo' ? require 'app/views/Reporte/filtroTipo.php' :'';
$filtro == 'Producto' ? require 'app/views/Reporte/filtroProducto.php' :'';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movimientos Actuales</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  @import url('https://fonts.googleapis.com/css?family=Numans');

  *{
    font-family: Numans;
  }
@media print {
   @page {
     margin-left: 0.1in;
     margin-right: 0.1in;
     margin-top: 0;
     margin-bottom: 0;
   }

   td.fecha.td{
    font-size:11px;
   }

   header, .btn_table,div.centered-div{
    display:none;
   }

   h3{
    padding-top:50px;
   }

   table{
    margin-top:50px;
   }



}
 
.texto {
	text-align: justify;
  	text-justify: inter-word;
}

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


</head>

<body class="text-center">
<main>
<div id ="content">  
  <h3> Movimientos Actuales del Mes</h3> 
  
  <div class="row btn_table">
    <div class="col-2"></div>
    <div class="col-2"></div>
    <div class="col-2"></div>
    <div class="col-2"></div>
    <div class="col-2">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Filtro por:
        </a>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Fecha">Fecha</a>
          <a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Usuario">Usuario</a>
          <a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Tipo">Tipo</a>
          <a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Producto">Producto</a>
        </div>
      </div>
    </div>
    <div class="col-2">
      <a type="button" class="btn btn-success mb-3" id="crearpdf">Crear PDF</a>
    </div>
  </div>
</div>

  <table class="table">
      <tr>
          <!--th>Foto</th-->
          <th>Nombre Producto</th>
          <th>Cedula</th>
          <th>Nombre Usuario</th>
          <th>Tipo</th>
          <th>Cantidad</th>
          <th>Fecha</th>
          
      </tr>

      <?php

      for ($i=0; $i <count($info_registro); $i++) { 
          
          echo'<tr>';
          //echo '<td> <img src="/uploads/'.$info_registro[$i][2].'" width="100px" height="100px"></td>';
          echo '<td style="vertical-align: middle;">'.$info_registro[$i][1].'</td>';
          echo '<td style="vertical-align: middle;">'.$info_registro[$i][3].'</td>';
          echo '<td style="vertical-align: middle;">'.$info_registro[$i][4].'</td>';
          echo '<td style="vertical-align: middle;">'.$info_registro[$i][5].'</td>';
          echo '<td style="vertical-align: middle;">'.$info_registro[$i][6].'</td>';
          echo '<td style="vertical-align: middle;"class="fecha_td">' .$info_registro[$i][7].'</td>';
          
          
            echo '</tr>';
      }

      ?>
  </table>
   
</div>

 
 <script>
    document.addEventListener("DOMContentLoaded", () => {
      let boton = document.getElementById("crearpdf");
  
      boton.addEventListener("click", event => {
          event.preventDefault();
          window.print();
      }, false);
 
    }, false);
</script>
</main>
</body>
</html>




