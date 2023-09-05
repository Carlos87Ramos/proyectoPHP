


<main>
<div class="centered-div">
<h3>Filtrar por </h3>
<div class="card">
    <form method="post" action="<?= FOLDER_PATH . '/Reporte/listarRegistrosPorTipo' ?>">
        <label for="tipo">Seleccione un Tipo De Movimiento</label>
        <select name="tipo" id="tipo">
            <option value="Entrada" <?= !empty($tipo) && $tipo === 'Entrada' ? 'selected' : '' ?>>Entrada</option>
            <option value="Salida" <?= !empty($tipo) && $tipo === 'Salida' ? 'selected' : '' ?>>Salida</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>
</div>
</main>