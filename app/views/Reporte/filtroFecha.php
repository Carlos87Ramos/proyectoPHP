

<main>
<div class="centered-div">
<h3>Filtrar por </h3>
<div class="card">
<form  method="post" action=" <?= FOLDER_PATH .'/Reporte/listarRegistrosPorFecha'?>">
    
    <input type="date" name ="fechaInicial" id = "fechaInicial"class="form-control" placeholder="Desde " value = "<?=empty($fecha_inicial)? $fecha: $fecha_inicial?>">
    <input type="date" name ="fechaFinal" id = "fechaFinial"class="form-control" placeholder="Hasta" value = "<?=empty($fecha_final)? $fecha: $fecha_final?>">
    <button type="submit">Filtrar</button>
    </div>
    </form>
    
    </div>
    <?php $fecha= date ("YY/mm/dd");?>
    </main>