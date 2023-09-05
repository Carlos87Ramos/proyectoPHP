<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('img/wall1.jpg');


height: 100%;
width: 100%;
font-family: 'Numans', sans-serif;

}

</style>
</head>
<?php require_once PATH_HEADER .'headerReporte.php'?>
<?php !empty($message) ? print( "<div class = \"alert alert-$message_type\">$message</div>"):'' ?> 
<?php !empty($show_listarProductos)? require'app/views/Reporte/listarProductos.php' : ''?>
<?php !empty($show_listarRegistros)? require'app/views/Reporte/listarRegistros.php' : ''?>
<body>
    
</body>
</html>