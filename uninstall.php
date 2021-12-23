<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
/**
 * Elimina las tablas creadas por el plugin
 */
global $wpdb;
$nombreTabla = $wpdb->prefix."registers";
$nombreTablaSecond= $wpdb->prefix."categories_registers";

$sqlRegister="DROP TABLE IF EXISTS $nombreTabla";
$wpdb -> query($sqlRegister);

$sqlCategoriesRegister = "DROP TABLE IF EXISTS $nombreTablaSecond";
$wpdb -> query($sqlCategoriesRegister);

/**
 * Elimina las paginas creadas por el plugin
 */

$pagina = get_pages( array(
    'authors'=> 1,
    'post_type'=>'page',
    'post_status' => 'publish',
    'sort_column' => 'post_title'
    )
);

foreach ($pagina as $paginas){
    $nombre= $paginas -> post_title;
    if($nombre=='Todos los Registros'){
        wp_delete_post( $paginas-> ID , true );
    }
    if ($nombre=='Registrar'){
        wp_delete_post( $paginas-> ID , true );
    }
}

wp_cache_flush();