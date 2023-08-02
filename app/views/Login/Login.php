
<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

 <?php //require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="app/views/template/css/styleHome.css">
<script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script> 
  <title>Página de inicio de sesión</title>
</head>
<body>



  <div class="container">
    <h2>Iniciar sesión</h2>
    <form method="POST" action="<?= FOLDER_PATH . '/Login/signIn' ?>">
      <div class="form-group">
      <img src= "/img/fondoSystem.svg"alt="" width="100" height="100"><i class="fa-solid fa-plus"></i>

        <input type="text" id="cedula" name="cedula"  placeholder="Cedula sin guion" required >
      </div>

      <div class="form-group">
        
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <?php
            !empty($error_message) ? print($error_message): ''  ?>
        </div>
      <div class="form-group">
        <input type="submit" value="Iniciar sesión">
      </div>
    </form>
  </div>

</body>
</html>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/footer.php'?>