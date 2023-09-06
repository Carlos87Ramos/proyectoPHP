<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ></div>
        <div class="col-4">

        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = "<?= $info_menu->Nombre?>" disabled ="True">
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_menu->Descripcion?>" disabled ="True" >
       </div>
       <div class="label" >
       <label for="Observaciones">Observaciones</label>
       <input type="text" name="Observaciones" id="Observaciones"value = "<?= $info_menu->Observaciones?>" disabled ="True">
       </div>
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_menu-> Foto?>" width="100px" height="100px">
     
       
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_menu->ID ?>">

       </div>
       </div>
       <div class="col-4">
    <h3> * Receta *</h3>
    <table class="table">
    <?php

for ($i=0; $i <count($info_producto_Receta); $i++) {
   
        $medida = $info_producto_Receta[$i][6] === 'Kg' ? 'KGs' :
        ($info_producto_Receta[$i][6] === 'Litro' ? 'Litros' : 'Unidades');
    
    echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/eliminarProductoReceta ">';
    echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
    echo'<tr>';
    echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_producto_Receta[$i][4].'" width="100px" height="100px"></td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][1].'</td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][2].'</td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][3].'</td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][3].'</td>';
    echo '<td style="vertical-align: middle;"> Cantidad : '.$info_producto_Receta[$i][5]. $medida .'</td>';
    echo '<td style="vertical-align: middle;"><input type="hidden" name = "IdProducto" value="'.$info_producto_Receta[$i][1].'"></td>';
    echo '<td style="vertical-align: middle;"><input type="submit"value ="Eliminar"></td>';
    echo '</tr>';
    echo '</form>';
}

?>
    </table>
    </div>
    <div class="col-4">
    <h3> Productos Disponibles</h3>

    <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
          
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
      
        $step = $info_producto[$i][6] != 'Unidad' ? 'step="0.1"' : '';
        $medida = $info_producto[$i][6] === 'Kg' ? 'KGs' :
        ($info_producto[$i][6] === 'Litro' ? 'Litros' : 'Unidades');
        
           echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/agregarProductoReceta ">';
           echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
           echo'<tr>';
           echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][1].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][2].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][3].'</td>';
           echo '<td style="vertical-align: middle;"><input type="number" '.$step.'" name="Cantidad" value="" style="width : 50px;"required>'.$medida.'</td>';
           echo '<td style="vertical-align: middle;"><input type="hidden" name = "IdProducto" value="'.$info_producto[$i][1].'"></td>';
           echo '<td style="vertical-align: middle;"><input type="submit" value="Anadir a la receta"></td>';
           echo '</tr>';
           echo '</form>';
       }

       ?>
   </table>
    </form>
</div>
</div>
</main>
    </body>