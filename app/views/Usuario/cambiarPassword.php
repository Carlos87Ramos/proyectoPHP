<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>






<body class="text-center">

<body class="text-center">
   <br>
    <div class="Conteiner" >
      <div class="row" >
     
      <div class="col-4"></div>   

     

     
<div class="col-4">
<div class="container">
<h3>Cambio de Contraseña</h3>
<form method="POST" action="<?= FOLDER_PATH .'/Usuario/actualizarPassword'?> "enctype="multipart/form-data"  >

      
       <div class="label" >
       
       <input type="password" name="OldPassword" id="OldPassword"placeholder=" Contraseña anterior aquí" require>
       </div>

       <div class="label" >
        
         <input type="password" name="Password" id="Password" placeholder="  Nueva Contraseña aquí" require>
       </div>

       <div class="label" >
       
         <input type="password" name="NewPassword" id="NewPassword" placeholder="  Reingrese la Nueva Contraseña aquí" require>
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