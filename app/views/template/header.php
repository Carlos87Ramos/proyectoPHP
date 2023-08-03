<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



   
   



   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="app/views/template/css/div.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        header
{
    background-color:   rgb(144, 222, 170);
    border-bottom: 4px solid red;
    padding: 20px 0;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    
}
h1{
    color: rgb(243, 236, 236);
  }
  button.icon{
    width: 25px ;
    height: 25px;
    background-color: #f2f2f2;
    color: blue;
  }
 
    </style>
</head>
<body>
<header>
    
   <!-- <i class="fa-solid fa-bars"></i>-->
   

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active"  href="<?=FOLDER_PATH?>/Home">Inicio</a>  </li>
    <li class="nav-item">
    <a class="nav-link"  href="<?=FOLDER_PATH?>/Cocina/listarMenus">Listar Menus</a>  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?=FOLDER_PATH?>/Cocina/listarProductos"> Productos</a></li>
  <li class="nav-item">
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Cocina/addMenuForm">Agregar Menu</a></li>
    <li class="nav-item">
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Registro">Movimientos de Stock</a></li>
  <li class="nav-item">
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Cocina/addProductoForm">Agregar Productos</a></li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="true">Configuraciones</a>
     <div class="dropdown-menu">
         <a class="dropdown-item" href="#">Ayuda</a> 
         <a class="dropdown-item" href="#">Herramientas</a>
         <a class="dropdown-item" href="#">Configuracion</a>
     <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">AAAA</a>
    </div>
  </li>
</ul>
    
</header>
</body>
</html>
