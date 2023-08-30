
    <div class="">
    <label for="">Filtrar por :</label>
    <form method="post" action="<?= FOLDER_PATH . '/Reporte/listarRegistrosPorUsuario' ?>">
        <label for="">Seleccione un Usuario</label>
        <select name="cedula" id="cedula">
            <?php
            for ($i = 0; $i < count($info_Usuario); $i++) {
                $selected = false;
                if (!empty($cedula)) {
                    if ($info_Usuario[$i][1] === $cedula) {
                        $selected = true;
                    }
                }
                echo '<option value="' . $info_Usuario[$i][1] . '"' . ($selected ? 'selected' : '') . '>' . $info_Usuario[$i][2] . '</option>';
            }
            ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>
</div>

   