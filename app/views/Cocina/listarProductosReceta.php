<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<style>
     body {
            margin: 0;
            padding: 0;
          
        }

        .half {
            width: 98%;
            height: 50vh; /* 50% de la altura de la ventana */
            float: left!important; /* Para que los divs estén uno al lado del otro */
            overflow: auto; /* Habilita la barra de desplazamiento cuando sea necesario */
        }
        .half{
            border:3px solid red;
        }
        h2{
            
         
            background-color: rgb(23, 70, 111);
        }
        .col-12{
            display: none;
        }
       .crf{
        display: none;
       }
       .table-striped
        {
            margin: 0;
        }
        
</style>
<body class="text-center">
<h1>  Receta  * <?= $info_menu->Nombre?>*</h1>
<div class="Conteiner" >
      <div class="row" >

<div class="col-12">


    <div class="Conteiner" >
      <div class="row" >
        
       

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
       <input type="text" name="Observaciones" id="Observaciones"value = "<?= $info_menu->Observaciones?>" disabled="True">
       </div>
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_menu-> Foto?>" width="100px" height="100px">
     
       
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_menu->ID ?>">
        
       </div>
       </div>
       </div>
    </div>

      
    <div class="col-6">
    <div class="Conteiner" >
      <div class="row" >
       <h2>  Productos Disponibles </h2>
       
  
    <table class="table ta <ble-striped">
       <tr>
           <th>Foto</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Añadir</th>
          
          
       </tr>
       </table>
       <div class="half" style="background-color: rgb(23, 70, 111);">
       <table class="table ta <ble-striped">
       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
      
        $step = $info_producto[$i][6] != 'Unidad' ? 'step="0.1"' : '';
        $medida = $info_producto[$i][6] === 'Kg' ? 'KGs' :
        ($info_producto[$i][6] === 'Litro' ? 'Litros' : 'Unidades');
        
           echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/agregarProductoReceta ">';
           echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
           echo'<tr>';
           echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][2].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][3].'</td>';
           echo '<td style="vertical-align: middle;"><input type="number" '.$step.'" name="Cantidad"  min="0" value="" style="width : 50px;"required>'.$medida.'</td>';
           
           echo '<td style="vertical-align: middle;"><input type="submit" value="Anadir a la receta"></td>';
           echo '<td class ="crf"style="vertical-align: middle;"><input type="hidden" name = "IdProducto" value="'.$info_producto[$i][1].'"></td>';
           echo '</tr>';
           echo '</form>';
       }

       ?>
   </table>
   </div>
  </div>
  </div>
  </div>
  <div class="col-6">
  <div class="Conteiner" >
      <div class="row" >
    
       <h2>  Receta </h2>

    
  
    <table class="table ta <ble-striped">
    <tr>
           <th>Foto</th>
            <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Eliminar</th>
           </tr>
           </table>
           <div class="half" style="background-color: rgb(23, 70, 111);">
           <table class="table ta <ble-striped">
    <?php

for ($i=0; $i <count($info_producto_Receta); $i++) {
   
        $medida = $info_producto_Receta[$i][6] === 'Kg' ? 'KGs' :
        ($info_producto_Receta[$i][6] === 'Litro' ? 'Litros' : 'Unidades');
    
    echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/eliminarProductoReceta ">';
    echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
    echo'<tr>';
    echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_producto_Receta[$i][4].'" width="100px" height="100px"></td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][2].'</td>';
    echo '<td style="vertical-align: middle;">'.$info_producto_Receta[$i][3].'</td>';
    echo '<td style="vertical-align: middle;"> Cantidad : '.$info_producto_Receta[$i][5]. $medida .'</td>';
    echo '<td style="vertical-align: middle;"><input type="submit"value ="Eliminar"></td>';
    echo '<td class ="crf" style="vertical-align: middle;"><input type="hidden" name = "IdProducto" value="'.$info_producto_Receta[$i][1].'"></td>';
    echo '</tr>';
    echo '</form>';
}

?>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
    

    </body>