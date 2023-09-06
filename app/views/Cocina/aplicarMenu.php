
      
       
<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
      
       


<div class="col-12">

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
        <button type="submit" <?= count($info_producto_Receta)=== 0 ?'disabled': ''?>>Aplicar Menu</button>
        
       </form>
    </div>
    </div>
    
    <div class="col-12">

    <h3> Productos de la Receta </h3>
  

    <table class="table">
    <?php for ($i=0; $i <count($info_producto_Receta); $i++) { 

        $step = $info_producto_Receta[$i][6] !='Unidad' ? 'step="0.1"' : '';
        $medida = $info_producto_Receta[$i][6] === 'Kg' ? 'KGs' :
                  ($info_producto_Receta[$i][6] === 'Litro' ? 'Litros' : 'Unidades');


    echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/editarCantidadProductoReceta ">';
    echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
    echo'<tr>';
    echo '<td> <img src="/uploads/'.$info_producto_Receta[$i][4].'" width="100px" height="100px"></td>';
    echo '<td>'.$info_producto_Receta[$i][1].'</td>';
    echo '<td>'.$info_producto_Receta[$i][2].'</td>';
    echo '<td>'.$info_producto_Receta[$i][3].'</td>';
    echo '<td><input type="number"'.$step.'name ="Cantidad" style="width:50px;" value="'.$info_producto_Receta[$i][5].'">'.$medida.'</td>';
    echo '<td> <input type="hidden" name = "IdProducto" value="'.$info_producto_Receta[$i][1].'"></td>';
    echo '<td><input type="submit"value ="Editar Cantidad"></td>';
    echo '</tr>';
    echo '</form>';
}

?>
</div>
</div>
</div>
</main>
</body>
</html>


