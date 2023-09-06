<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


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

<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "Zanja_Honda";
?>
<?php
$conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

// Verifica la conexión
if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
?>


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




<!-- vista C -->
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Lista de Productos</p>
        <div class="container-fluid p-5">
<table class="table" id="example">
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
            <?php $busqueda=mysqli_query($conexion,"SELECT * FROM Producto "); 
            $numero = mysqli_num_rows($busqueda); ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                    if(!empty($num)){ $num = $num++; }else{$num = ''; }
                  $num++;
                  ?>
<tr>
<th scope="row" style="vertical-align: middle;"><?php echo $num; ?></th>
<td><img src="/uploads/<?php echo $resultado["Foto"]; ?>" alt="" width="100px"></td>
<td style="vertical-align: middle;"><?php echo $resultado["Nombre"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Cantidad"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Descripcion"]; ?></td>

<td style="vertical-align: middle;"><a href="<?=FOLDER_PATH.'/Cocina/listarProducto/'. $info_producto ["1"]
?>"><i class="fa-solid fa-pen-to-square"></i></a></td>

<td style="vertical-align: middle;"><a href="<?=  $info_producto["1"]. FOLDER_PATH.'/Cocina/deleteProducto/'
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







<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script> -->

<!--<body class="text-center">
  <main>
<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ></div>
        
<div class="col-12">
<div class="Conteiner" >
      <div class="row" >
<h1>Lista de Productos</h1>-->


      <!--  <input type="text" id="searchInput" placeholder="Buscar productos...">
       <div class="products-container" id="productsContainer"></div>
</div>
</div>
 <h3> Lista de Productos</h3> 
     <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Editar</th>
           <th>Eliminar</th>
        
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
        $medida = $info_producto[$i][6] === 'Kg' ? ' KGs ' :
        ($info_producto[$i][6] === ' Litro ' ? 'Litros' : ' Unidades ');      
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>' .$info_producto[$i][5]. $medida .'</td>';
           
           echo ' <td><a href="'. FOLDER_PATH.'/Cocina/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo ' <td><a " href="'. FOLDER_PATH.'/Cocina/deleteProducto/'.$info_producto[$i][1].'"> <i class="fa-solid fa-trash-can"></i></t>';
            echo '</tr>';
       }

       ?>
   </table>
 </div>

        <div class="col-3"></div>



        <script>
          const products = <?php echo json_encode($info_producto); ?>;
        </script>
        <script src="<?php echo FOLDER_PATH;?>/app/views/Cocina/ListarProductos.js"></script>-->
        </main>
</body>
</html>




