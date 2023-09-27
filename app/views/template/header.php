<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
     <script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>



        header
{
  background-color: rgb(23, 70, 111);
    border-bottom: 4px solid red;
    padding: 20px 0;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    
}

.nav-link {
            color: white !important; /* Cambia el color de texto a blanco */
        }

.nav-link.active {
            color:black  !important; /* Cambia el color de texto a negro*/
        }
.nav-link.bueno{
          color:black  !important; /* Cambia el color de texto a negro*/
        }

  button.icon{
    width: 25px ;
    height: 25px;
    background-color: #f2f2f2;
    color: white;
  }
   /* Estilos para el encabezado fijo */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    
    padding: 10px; /* Espacio de relleno para el contenido del encabezado */
    z-index: 100; /* Asegura que el encabezado esté por encima de otros elementos */
}

/* Añade un margen superior al contenido principal para evitar que se solape con el encabezado */
main {
    margin-top: 100px; /* Ajusta la altura según la altura de tu encabezado */
}
 
    </style>
</head>
<body>
<header>
    <h2 > Bienvenido a la Cocina</h2>
   <!-- <i class="fa-solid fa-bars"></i>-->
   

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active"  href="<?=FOLDER_PATH?>/Cocina">Inicio</a>  </li>
    <li class="nav-item">
    
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Cocina/addMenuForm">Agregar Menu</a></li>
  <li class="nav-item">
    <a class="nav-link"  href="<?=FOLDER_PATH?>/Cocina/listarProductos"> Listar Productos</a></li>
    <li class="nav-item">
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Cocina/addProductoForm">Agregar Productos</a></li>
    <li class="nav-item">
    <a class="nav-link "  href="<?=FOLDER_PATH?>/Registro">Movimientos de Stock</a></li>
  


  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="true"><?=$nombre?></a>
    <ul class="dropdown-menu"> 
    <a class="nav-link bueno"  href="<?=FOLDER_PATH?>/Usuario/cambiarPassword">Cambiar Contraseña</a>
       <a class="nav-link bueno"  href="<?=FOLDER_PATH?>/Login/logout">Cerrar sesión</a>
  
  </ul>
    </li>
    <li class="nav-item"> <a class="nav-link active" href="javascript:history.back()"><i class="fa-solid fa-arrow-left"></i></a>  </li>
</ul>
</header>
</body>
</html>

