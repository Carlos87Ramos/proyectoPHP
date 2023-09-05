<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>


<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ><h2> </h2></div>
        


<div class="col-6">
    <H2>*Productos en la Despensa *</H2>
    <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Alta/Baja</th>
         </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
        $medida = $info_producto[$i][6] === 'Kg' ? 'KGs' :
        ($info_producto[$i][6] === 'Litro' ? 'Litros' : 'Unidades');
           
           echo'<tr>';
           echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][1].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][2].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][3].'</td>';
         
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][5].'  '.$medida.'</td>';
           
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Registro/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-plus"></i></a> </td>';
           echo'</tr>';
          
       }

       ?>
   </table>
  </div>
  <div class="col-3" ><h2></h2></div>
  </main>
</body>
</html>





