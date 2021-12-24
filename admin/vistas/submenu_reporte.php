<?php
function SubmenuReporte(){
?>
    <div>
        <h2><?php _e('Generar Reportes', 'generar reporte') ?></h2>
        <div class="Wrapper">
            <div>
                <section class="Wrapper">
                    <h3>Todos los registros</h3>
                    <a class="Wp-CrudSubmit Button" href="<?= admin_url().'admin.php?page=reportes_general'?>">Generar</a>
                </section>
                <section class="Wrapper">
                    <h3>Reporte por usuario</h3>
                    <form method="post">
                        <select class="SelectReporteUsuario" name="UsuarioRE" required>
                            <?php
                                $usuarios = new ReportesUserC;
                                $usuarios -> SelectUserC();
                            ?>
                        </select>
                        <input class="Wp-CrudSubmit ReporteSubmit" type="submit" value="Generar">
                        <?php
                            $usuarioReporte = new ReportesC();
                            $usuarioReporte->UsuariosReportesC();
                        ?>
                    </form>
                </section>
            </div>
            <figure class="AdminFormContentImg">
                <img class="AdminImg" src="<?= WPC_RUTA_PUBLIC.'admin/img/reportes.svg'; ?>" alt="">
            </figure>
        </div>
    </div>
<?php
}
function SubmenuReporteGeneral(){
    $reporte = new ReportesC();
    $reporte -> RealizarReportesC();
}
?>