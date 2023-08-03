<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app/views/template/css/styleHome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addMenu</title>
</head>

<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ><h2> Menu lateral</h2></div>
        
  <div class="col-4">
   <h2> Agregar Ménu</h2>

    <div class="container">


        <h3> Agregar Ménu</h3>

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
    </form>
    </div>
    </div>
    </div>
    <div class="col-4"><h2>Propaganda</h2></div>
</body>
</html>
