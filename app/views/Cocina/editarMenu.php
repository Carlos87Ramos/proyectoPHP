

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/fondoForm.php'?>



<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ></div>
        
  <div class="col-4">
   

    <div class="container">


        <h3> Editar Ménu</h3>

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
       <label for="CantidadPersonas">Cantidad de Personas Aprox.</label>
       <input type="number" name="CantidadPersonas" id ="CantidadPersonas" value = "<?= $info_menu->CantidadPersonas?>" >
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
    </div>
    
    <div class="col-4"></div> 

</body>

