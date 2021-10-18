<?php

class ReportesM{
    static public function RealizarReportesM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $allRegister = $wpdb->get_results(
            "SELECT nombre, fecha FROM $nombreTabla;", ARRAY_A
        );
        return $allRegister;
    }
}