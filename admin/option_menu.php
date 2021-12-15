<?php
/**
 * Todas las funciones y el menu y submenu del plugin
 */
include (WPC_RUTA. 'admin/controladores/registros_C.php');
include (WPC_RUTA. 'admin/controladores/reportes_C.php');
include (WPC_RUTA. 'admin/controladores/categorias_C.php');
include (WPC_RUTA. 'admin/modelos/registros_M.php');
include (WPC_RUTA. 'admin/modelos/reportes_M.php');
include (WPC_RUTA. 'admin/modelos/categorias_M.php');

/**
 * Paginas del submenu del plugin
 */
include (WPC_RUTA. 'admin/vistas/submenu_registro.php');
include (WPC_RUTA. 'admin/vistas/submenu_todos.php');
include (WPC_RUTA. 'admin/vistas/submenu_editar.php');
include (WPC_RUTA. 'admin/vistas/submenu_reporte.php');
include (WPC_RUTA. 'admin/vistas/submenu_categorias.php');

/**
 * Creacion de la pagina y el menu en el lado del administrador
 */
function MenuInicio(){
?>
    <div>
        <h1><?php _e('WP-Curd', 'wp-crud') ?></h1>
        <h2>Bienvenido al sistema de registro</h2>
        <section class="Wrapper">
            <article class="PrincipalInfo">
                <span>Sistema de registro donde podra:</span>
                <ul>
                    <li>-> Registrar</li>
                    <li>-> Ver Registros</li>
                    <li>-> Editar los Regitros</li>
                    <li>-> Eliminar los Registros</li>
                </ul>
                <span>Ademas podrá trabajar con categorias:</span>
                <ul>
                    <li>-> Crear Categorias</li>
                    <li>-> Ver las Categorias</li>
                    <li>-> Eliminar</li>
                    <li>-> Asignar Categorias a los registros</li>
                </ul>
                <span>Sumado a esto podrá generar un reporte PDF con todos los registros realizados</span>
            </article>
            <figure class="AdminFormContentImg">
                <img class="AdminImg" src="<?= WPC_RUTA_PUBLIC.'admin/img/inicio.svg'; ?>" alt="">
            </figure>
        </section>
    </div>
<?php
}
