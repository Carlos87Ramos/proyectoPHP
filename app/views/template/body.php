<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>
 
<head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0ce3f10c55.js" crossorigin="anonymous"></script>  
    <style>


html,body{
background-image: url('img/spaghetti.jpg') !important;
background-repeat:repeat-y;
height: 100%;
width: 100%;
text-align: center;
font-family: 'Numans', sans-serif;
}
  
 .container {
  width: 400px;
  margin: 100px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   font-family:'Times New Roman';
 
}
h2 {
   color: white; 
   text-align: center;
   font: size 16px; ;
   font-family:'Times New Roman';
}
.form-group {
  margin-bottom: 15px;
}
label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
input[type="submit"]:hover {
  background-color: #09200a;
}
button[type="submit"] {
  background-color: grey;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}
button[type="submit"]:hover {
  background-color: #08850a;
}
a{
    color:blue;
    
}
.table.td {
            text-align: center; /* Aplica centrado al contenido de la celda */
            vertical-align: middle !important;
            justify-content: center;
    align-items: center;
        }
table{
  color:white;
}
#customers 
  {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}

#table td
 {border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  vertical-align: middle !important;}
  
 


#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

    </style>
    
</head>
