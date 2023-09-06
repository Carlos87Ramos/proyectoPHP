

<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>







<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-4" ></div>
        
<div class="col-4">
<div class="container">

<h3>Alta/Baja Producto</h3>




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
        <?php
             
             $medida = $info_producto->Tipo === 'Kg' ? 'KGs' :
             ($info_producto->Tipo === 'Litro' ? 'Litros' : 'Unidades');
        ?>
       
       <label for="Cantidad">  <?= $medida?></label>
       <input type="number"<?= $info_producto->Tipo !='Unidad'?' step="0.1"': ''?> name="Cantidad" id="Cantidad" value = "<?= $info_producto->Tipo === 'kg'&& $info_producto->Cantidad ==='0' ? '0.0':$info_producto->Cantidad?>"required>
       
       
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
   
        <div class="col-3"></div>
        </main>
</body>
</html>

