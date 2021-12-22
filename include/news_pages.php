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

/*function EliminarPaginas(){
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
}*/