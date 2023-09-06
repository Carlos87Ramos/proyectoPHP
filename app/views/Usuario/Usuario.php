
    
    <?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once PATH_HEADER .'headerReporte.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>


<body>
<main>
<br>

<div>
  <?php !empty($message) ? print( "<div class = \"alert alert-$message_type\">$message</div>"):'' ?> 
   
   <?php !empty($show_addUsuarioForm)? require'app/views/Usuario/addUsuario.php' : ''?>
  
 
</div>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>
</main>
</body>

