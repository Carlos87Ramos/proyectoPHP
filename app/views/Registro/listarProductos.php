<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<style>
   body {
            margin: 0;
            padding: 0;
          
        }

        .half {
          
            width: 100%;
            height: 62vh; /* 62% de la altura de la ventana */
            float: left; /* Para que los divs estén uno al lado del otro */
            overflow: auto; /* Habilita la barra de desplazamiento cuando sea necesario */
        }
        .half{
            border:3px solid red;
        }.table-striped
        {
            margin: 0;
            padding-left: 35px;
        }
        main{
 background-color:rgba(50,120,60,0.3) !important ;
  
 }
</style>


<body class="text-center">

    <div class="Conteiner" >
      <div class="row" >
        
        
        <H2>*Productos en la Despensa *</H2>
        <div class="col-2" ><h2> </h2></div>
<div class="col-8">
<H2>*Productos en la Despensa *</H2>
<table class="table table-striped">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Alta/Baja</th>
         </tr>
         </table>
<div class="half">
   
    <table class="table table-striped">

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
  </div>
  <div class="col-2" ><h2></h2></div>
  
</body>








