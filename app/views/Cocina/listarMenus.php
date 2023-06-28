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

<table id ="customers">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
          
           <th>Observaciones</th>
          
       </tr>
   
       <?php

       for ($i=0; $i < count($info_menu); $i++) { 
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_menu[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_menu[$i][1].'</td>';
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarMenu/'.$info_menu[$i][1].'">'.$info_menu[$i][2].'</a> </td>';
           echo '<td>'.$info_menu[$i][3].'</td>';
           
           echo '<td>' .$info_menu[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarMenu/'.$info_menu[$i][1].'"> Editar</a> </td>';
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/deleteMenu/'.$info_menu[$i][1].'"> Eliminar</a> </td>';
           
           
           
           echo '</tr>';
       }

       ?>
   </table>
    
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>




