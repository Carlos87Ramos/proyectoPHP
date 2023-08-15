<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>
<html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<?php !empty($message) ? print( "<div class = \"alert alert-$message_type\">$message</div>"):'' ?>   
 
 <body>
   

<h2> Movimiento de Stock</h2>

<?php !empty($show_listarProductos)? require'app/views/Registro/listarProductos.php' : ''?>
<?php !empty($show_editar_producto)? require'app/views/Registro/editarProducto.php' : ''?>

    
</body>
</html>







