<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<body>
    <h1>Ménu</h1>

<table id ="customers">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Observaciones</th>
           <th>Editar</th>
           <th>Eliminar</th>
           <th>Agregar productos</th>
          
       </tr>
   
       <?php

       for ($i=0; $i < count($info_menu); $i++) { 
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_menu[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_menu[$i][1].'</td>';
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarMenu/'.$info_menu[$i][1].'">'.$info_menu[$i][2].'</a> </td>';
           echo '<td>'.$info_menu[$i][3].'</td>';
           
           echo '<td>' .$info_menu[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarMenu/'.$info_menu[$i][1].'"> <i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo '<td> <a onclik="return eliminar()" href="'. FOLDER_PATH.'/Cocina/deleteMenu/'.$info_menu[$i][1].'"> <i class="fa-solid fa-trash-can"></i></a> </td>';
           echo '<td> <a onclik="return eliminar()" href="'. FOLDER_PATH.'/Cocina/addProductosReceta/'.$info_menu[$i][1].'"> <i class="fa-solid fa-trash-can"></i></a> </td>';
           echo '</tr>';
       }

       ?>
   </table>
    <script>
        function eliminar(){
            var respuesta = confirm("¿Estas seguro que quieres eliminar ?");
            return respuesta
        }
    </script>
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>




