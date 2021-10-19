<?php
include (WPC_RUTA. 'admin/controladores/registros_C.php');
include (WPC_RUTA. 'admin/controladores/reportes_C.php');
include (WPC_RUTA. 'admin/modelos/registros_M.php');
include (WPC_RUTA. 'admin/modelos/reportes_M.php');
function MenuInicio(){
?>
    <div>
        <h2><?php _e('WP-Curd', 'wp-crud') ?></h2>
        <p>Bienvenido al sistema de registro</p>
    </div>
<?php
}
function SubMenuRegistro(){
?>
    <div>
        <h2><?php _e('Formulario de Registros','formulario de registro') ?></h2>
        <div class="Wrapper">
            <div>
                <form class="WrapperForm" method="post">
                    <label>Nombre</label>
                    <input type="text" name="NombreR">
                    <label>Fecha</label>
                    <input type="date" name="FechaR">
                    <input class="submint" type="submit" value="Enviar">
                    <?php
                        $registrar = new RegistrosC();
                        $registrar -> RealizarRegistroC();
                    ?>
                </form>
            </div>
            <div>
                <p> Aca va una imagen</p>
            </div>
        </div>
    </div>
<?php
}
function SubMenuTodos(){
?>
    <div>
        <h2><?php _e('Todos los Registros', 'todos los registros') ?></h2>
        <div class="Table">
            <div class="TableItem">
                <article class="TableItemRegister">Nombre</article>
                <article class="TableItemRegister">Fecha</article>
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
function SubmenuReporte(){
?>
    <div>
        <h2><?php _e('Generar Reportes', 'generar reporte') ?></h2>
        <div class="Wrapper">
            <a class="submint Button" href="<?= admin_url().'admin.php?page=reportes_general'?>">Generar</a>
        </div>
    </div>
<?php
}
function SubmenuReporteGeneral(){
    $reporte = new ReportesC();
    $reporte -> RealizarReportesC();
}
?>
