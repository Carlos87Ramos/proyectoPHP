<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>
<html>
<style>
   body{
 background-color:rgba(50,120,60,0.3)!important;
  
 }
</style>
<body>

<br>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<?php !empty($message) ? print( "<div id='mensaje_global' class = \"alert alert-$message_type\">$message</div>"):'' ?>  
 
 
 

<h2> Movimiento de Stock</h2>
<?php !empty($show_listarProductos)? require'app/views/Registro/listarProductos.php' : ''?>
<?php !empty($show_editar_producto)? require'app/views/Registro/editarProducto.php' : ''?>




<script>
  setTimeout(() => {
    $('#mensaje_global').hide();
  }, "5000");
 </script> 
</body>
