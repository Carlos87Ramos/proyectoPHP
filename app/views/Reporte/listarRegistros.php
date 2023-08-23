<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movimientos Actuales</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
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

<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" >
        <?php $filtro == 'Fecha' ? require 'app/views/Reporte/filtroFecha.php' :''?>
        <?php $filtro == 'Usuario' ? require 'app/views/Reporte/filtroUsuario.php' :''?>
       
  </div>
       

    
      
     
        
<div class="col-6">
 <h3> Movimientos Actuales del Mes</h3> 
     <table class="table">
       <tr>
           <th>Foto</th>
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
           echo '<td> <img src="/uploads/'.$info_registro[$i][2].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_registro[$i][1].'</td>';
           echo '<td>'.$info_registro[$i][3].'</td>';
           echo '<td>'.$info_registro[$i][4].'</td>';
           echo '<td>'.$info_registro[$i][5].'</td>';
           echo '<td>'.$info_registro[$i][6].'</td>';
           echo '<td>' .$info_registro[$i][7].'</td>';
           
          
            echo '</tr>';
       }

       ?>
   </table>
   <button type = " submit"> Imprimir reporte en pdf</button>
   
 </div>

        <div class="col-3">
        <h3>*Filtro*</h3>
        <hr color="blue">
    
      <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
     <!-- <img src="img/fondoSystem.png" alt="" width="32" height="32" class="rounded-circle me-2">-->
      <strong>Filtrar por:</strong></a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Fecha">Fecha</a></li>
      <li><a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Usuario">Usuario</a></li>
      <li><a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Tipo">Tipo</a></li>
      <li><a class="dropdown-item" href="<?=FOLDER_PATH?>/Reporte/filtrarPor/Producto">Producto</a></li>
      
    </ul>
  </div>
    
  </div>

  <div class="b-example-divider"></div>
</body>
</html>




