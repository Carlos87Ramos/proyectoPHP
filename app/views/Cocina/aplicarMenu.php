<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>editarMenu</title>
       

        
</head>
<body>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>

<h2>Aplicar Menu</h2>


<div class="container">
        
<h3>Aplicar Menu</h3>
<?php !empty($message) ? print($message):'' ?> 



<form method="POST" action="<?= FOLDER_PATH .'/Cocina/aplicarMenu'?> "enctype="multipart/form-data"  >
        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = "<?= $info_menu->Nombre?>" disabled =True>
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_menu->Descripcion ?>"disabled =True >
       </div>
       <div class="label" >
       <label for="Observaciones">Observaciones</label>
       <input type="text" name="Observaciones" id="Observaciones"value = "<?= $info_menu->Observaciones?>" disabled =True>
       </div>
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_menu-> Foto?>" width="100px" height="100px">
      
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_menu->ID ?>">

       <button type="submit">Aplicar Menu</button>
       </div>

       </form>
    </div>

    <h2>   Receta </h2>
  

    <table class="table">
    <?php

for ($i=0; $i <count($info_producto_Receta); $i++) { 

    echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/editarCantidadProductoReceta ">';
    echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
    echo'<tr>';
    echo '<td> <img src="/uploads/'.$info_producto_Receta[$i][4].'" width="100px" height="100px"></td>';
    echo '<td>'.$info_producto_Receta[$i][1].'</td>';
    echo '<td>'.$info_producto_Receta[$i][2].'</td>';
    echo '<td>'.$info_producto_Receta[$i][3].'</td>';
   
    echo '<td><input type="text" name ="Cantidad" value="'.$info_producto_Receta[$i][5].'"></td>';
    echo '<td> <input type="hidden" name = "IdProducto" value="'.$info_producto_Receta[$i][1].'"></td>';
    echo '<td><input type="submit"value ="Editar Cantidad"></td>';
    echo '</tr>';
    echo '</form>';
}

?>

</body>
</html>


