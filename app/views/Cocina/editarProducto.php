<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ><h2> Menu lateral</h2></div>
        
<div class="container">


<h2>Editar Producto</h2>



<div class="col-4">

<form method="POST" action="<?= FOLDER_PATH .'/Cocina/updateProducto'?> "enctype="multipart/form-data"  >
        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = " <?= $info_producto->Nombre?>" >
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_producto->Descripcion?>"  >
       </div>
       
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_producto-> Foto?>" width="100px" height="100px">
       <input type="file" name="Foto" id="Foto "value = "<?= $info_producto->Foto?> ">
       <!-- UTILIZADO EN CASO QUE NO SE CAMBIE LA FOTO ANTERIOR.-->
       <input type="hidden" name="nameFoto" id="nameFoto " value="<?= $info_producto->Foto ?>">
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_producto->ID ?>">

       <button type="submit">Aceptar</button>
       </div>

    </form>
    </div>
    </div>
  
        <div class="col-4"><h2>Propaganda</h2></div>
        </main>
</body>


