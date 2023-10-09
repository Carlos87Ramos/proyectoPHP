






<style>
  body{
 background-color:rgba(50,120,60,0.3) !important ;
  
 }
</style>
<?php 
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php if ($tipo === 'Director') require_once PATH_HEADER .'headerReporte.php';
else
require_once PATH_HEADER .'header.php';

?>




<body>
<main>


<div>
      

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
  <?php !empty($message) ? print( "<div class = \"alert alert-$message_type\">$message</div>"):'' ?> 
   
   <?php !empty($show_addUsuarioForm)? require'app/views/Usuario/addUsuario.php' : ''?>
   <?php !empty($show_listar_usuario)? require'app/views/Usuario/listarUsuario.php' : ''?>
   <?php !empty($show_editar_usuario)? require'app/views/Usuario/editarUsuario.php' : ''?>
   <?php !empty($show_editar_password)? require'app/views/Usuario/cambiarPassword.php' : ''?>
   
   
  
</div>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>
</main>
</body>

