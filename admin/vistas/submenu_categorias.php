<?php
function SubMenuCategorias(){?>
    <h2><?php _e('Registrar Categorias','Registrar una categoria') ?></h2>
    <div class="Wrapper">
        <div>
            <form class="WrapperForm" method="post">
                <label>Nombre de la categoria</label>
                <input type="text" name="NombreCR" required>
                <input class="Wp-CrudSubmit" type="submit" value="Enviar">
                <?php
                    $registrarCategorias = new RegistrosC();
                    $registrarCategorias -> AgregarCategoriasC()
                ?>
            </form>
        </div>
        <div class="CategoryList">
            <h3>Todas las categorias</h3>
            <?php
                $mostrarCategorias = new CategoriasC();
                $mostrarCategorias -> MostrarCategoriasC();

                $eliminarCategorias = new CategoriasC();
                $eliminarCategorias -> EliminarCategoriasC();
            ?>
        </div>
    </div>
<?php
}