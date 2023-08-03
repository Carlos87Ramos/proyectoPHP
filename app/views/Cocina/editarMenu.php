<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>editarMenu</title>
       

        
</head>
<body>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>




<div class="container">
        
<h2>Editar Menu</h2>




<form method="POST" action="<?= FOLDER_PATH .'/Cocina/updateMenu'?> "enctype="multipart/form-data"  >
        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = "<?= $info_menu->Nombre?>" required>
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_menu->Descripcion?>" >
       </div>
       <div class="label" >
       <label for="Observaciones">Observaciones</label>
       <input type="text" name="Observaciones" id="Observaciones"value = "<?= $info_menu->Observaciones?>">
       </div>
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_menu-> Foto?>" width="100px" height="100px">
       <input type="file" name="Foto" id="Foto "value = "<?= $info_menu->Foto?> ">
       <!-- UTILIZADO EN CASO QUE NO SE CAMBIE LA FOTO ANTERIOR.-->
       <input type="hidden" name="nameFoto" id="nameFoto " value="<?= $info_menu->Foto ?>">
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_menu->ID ?>">

       <button type="submit">Aceptar</button>
       </div>

    </form>
    </div>
</body>
</html>


