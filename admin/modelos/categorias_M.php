<?php

class CategoriasM{
    static public function MostrarCategoriasM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."categories_registers";
        $allRegister = $wpdb->get_results(
            "SELECT ID, nombre_c FROM $nombreTabla;", ARRAY_A
        );
        return $allRegister;
    }

    static public function EliminarCategoriasC($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."categories_registers";
        $wpdb -> query("DELETE FROM $nombreTabla WHERE ID=$datosC");
        if($wpdb->show_errors){
            return "Error";
        }else{
            return "Bien";
        }
    }
}