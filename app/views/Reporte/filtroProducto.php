
<main>
<div class="centered-div">
<h3>Filtrar por </h3>
<div class="card">
    <form method="post" action="<?= FOLDER_PATH . '/Reporte/listarRegistrosPorProducto' ?>">
        <label for="">Selecione un Producto</label>
        <select name="producto" id="producto">
            <?php
            for ($i = 0; $i < count($info_Producto); $i++) {
                $selected = false;
                if (!empty($producto)) {
                    if ($info_Producto[$i][1] === $producto) {
                        $selected = true;
                    }
                }
                echo '<option value="' . $info_Producto[$i][1] . '"' . ($selected ? 'selected' : '') . '>' . $info_Producto[$i][2] . '</option>';
            }
            ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>
</div>

 </main>  