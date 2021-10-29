<?php

class ReportesM{
    static public function RealizarReportesM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $nombreTablaSecond= $wpdb->prefix."users";
        $allRegister = $wpdb->get_results(
            "SELECT P.nombre, P.fecha, U.user_nicename FROM $nombreTabla AS P INNER JOIN 
            $nombreTablaSecond AS U ON P.id_user = U.ID ORDER BY P.fecha;", ARRAY_A
        );
        return $allRegister;
    }
}