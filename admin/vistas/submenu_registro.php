<?php
function SubMenuRegistro(){?>
    <div>
        <h2><?php _e('Formulario de Registros','formulario de registro') ?></h2>
        <div class="Wrapper">
            <div class="Form">
                <form class="WrapperForm" method="post">
                    <label>Nombre</label>
                    <input type="text" name="NombreR" required>
                    <label>Fecha</label>
                    <input type="date" name="FechaR" required>
                    <label>Categoria</label>
                    <select class="RegisterSelec" name="CategoriasR" required>
                        <?php
                            $categorias = new RegistrosC();
                            $categorias -> SelectCategoriasC();
                        ?>
                    </select>
                    <input class="Wp-CrudSubmit" type="submit" value="Enviar">
                    <?php
                        $registrar = new RegistrosC();
                        $registrar -> RealizarRegistroC();
                    ?>
                </form>
            </div>
            <figure class="AdminFormContentImg">
                <img class="AdminImg" src="<?= WPC_RUTA_PUBLIC.'admin/img/adminform.svg'; ?>" alt="">
            </figure>
        </div>
    </div>
<?php
}