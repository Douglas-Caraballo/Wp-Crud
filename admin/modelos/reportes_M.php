<?php

class ReportesM{
    static public function RealizarReportesM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $nombreTablaSecond= $wpdb->prefix."users";
        $nombreTablathird= $wpdb->prefix."categories_registers";
        $allRegister = $wpdb->get_results(
            "SELECT P.nombre, P.fecha, U.user_nicename, C.nombre_c FROM $nombreTabla AS P INNER JOIN 
            $nombreTablaSecond AS U ON P.id_user = U.ID INNER JOIN $nombreTablathird AS C 
            ON P.id_categoria_registro = C.ID ORDER BY P.fecha;", ARRAY_A
        );
        return $allRegister;
    }

    /*static public function UsuariosReportesM($datosC){
        global $wpdb;
        $usuario = $datosC["usuario"];
        $nombreTabla = $wpdb->prefix."registers";
        $nombreTablaSecond= $wpdb->prefix."users";
        $nombreTablathird= $wpdb->prefix."categories_registers";
        $allRegister = $wpdb->get_results(
            "SELECT P.nombre, P.fecha, U.user_nicename, C.nombre_c FROM $nombreTabla AS P INNER JOIN 
            $nombreTablaSecond AS U ON P.id_user = U.ID INNER JOIN $nombreTablathird AS C 
            ON P.id_categoria_registro = C.ID WHERE U.ID = $usuario ORDER BY P.fecha;", ARRAY_A
        );
        return $allRegister;

    }*/
}
/*class ReportesUserM{
    static public function SelectUserM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."users";
        $allRegister = $wpdb ->get_results(
            "SELECT ID, user_nicename FROM $nombreTabla;", ARRAY_A
        );
        return $allRegister;
    }
}*/