<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="app/views/template/css/styleHome.css">
        <link rel="stylesheet" href="app/views/template/css/styleLogin.css">
</head>
<body>

<table id ="customers">s
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
          
           <th>Cantidad</th>
          
       </tr>
   
       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>' .$info_Producto[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarProducto/'.$info_producto[$i][1].'"> Editar</a> </td>';
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/deleteProducto/'.$info_producto[$i][1].'"> Eliminar</a> </td>';
           
           
           
           echo '</tr>';
       }

       ?>
   </table>
    
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>




