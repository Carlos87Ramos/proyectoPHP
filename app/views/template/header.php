<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>



   
   



   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="app/views/template/css/styleHome.css">
    <script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script> 
    <style>
        header
{
    background-color: blue;
    border-bottom: 4px solid #eddbdb;
    padding: 20px 0;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    
}
h1{
    color: rgb(243, 236, 236);
  }
  button.icon{
    width: 25px ;
    height: 25px;
    background-color: #f2f2f2;
    color: blue;
  }
    </style>
</head>
<body>
<header>
    <h1> System MVC</h1>
   
    <button class="icon" ><a  href="<?=FOLDER_PATH?>/Cocina/nav.php"><i class="fa-solid fa-bars"></i> </a> </button>
    
</header>
</body>
</html>
