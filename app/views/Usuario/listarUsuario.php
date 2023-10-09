<style>
    .btn-primary{
    margin:auto
    
       
    }
</style>

<body class="text-center">        

<div class="Conteiner" >
      <div class="row" >
      
<h1>Lista de Usuarios</h1>
<button class="btn btn-primary" style="width: 150px;">  <a class="nav-link " href="<?=FOLDER_PATH?>/Usuario/addUsuarioForm">Agregar Usuario</a></button>


     <table class="table table-striped">
       <tr>
           <th>Cedula</th>
           <th>Nombre</th>
           <th>Tipo</th>
           <th>Estado</th>
           <th>Editar</th>
           <th> Resetear Password </th>
       </tr>

       <?php


for ($i = 0; $i < count($info_usuario); $i++) {
    echo '<tr>';
    echo '<td>' . $info_usuario[$i][1] . '</td>';
    echo '<td>' . $info_usuario[$i][2] . '</td>';
    echo '<td>' . $info_usuario[$i][3] . '</td>';
    echo '<td>' . ($info_usuario[$i][4] == 0 ? 'Deshabilitado' : 'Habilitado') . '</td>';
    echo '<td><a href="' . FOLDER_PATH . '/Usuario/listarUsuario/' . $info_usuario[$i][1] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>';
    echo '<td><a href="#" onclick="mostrarConfirmacion(\'' . FOLDER_PATH . '/Usuario/resetearPassword/' . $info_usuario[$i][1] . '\')">Resetear Password</a></td>';
}
?>
</table>
</div>
</div>
</div>

<script>
function mostrarConfirmacion(url) {
    var confirmacion = window.confirm("¿Realmente deseas cambiar la contraseña?");
    
    if (confirmacion) {
        // Redireccionar a la URL para restablecer la contraseña
        window.location.href = url;
    } else {
        // No hacer nada si el usuario cancela la confirmación
    }
}
</script>
