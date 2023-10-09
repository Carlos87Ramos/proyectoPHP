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

   header, .btn_table,div.centered-div, .esconderPrint, .prin{
    display:none !important;
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






<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


<title>Consulta basica</title>
</head>
<body>
<main>


<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>




<!-- vista C -->

<div class= "col-12" >
<div class="center mt-5">
    <a type="button" class="btn btn-success mb-3 esconderPrint" id="crearpdf">Crear PDF</a>
    <div class="card pt-3" >
            <p class="esconderPrint" style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Stock actual</p>
            
        <div class="container-fluid p-5">
<table class="table table-striped" id="example">
<thead>
<tr>
<th scope="col">#</th>
<!--<th scope="col">Imagen</th>-->
<th scope="col">Nombre</th>
<th scope="col">Cantidad</th>
<th scope="col">Descripcion</th>





</tr>
</thead>
<tbody>
            <?php  
            $numero = mysqli_num_rows($busqueda); 
            ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                    if(!empty($num)){ $num = $num++; }else{$num = ''; }
                  $num++;
         
                  ?>

<tr>
<th scope="row" style="vertical-align: middle;"><?php echo $num; ?></th>
<!--<td><img src="/uploads/<?php echo $resultado["Foto"]; ?>" alt="" width="100px"></td>-->
<td style="vertical-align: middle;"><?php echo $resultado["Nombre"]; ?></td>
<?php
             $medida = $resultado["Tipo"] === 'Kg' ? 'KGs' :
             ($resultado["Tipo"] === 'Litro' ? 'Litros' : 'Unidades');
?>
<td style="vertical-align: middle;"><?php echo $resultado["Cantidad"].' '.$medida; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Descripcion"]; ?></td>

</tr>    

                <?php } ?>

</tbody>
</table>
            
        </div>
    </div>
</div>
</div>

<!-- END vista C -->


<!-- cambiamos idioma -->
<script>
    $(document).ready(function() {
//   $.fn.DataTable.ext.pager.numbers_length = 5;
    $('#example').DataTable( {

// que aparezcan ultimo siguiente etc...
       "pagingType":"full_numbers",
// ordenamos
       "order": [[ 2, "ASC" ]],
    //    cambiamos idioma
       "language": {
    "decimal":        ".",
    "emptyTable":     "No hay datos para mostrar",
    "info":           "del _START_ al _END_ (_TOTAL_ total)",
    "infoEmpty":      "del 0 al 0 (0 total)",
    "infoFiltered":   "(filtrado de todas las _MAX_ entradas)",
    "infoPostFix":    "",
    "thousands":      "'",
    "lengthMenu":     "Mostrar _MENU_ entradas",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No hay resultados",
    "paginate": {
      "first":      "Primero",
      "last":       "Último",
      "next":       "Siguiente",
      "previous":   "Anterior"
    },
    "aria": {
      "sortAscending":  ": ordenar de manera Ascendente",
      "sortDescending": ": ordenar de manera Descendente ",
    }
  }

    } );  
} );

</script>

       
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
 
 