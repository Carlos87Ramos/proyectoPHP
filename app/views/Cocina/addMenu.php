<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>




<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ></div>
        
  <div class="col-4">
   

    <div class="container">


        <h3> Agregar un nuevo Ménu</h3>

    <form method="POST" action="<?=FOLDER_PATH.'/Cocina/addMenu'?>"enctype="multipart/form-data" >
        <div class="label" >
      
       <input type="text" name="Nombre" id ="Nombre"placeholder="Escribe el nombre aquí" >
       </div>
       <div class="label" >
       
       <input type="text" name="Descripcion" id ="Descripcion" placeholder="Escribe la descripcion aqui">
       </div>
       <div class="label" >
      
       <input type="text" name="Observaciones" id ="Observaciones" placeholder="Escribe la observaciones aquí">
       </div>
       <div class="label" >
       
       <input type="number" name="CantidadPersonas" min="0" id ="CantidadPersonas" placeholder="Escribe la cantidad aquí"required >
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
    <div class="col-4"></div>
</body>
</html>
