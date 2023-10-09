<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .products-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  input#searchInput{
    padding: 6px;
    border-radius: 15px;
    width: 250px;
    font-size: 26px;
  }
  
  .product {
    width: 100px;
    height: 100px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  
  #orderList {
    list-style-type: none;
    padding: 0;
    width: 400px;
    margin-bottom: 20px;
  }
  
  .selected {
    background-color: #a0d3ff;
  }
  .pedido{
    background-color: #4d534d;
    color: #fff;
    width: 300px;

  }
  .pedido>button{
    margin-left: 10px;
  }
  .pedido>span{
    margin-left: 20px;
  }
  .pedido>input{
    width: 50px;
    margin-left: 14px;
    border-radius: 7px;
    padding: 3px;
    font-size: 16px;
    text-align: center;
}
  
  .respuesta{
    display: none;
    background-color: #59df59;
    padding: 10px 20px;
    width: 254px;
    color: #fff;
    font-weight: bold;
    border-radius: 10px;
    margin-left: 41px;
    
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  body{
    text-align: center;
  }

  button#sendPedido{
    padding: 10px 20px;
    font-size: 18px;
  }
  #pedidoContainer{
    display: flex;
    justify-content: center;
  }
</style>




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



<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


<button class="btn btn-success" style="width: 250px;">  <a class="nav-link " href="<?=FOLDER_PATH?>/Cocina/addProductoForm">Agregar nuevo Producto</a></button>

<!-- vista C -->
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Lista de Productos</p>
        <div class="container-fluid p-5">
<table class="table table-striped" id="example">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Imagen</th>
<th scope="col">Nombre</th>
<th scope="col">Cantidad</th>
<th scope="col">Detalle</th>
<th scope="col">Editar</th>
<th scope="col">Eliminar</th>



</tr>
</thead>
<tbody>
<?php 
$numero = $busqueda->num_rows;?>
<h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5> 
<div class="container_card">
    <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
        if(!empty($num)){ $num = $num++; }else{$num = ''; }
      $num++;
      ?>
<th scope="row" style="vertical-align: middle;"><?php echo $num; ?></th>
<td><img src="/uploads/<?php echo $resultado["Foto"]; ?>" alt="" width="100px"></td>
<td style="vertical-align: middle;"><?php echo $resultado["Nombre"]; ?></td>
<?php
             $medida = $resultado["Tipo"] === 'Kg' ? 'KGs' :
             ($resultado["Tipo"] === 'Litro' ? 'Litros' : 'Unidades');
?>
<td style="vertical-align: middle;"><?php echo $resultado["Cantidad"].' '.$medida;; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Descripcion"]; ?></td>

<td style="vertical-align: middle;"><a href="<?=FOLDER_PATH.'/Cocina/listarProducto/'. $resultado["ID"]
?>"><i class="fa-solid fa-pen-to-square"></i></a></td>

<td style="vertical-align: middle;"><a href="<?=FOLDER_PATH.'/Cocina/deleteProducto/'.$resultado["ID"]
?>"><i class="fa-solid fa-trash-can"></i></a></td>

    
</td>



</tr>    

                <?php } ?>

</tbody>
</table>
            
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
  </main>
</body>
</html>




