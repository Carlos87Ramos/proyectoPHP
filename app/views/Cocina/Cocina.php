<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<body>
<button type="submit"><a  href="<?=FOLDER_PATH?>/Cocina/listarMenus">Listar Menus</a> </button>
<button type="submit"><a  href="<?=FOLDER_PATH?>/Cocina/listarProductos"> Productos</a> </button> 
<button type="submit"><a  href="<?=FOLDER_PATH?>/Cocina/addMenuForm">Agregar Menu</a> </button>
<button type="submit"><a  href="<?=FOLDER_PATH?>/Cocina/addProductoForm">Agregar Productos</a> </button>

<br>

<div>
  <?php !empty($message) ? print($message):'' ?> 
   
   <?php !empty($show_listarMenus)? require'app/views/Cocina/listarMenus.php' : ''?>
   <?php !empty($show_addMenuForm) ? require'app/views/Cocina/addMenu.php' : '' ?>
   <?php !empty($show_editar_menu) ? require'app/views/Cocina/editarMenu.php' : '' ?>
   <?php !empty($show_addProductoForm) ? require'app/views/Cocina/addProducto.php' : '' ?>
   <?php !empty($show_listarProductos)? require'app/views/Cocina/listarProductos.php' : ''?>
   <?php !empty($show_editar_producto) ? require'app/views/Cocina/editarProducto.php' : '' ?>

</div>


<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>

  
</body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/views/template/css/styleHome.css">
    <link rel="stylesheet" href="app/views/template/css/styleLogin.css">

    <title>Cocina</title>
   
</head>
<body>
  

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>

