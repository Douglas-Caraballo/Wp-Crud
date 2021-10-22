<?php

function PaginasCrud(){
    $leerRegistros = array(
        'post_title' => 'Todos los Registros',
        'post_content' => '[wpc_mostrar_registros]',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_type' => 'page',
    );

    $crearRegistros = array(
        'post_title'=> 'Registrar',
        'post_content'=>'[wpc_registrar]',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_type' => 'page',
    );

    wp_insert_post($leerRegistros);
    wp_insert_post( $crearRegistros);

}
