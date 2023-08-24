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
<body class="text-center">
<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ><h2> Menu lateral</h2></div>
        
<div class="col-6">
 <h2> Lista de Productos</h2> 
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
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>' .$info_producto[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo '<td> <a " href="'. FOLDER_PATH.'/Cocina/deleteProducto/'.$info_producto[$i][1].'"> <i class="fa-solid fa-trash-can"></i></t>';
            echo '</tr>';
       }

       ?>
   </table>
 </div>

        <div class="col-3"><h2>*Propaganda</h2></div>

        <h1>Lista de Productos</h1>
        <input type="text" id="searchInput" placeholder="Buscar productos...">
        <div class="products-container" id="productsContainer"></div>


        <script>
          const products = <?php echo json_encode($info_producto); ?>;
        </script>
        <script src="<?php echo FOLDER_PATH;?>/app/views/Cocina/ListarProductos.js"></script>
</body>
</html>




