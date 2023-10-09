<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once PATH_HEADER .'header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<style>
   body{
 background-color:rgba(50,120,60,0.3);
  
 }
</style>
<body>
<main>
<br>

<div>
  <?php !empty($message) ? print( "<div id='mensaje_global' class = \"alert alert-$message_type\">$message</div>"):'' ?> 
   
   <?php !empty($show_listarMenus)? require'app/views/Cocina/listarMenus.php' : ''?>
   <?php !empty($show_addMenuForm) ? require'app/views/Cocina/addMenu.php' : '' ?>
   <?php !empty($show_aplicar_menu) ? require'app/views/Cocina/aplicarMenu.php' : '' ?>
   <?php !empty($show_editar_menu) ? require'app/views/Cocina/editarMenu.php' : '' ?>
   <?php !empty($show_addProductoForm) ? require'app/views/Cocina/addProducto.php' : '' ?>
   <?php !empty($show_listarProductos)? require'app/views/Cocina/listarProductos.php' : ''?>
   <?php !empty($show_editar_producto) ? require'app/views/Cocina/editarProducto.php' : '' ?>

   <?php !empty($show_listarProductosReceta)? require'app/views/Cocina/listarProductosReceta.php' : ''?>
 
</div>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>
</main>

<script>
  setTimeout(() => {
    $('#mensaje_global').hide();
  }, "5000");
 </script> 
</body>
