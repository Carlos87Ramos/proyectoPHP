<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>
<html>

<?php !empty($message) ? print($message):'' ?> 
   
 
 <body>
   
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<h1> Movimiento de Stock</h1>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<?php !empty($show_listarProductos)? require'app/views/Registro/listarProductos.php' : ''?>
<?php !empty($show_editar_producto)? require'app/views/Registro/editarProducto.php' : ''?>

    
</body>
</html>







