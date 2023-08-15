<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>


<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ><h2> Menu lateral</h2></div>
        


<div class="col-4">
    <H2>*Productos*</H2>
    <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Alta/Baja</th>
         </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
           $medida = $info_producto[$i][6] ==='Kg' ?'kgs':'Unidades';
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>'.$info_producto[$i][5].'  '.$medida.'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Registro/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-plus"></i></a> </td>';
           echo'</tr>';
          
       }

       ?>
   </table>
  </div>
  <div class="col-4" ><h2> Menu lateral</h2></div>
</body>
</html>





