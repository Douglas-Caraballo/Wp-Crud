<?php

function db_WpCrud(){
    global $wpdb;
    $nombreTabla = $wpdb->prefix."registers";
    $nombreTablaSecond= $wpdb->prefix."users";
    $charset_collate = $wpdb->get_charset_collate();
    $create="CREATE TABLE $nombreTabla(
            ID BIGINT(20) unsigned NOT NULL AUTO_INCREMENT,
            nombre TEXT NOT NULL,
            fecha TEXT NOT NULL,
            id_user BIGINT(20) unsigned NOT NULL,
            PRIMARY KEY (ID),
            KEY ID (id_user)) $charset_collate;";
    $wpdb -> query($create);
}

/*function EliminarBD(){
    global $wpdb;
    $nombreTabla = $wpdb->prefix."registers";
    $sql="DROP TABLE IF EXISTS $nombreTabla";
    $wpdb -> query($sql);
}*/