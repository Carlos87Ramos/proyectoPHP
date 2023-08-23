<label for="">Filtrar por :</label>
   <form  method="post" action=" <?= FOLDER_PATH .'/Reporte/listarRegistrosPorUsuarios'?>">
<label for="">Seleccione un Usuario</label>
<select name="cedula" id="cedula">
   <?php
for ($i=0; $i <count($info_Usuario); $i++) { 
  echo '<option>'.$info_Usuario[$i][2].'</option>';

}

?>
</select>
<button type=""submit>Filtrar</button>

    </div>
    </form>