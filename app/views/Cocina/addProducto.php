<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiSTAR MENU</title>
    
</head>
<body>
      
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<h2>Agregar  Productos</h2>

<div class="container">


<h3>Agregar  Productos</h3>

    <form method="POST" action="<?=FOLDER_PATH.'/Cocina/addProducto'?>"enctype="multipart/form-data" >

    <div class="form-group">
       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id ="Nombre" required>
       </div>
       <div class="form-group">
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id ="Descripcion" required>
       </div>
       <div class="form-group">
       <label for="Tipo"> Tipo</label>
       <select name="Tipo" id="Tipo">
        <option value="Unidad"> Unidad </option>
        <option value="Kg" selected> Kg</option>
    </select>  
       </div>
      
       <div class="label" >
       <label for="foto"> Foto</label>
       <input type="file" name="Foto" id ="Nombre" required>
       </div>
       <div class="boton" >
       <button type="submit">Agregar</button>
       </div>

    </form>
</div>
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>