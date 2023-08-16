<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movimientos Actuales</title>
</head>
<body class="text-center">

<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" >
        <h3> Filtro </h3>
        <form  method="post" action=" <?= FOLDER_PATH .'/Reporte/listarRegistrosPorFecha'?>">
        
      <label for="">Filtrar por fecha</label>
      <?php $fecah = date ("YY/mm/dd");?>
      <input type="date" name ="fechaInicial" id = "fechaInicial"class="form-control" placeholder="Desde " value = "<?=empty($fecha_inicial)? $fecha: $fecha_inicial?>">
      <input type="date" name ="fechaFinal" id = "fechaFinial"class="form-control" placeholder="Hasta" value = "<?=empty($fecha_final)? $fecha: $fecha_final?>">
      <button type=""submit>Filtrar</button>
      </div>
      </form>
      
        
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
 </div>

        <div class="col-3"><h2>*Propaganda</h2></div>
</body>
</html>




