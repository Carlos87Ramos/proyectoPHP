<body class="text-center">

    <div class="Conteiner" >
      <div class="row" >
      
       




<div class="container">
        
<h3>Agregar nuevo Usuario</h3>

<?php !empty($message) ? print($message):'' ?> 

<form method="POST" action="<?= FOLDER_PATH .'/Usuario/addUsuario'?> "enctype="multipart/form-data"  >  
        <div class="label" >
       <label for="Nombre"> Nombre</label>
       <input type="text" name="Cedula" id="Cedula" value = "" >
       </div>
       <label for="Cedula"> Cedula</label>
       <input type="text" name="Nombre" id="Nombre" value = "" >
       
       <div class="form-group">
       <label for="Tipo"> Tipo</label>
       <select name="Tipo" id="Tipo">
        <option value="Cocinero" selected> Cocinero </option>
        <option value="AyudanteCocina" >AyudanteCocina</option>
        <option value="Coordinador"> Coordinador</option>
        <option value="Administractivo"> Administractivo</option>
         <option value="Director"> Director</option>
          </select>  
           </div>
       <div class="boton" >
        
        <button type="submit">Agregar Usuario</button>
        
       </form>
    </div>
    </div>
    </div>
   
