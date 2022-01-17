<?php
function SubMenuTodos(){
?>
    <div>
        <h2><?php _e('Todos los Registros', 'todos los registros') ?></h2>
        <div class="Table">
            <div class="TableItem">
                <article class="TableItemRegister TableRegisterHead">Nombre</article>
                <article class="TableItemRegister TableRegisterHead">Fecha</article>
                <article class="TableItemRegister TableRegisterHead">Categoria</article>
                <article class="TableItemRegister"></article>
                <article class="TableItemRegister"></article>
            </div>
            <?php
                $mostrar = new RegistrosC();
                $mostrar -> MostrarRegistroC();
            ?>
        </div>
        <?php
            $eliminar = new RegistrosC();
            $eliminar -> EliminarRegistroC();
        ?>
    </div>
<?php
}