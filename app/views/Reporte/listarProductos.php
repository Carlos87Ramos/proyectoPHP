<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="text-center">
<div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ><h2> Menu lateral</h2></div>
        
<div class="col-6">
 <h3> Stock actual</h3> 
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
           
          
            echo '</tr>';
       }

       ?>
   </table>
 </div>

        <div class="col-3"><h2>*Propaganda</h2></div>
        <?php
// Incluye la biblioteca TCPDF
require_once('tcpdf/tcpdf.php');

// Crea una instancia de TCPDF
$pdf = new TCPDF();

// Establece el título y el autor del documento PDF
$pdf->SetTitle('Tabla a PDF');
$pdf->SetAuthor('Tu Nombre');

// Agrega una página
$pdf->AddPage();

// Define los datos de tu tabla (puedes obtener estos datos de una base de datos)
$datos = array(
    array('Nombre', 'Edad', 'Correo'),
    array('Juan', '25', 'juan@example.com'),
    array('María', '30', 'maria@example.com'),
    array('Pedro', '28', 'pedro@example.com'),
);

// Define el encabezado de la tabla
$html = '<table border="1"><tr><th>Nombre</th><th>Edad</th><th>Correo</th></tr>';

// Agrega los datos de la tabla al HTML
foreach ($datos as $fila) {
    $html .= '<tr>';
    foreach ($fila as $valor) {
        $html .= '<td>' . $valor . '</td>';
    }
    $html .= '</tr>';
}

$html .= '</table>';

// Agrega el HTML al PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Cierra el PDF y lo muestra en el navegador
$pdf->Output('tabla.pdf', 'I');
?>




</body>
</html>




