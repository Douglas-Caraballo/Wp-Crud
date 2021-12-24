<?php

function db_WpCrud(){
    global $wpdb;
    $nombreTabla = $wpdb->prefix."registers";
    $nombreTablaSecond= $wpdb->prefix."categories_registers";
    $charset_collate = $wpdb->get_charset_collate();
    $registros="CREATE TABLE $nombreTabla(
            ID BIGINT(20) unsigned NOT NULL AUTO_INCREMENT,
            nombre TEXT NOT NULL,
            fecha TEXT NOT NULL,
            id_user BIGINT(20) unsigned NOT NULL,
            id_categoria_registro BIGINT(20) unsigned NOT NULL,
            PRIMARY KEY (ID),
            KEY ID (id_user),
            KEY ID_category_register(id_categoria_registro)) $charset_collate;";
    $wpdb -> query($registros);

    $categorias="CREATE TABLE $nombreTablaSecond(
        ID BIGINT(20) unsigned NOT NULL AUTO_INCREMENT,
        nombre_c TEXT NOT NULL,
        PRIMARY KEY (ID))$charset_collate;";
    $wpdb -> query($categorias);
}