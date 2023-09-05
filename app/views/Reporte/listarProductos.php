<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


  <style>

@media print {
   @page {
     margin-left: 0.1in;
     margin-right: 0.1in;
     margin-top: 0;
     margin-bottom: 0;
   }

   td.fecha.td{
    font-size:11px;
   }

   header, .btn_table,div.centered-div{
    display:none;
   }

   h3{
    padding-top:50px;
   }

   table{
    margin-top:50px;
   }



}
  </style>
</head>
<body class="text-center">
<main>
<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ><h2></h2></div>
        
<div class="col-6">
 <h3> Stock actual</h3> 
 <a type="button" class="btn btn-success mb-3" id="crearpdf">Crear PDF</a>
     <table class="table">
       <tr>
           <!--th>Foto</th-->
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
           
           echo'<tr>';
           //echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][1].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][2].'</td>';
           echo '<td style="vertical-align: middle;">'.$info_producto[$i][3].'</td>';
           
           echo '<td style="vertical-align: middle;">' .$info_producto[$i][5].'</td>';
           
          
            echo '</tr>';
       }

       ?>
   </table>
  
 </div>

       
 <script>
    document.addEventListener("DOMContentLoaded", () => {
      let boton = document.getElementById("crearpdf");
  
      boton.addEventListener("click", event => {
          event.preventDefault();
          window.print();
      }, false);
 
    }, false);
</script>
</main>
</body>
</html>