<?php

class RegistrosM{

    static public function RealizarRegistroM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $wpdb -> insert($nombreTabla, array(
                'nombre'=>$datosC['nombre'],
                'fecha'=>$datosC['fecha']
                ),array('%s','%s')
        );
        if($wpdb->show_errors){
            return "Error";
        }else{
            return "Bien";
        }
    }

    static public function MostrarRegistroM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $allRegister = $wpdb->get_results(
            "SELECT ID, nombre, fecha FROM $nombreTabla;", ARRAY_A
        );
        return $allRegister;
    }

    static public function EditarRegistroM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $registro = $wpdb -> get_results("SELECT ID, nombre FROM $nombreTabla WHERE 
            ID=$datosC",ARRAY_A);
        return $registro;
    }

    static public function ActualizarRegistroM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $wpdb -> update($nombreTabla,array(
                'nombre'=>$datosC['nombre']
                ),
                array('ID'=>$datosC['id'])
        );
        if($wpdb->show_errors){
            return "Error";
        }else{
            return "Bien";
        }
    }

    static public function EliminarRegistroM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $wpdb -> query("DELETE FROM $nombreTabla WHERE ID=$datosC");
        if($wpdb->show_errors){
            return "Error";
        }else{
            return "Bien";
        }
    }
}