<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


<?php require_once ROOT . FOLDER_PATH . '/app/views/template/fondoForm.php'?>
      


<body class="text-center">

    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4"></div>
        


<div class="col-4">
<div class="container">
<h3>Agregar un nuevo Productos</h3>
    <form method="POST" action="<?=FOLDER_PATH.'/Cocina/addProducto'?>"enctype="multipart/form-data" >

    <div class="form-group">
       
       <input type="text" name="Nombre" id ="Nombre" placeholder="Escribe el nombre del producto aquí" required>
       </div>
       <div class="form-group">
       
       <input type="text" name="Descripcion" id ="Descripcion" placeholder="Escribe la descripcion aqui" required>
       </div>
       <div class="form-group">
       <label for="Tipo"> Tipo</label>
       <select name="Tipo" id="Tipo">
        <option value="Unidad"> Unidad </option>
        <option value="Kg" selected> Kg</option>
        <option value="Litro"> Litro</option>
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
<div class="col-4"></div>
</div>

</body>
</html>
