<?php defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<style>
   body {
            margin: 0;
            padding: 0;
          
        }

        .half {
         
          padding: 1px;
            width: 100%;
            height: 62vh; /* 62% de la altura de la ventana */
            float: left; /* Para que los divs estén uno al lado del otro */
            overflow: auto; /* Habilita la barra de desplazamiento cuando sea necesario */
        }
        .half{
            border:3px solid red;
        }
        .table-striped
        {
            margin: 0;
        }

</style>


<body class="text-center">

    <div class="Conteiner" >
      <div class="row" >
      <div class="col-1"></div>  
        
<div class="col-10">


    <h2>* Cuaderno de Cocina*</h2>
    <button class="btn btn-success" style="width: 250px;"> <a class="nav-link "  href="<?=FOLDER_PATH?>/Cocina/addMenuForm">Agregar nuevo Menu</a> </button>
    <table class="table table-striped">
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
       </table>
       <div class="half" style="background-color: rgb(23, 70, 111);">
       <table class="table table-striped">
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
           echo '<td style="vertical-align: middle;"> <a  href="#" onclick="mostrarConfirmacion(\''. FOLDER_PATH.'/Cocina/deleteMenu/'.$info_menu[$i][1].'\')"> <i class="fa-solid fa-trash-can"></i></a> 
           </td>';
           echo '<td style="vertical-align: middle;"> <a href="'. FOLDER_PATH.'/Cocina/addProductosReceta/'.$info_menu[$i][1].'"> añadir</a> </td>';
           '</td>';
          
       }

       ?>
   </table>
   </div>
   </div>
  
   <div class="col-1"></div> 
   <script>
function mostrarConfirmacion(url) {
    var confirmacion = window.confirm("¿Realmente deseas eliminar el Menu?");
    
    if (confirmacion) {
        // Redireccionar a la URL para restablecer la contraseña
        window.location.href = url;
    } else {
        // No hacer nada si el usuario cancela la confirmación
    }
}
</script>
</body>
</html>





