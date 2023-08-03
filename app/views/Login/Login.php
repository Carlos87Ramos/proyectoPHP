
<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>




<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
<script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script> 
<style>
  header{
    color: rgb(230, 245, 237);
    background-color: rgb(23, 70, 111);
  border: solid 2px rgb(37, 47, 187);
  width: 100%;
  height: 100px;
  text-align: center;
  margin-bottom: 0px;
  padding-top: 20px;
}
.col-3
{
  color: rgb(230, 245, 237);
    background-color: rgb(10, 70, 111);
}
</style>
  <title>Página de inicio de sesión</title>
  

</head>
<header> <h1> System MVC</h1> </header>
<body class="text-center">
  <div class="Conteiner" >
   <div class="row" >

      <div class="col-4"> <h2> Menu lateral</h2>
            </div>
      <div class="col-4"> 
        <form method="POST" action="<?= FOLDER_PATH . '/Login/signIn' ?>">
           <form class="form-signin">
            
              <img class="mb-4" src="img/user-group-solid.svg" alt="Logo de la empresa" class="logo" width="85" height="85">
              <img class="mb-4"  src="/imagenes/fondoSystem.png" alt="Logo de la empresa" width="85" height="85">
              <h1 class="h3 mb-3 font-weight-normal">Inicie Sesion</h1>
              <label for="inputEmail" class="sr-only">Usuario</label>
              <input type="text" id="cedula" name="cedula"class="form-control" placeholder="Usuario" required autofocus>
              <label for="inputPassword" class="sr-only">Contraseña</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
              <?php
            !empty($error_message) ? print($error_message): ''  ?>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="Recordar"> Recordar
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" value=" Iniciar sesion">Entrar</button>
              <p class="mt-5 mb-3 text-muted">&copy; System  V.M.C 2023</p>
            </form>
          </div>
          <div class="col-4"> <h2> Anuncios</h2>
          <img src="/imagenes/fondoSystem.png" width="100px" height="100px">
          <img class="mb-4" src="<?= FOLDER_PATH . '/imgagenes/fondoSystem.png' ?>" alt="Logo de la empresa" class="logo" width="85" height="85">
        </div>
      </div> 
      
  </div>
         
         
        

</body>

</html>


<!--<div class="col-4">
  <div class="container">
    <h2>Iniciar sesión</h2>

    <form method="POST" action="">
      <div class="form-group">
      <img src= "img/user-group-light.svg "alt="" width="100" height="100" >
     

        <input type="text" id="cedula" name="cedula"  placeholder="Cedula sin guion" required >
      </div>

      <div class="form-group">
        
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
         
        </div>
      <div class="form-group">
        <input type="submit" value="Iniciar sesión">
      </div>
    </form>
  </div>
  </div>

<div class="col-4"> <H1>Propaganda</H1></div>-->
