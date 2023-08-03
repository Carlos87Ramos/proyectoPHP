<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ><h2> Menu lateral</h2></div>
        
<div class="col-4">
<div class="container">

<h2>Alta/Baja Producto</h2>




<form method="POST" action="<?= FOLDER_PATH .'/Registro/registroProducto'?> "enctype="multipart/form-data"  >
        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = "<?= $info_producto->Nombre?>" disabled = true >
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_producto->Descripcion?>"disabled= true >
       </div>
       
       <div class="label" >
       
       <label for="Cantidad">  <?= $info_producto->Tipo ==='Kg'?' Kg': 'Unidades'?></label>
       <input type="number" name="Cantidad" id="Cantidad" value = "<?= $info_producto->Tipo === 'kg'&& $info_producto->Cantidad ==='0' ? '0.0':$info_producto->Cantidad?>">
       
       
       </div>
       <div class="label" >
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_producto-> Foto?>" width="100px" height="100px">
       </div>
       <div class="label" >
       
       <label for="Tipo"> Tipo</label>
       <select name="Tipo" id="Tipo">
        <option value="Entrada" selected> Entrada </option>
        <option value="Salida" > Salida</option>
    </select> 
        </div>


       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_producto->ID?>">

       <button type="submit">Aceptar</button>
       </div>

    </form>
    </div>
    </div>
   
        <div class="col-3"><h2>Propaganda</h2></div>
</body>
</html>

