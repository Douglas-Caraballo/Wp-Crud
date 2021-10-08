<?php

class RegistrosM{

    static public function RealizarRegistroM($datosC){
        global $wpdb;
        $nombre = $datosC["nombre"];
        $fecha = $datosC["fecha"];
        $nombreTabla = $wpdb->prefix."registers";
        $wpdb -> insert("INSERT INTO $nombreTabla(nombre, fecha) VALUE ($nombre, $fecha);");
        if($wpdb->show_errors){
            return "Bien";
        }else{
            return "Error";
        }
    }
}