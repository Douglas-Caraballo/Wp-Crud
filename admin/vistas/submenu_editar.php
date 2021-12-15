<?php
function EditarRegistro(){
?>
    <h2><?php _e('Editar Registros', 'editar registros') ?></h2>
    <div class="Wrapper">
        <form class="WrapperForm" method="post">
            <?php
                $editar = new RegistrosC();
                $editar -> EditarRegistroC();
                $actializar = new RegistrosC();
                $actializar -> ActualizarRegistroC();
            ?>
        </form>
    </div>
<?php
}