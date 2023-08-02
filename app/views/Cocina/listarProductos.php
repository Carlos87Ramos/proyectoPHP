<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<body>
<h2> Lista de Productos</h2>
<br>
<table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Editar</th>
           <th>Eliminar</th>
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>' .$info_producto[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo '<td> <a onclik="return eliminar()" href="'. FOLDER_PATH.'/Cocina/deleteProducto/'.$info_producto[$i][1].'"> <i class="fa-solid fa-trash-can"></i></t>';
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




