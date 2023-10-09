<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
<style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('img/fondoo.jpg');

background-repeat: no-repeat;
height: 100%;
width: 100%;
font-family: 'Numans', sans-serif;
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
.error{
    text-align: center;
    color: white; 
   margin-top: 200px; 
}
</style>
</head>

<header> <h1> Bienvenido a System MVC  Zanja Honda</h1> </header>

<body class="text-center">
 
         
         

   <h1 class="error"> <?php
        print("Error 404 :Página no encontrada")
    ?></h1>
    </div>

</body>
</html>