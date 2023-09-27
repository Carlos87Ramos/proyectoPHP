<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



<?php require_once ROOT . FOLDER_PATH . '/app/views/template/headerReporte.php'?>

<body class="text-center">

<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
     
      <div class="col-4"></div>   

     

     
<div class="col-4">
<div class="container">
<h3>Cambio de Contraseña</h3>
<form method="POST" action="<?= FOLDER_PATH .'/Usuario/actualizarPassword'?> "enctype="multipart/form-data"  >

      
       <div class="label" >
       <label for="OldPassword"> Contraseña anterior</label>
       <input type="password" name="OldPassword" id="OldPassword" require>
       </div>

       <div class="label" >
        <label for="Password"> Nueva Contraseña</label>
         <input type="password" name="Password" id="Password"  require>
       </div>

       <div class="label" >
        <label for="NewPassword">  Reingrese la Nueva Contraseña</label>
         <input type="password" name="NewPassword" id="NewPassword"  require>
       </div>
      
       
      
          <br>
       <div class="boton" >
          <button type="submit">Cambiar</button>
       </div>
      
    </form>
    </div>
    </div>
    
  
        <div class="col-4"></div>
        
        </div>
</body>