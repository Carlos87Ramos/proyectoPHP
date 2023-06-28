
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>



<!DOCTYPE html>


<html>
<head>
  <title>Página de inicio de sesión</title>
  
  <link rel="stylesheet" href="app/views/template/css/styleLogin.css">
  
</head>
<body>



  <div class="container">
    <h2>Iniciar sesión</h2>
    <form method="POST" action="<?= FOLDER_PATH . '/Login/signIn' ?>">
      <div class="form-group">

        <label for="username">Nombre de usuario:</label>
        <input type="text" id="cedula" name="cedula"  placeholder="Cedula sin guion" required >
      </div>

      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
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