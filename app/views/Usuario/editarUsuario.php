<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



<?php require_once ROOT . FOLDER_PATH . '/app/views/template/headerReporte.php'?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/fondoForm.php'?>


<body class="text-center">

<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
     
      <div class="col-4"></div>   

     

     
<div class="col-4">
<div class="container">
<h3>Editar Usuario</h3>
<form method="POST" action="<?= FOLDER_PATH .'/Usuario/updateUsuario'?> "enctype="multipart/form-data"  >

      
       <div class="label" >
       <label for="Cedula"> Cedula</label>
       <input type="text" name="Cedula" id="Cedula" value="<?= $info_usuario->Cedula ?>" readonly>
       </div>

       <div class="label" >
        <label for="Nombre"> Nombre</label>
         <input type="text" name="Nombre" id="Nombre" value = " <?= $info_usuario->Nombre?>" require>
       </div>

      
       
       <div class="label" >
         <label for="Tipo"> Tipo de Usuario</label>
           <select name="Tipo" id="Tipo">
           <option value="Cocinero"<?php  echo ( $info_usuario->Tipo === "Cocinero ")?'selected': '' ?>> Cocinero </option>
           <option value="Ayudante Cocina"<?php  echo ($info_usuario->Tipo === "Ayudante Cocina")?'selected': '' ?>>Ayudante Cocina</option>
           <option value="Coordinador" <?php  echo ( $info_usuario->Tipo === "Coordinador ")?'selected': '' ?>> Coordinador</option>
           <option value="Administrativo" <?php echo ( $info_usuario->Tipo ==="Administrativo ")?'selected': '' ?>> Administrativo</option>
           <option value="Director" <?php echo ($info_usuario->Tipo === 'Director') ? 'selected' : ''; ?>>Director</option>

          </select>  
       </div>
       <div class="label" >
        <label for="Estado"> Estado</label>
        <select name="Activo" id="Activo">
        <option value="1" <?php echo ($info_usuario->Activo == 1) ? 'selected' : ''; ?>> Activo</option>
        <option value="0" <?php echo ($info_usuario->Activo == 0) ? 'selected' : ''; ?>>Inactivo</option>
       </select>
        
       </div>
          <br>
       <div class="boton" >
          <button type="submit">Editar</button>
       </div>
      
    </form>
    </div>
    </div>
    
  
        <div class="col-4"></div>
        
        </div>
</body>


