<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<div class="container">

        <h2> Agregar Ménu</h2>

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
    </div>
</body>
</html>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>