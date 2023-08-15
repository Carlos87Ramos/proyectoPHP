
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
  


@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('img/fondoo.jpg');

background-repeat: no-repeat;
height: 100%;
width: 100%;
font-family: 'Numans', sans-serif;
}


.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
color: white;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{

color: #FFC312;

background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

  header{
    color: rgb(230, 245, 237);
    background-color: rgb(23, 70, 111);
  border: solid 2px rgb(37, 47, 187);
  width: 100%;
  height: 130px;
  text-align: center;
  margin-bottom: 0px;
  padding-top: 28px;
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
 
         
         
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
      <form method="POST" action="<?= FOLDER_PATH . '/Login/signIn' ?>">
      <img src="img/fondoSystem.png" alt="Fondo del sistema" class="logo" width="85" height="85">
				<h3>Iniciar Sesion</h3>
				
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						
            <input type="text" id="cedula" name="cedula"class="form-control" placeholder="Usuario" required autofocus>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
					</div>
          <?php
            !empty($error_message) ? print($error_message): ''  ?>
                    <div class="d-flex justify-content-center links">
						<input type="checkbox">Remember Me
					</div>
                    <div class="d-flex justify-content-center links">
				
						<input  type="submit" value="Login" value=" Iniciar sesion" color= "white">
          
					</div>
                    <div class="d-flex justify-content-center links">

                    <p class="">&copy; System  M.V.C 2023</p>
						
					</div>
                   
				</form>
			</div>
			
		</div>
	</div>
</div>
        

</body>

</html>


