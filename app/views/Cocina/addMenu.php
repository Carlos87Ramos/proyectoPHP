<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiSTAR MENU</title>
    <link rel="stylesheet" href="app/views/template/css/styleLogin.css">
    <link rel="stylesheet" href="app/views/template/css/styleHome.css">



</head>
<body>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>

    <form method="POST" action="<?=FOLDER_PATH.'/Cocina/addMenu'?>"enctype="multipart/form-data" >
        <div class="label" >
       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id ="Nombre" >
       </div>
       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id ="Descripcion" >
       </div>
       <div class="label" >
       <label for="Observaciones">Observaciones</label>
       <input type="text" name="Observaciones" id ="Observaciones" >
       </div>
       <div class="label" >
       
       <label for="foto"> Foto</label>
       <input type="file" name="Foto" id ="Nombre" >
       </div>
       <div class="boton" >
       <button type="submit">Agregar</button>
       </div>

    </form>
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>