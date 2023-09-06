<?phpdefined ('BASEPATH') or exit ('No se permite acceso directo');?>




<body class="text-center">
<main>
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-1" ></div>
        
<div class="col-10">
    <h2>* Cuaderno de Cocina*</h2>
    <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Observaciones</th>
           <th>Cantidad de personas</th>
           <th>Editar</th>
           <th>Eliminar</th>
           <th>Agregar productos</th>
          
       </tr>
   
       <?php

       for ($i=0; $i < count($info_menu); $i++) { 
           
           echo'<tr>';
           echo '<td style="vertical-align: middle;"> <img src="/uploads/'.$info_menu[$i][4].'" width="100px" height="100px"></td>';
           echo '<td style="vertical-align: middle;">'.$info_menu[$i][1].'</td>';
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Cocina/listarMenu/'.$info_menu[$i][1].'">'.$info_menu[$i][2].'</a> </td>';
           echo '<td style="vertical-align: middle;">'.$info_menu[$i][3].'</td>';
           echo '<td style="vertical-align: middle;">' .$info_menu[$i][5].'</td>';
           echo '<td style="vertical-align: middle;">' .$info_menu[$i][6].'</td>';
          
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Cocina/editarMenu/'.$info_menu[$i][1].'"> <i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Cocina/deleteMenu/'.$info_menu[$i][1].'"> <i class="fa-solid fa-trash-can"></i></a> 
           </td>';
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Cocina/addProductosReceta/'.$info_menu[$i][1].'"> añadir</a> </td>';
           '</td>';
       }

       ?>
   </table>
   </div>
  
  
   <div class="col-1" ><h2></h2></div>
   </main>
</body>
</html>





