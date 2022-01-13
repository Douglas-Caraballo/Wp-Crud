<?php

class RegistrosM{

    static public function RealizarRegistroM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."registers";
        $wpdb -> insert($nombreTabla, array(
                'nombre'=>$datosC['nombre'],
                'fecha'=>$datosC['fecha'],
                'id_user'=>$datosC['id_user'],
                'id_categoria_registro'=>$datosC['categoria']
                ),array('%s','%s','%s','%s')
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
        $nombreTablaSecond= $wpdb->prefix."categories_registers";
        $allRegister = $wpdb->get_results(
            "SELECT R.ID, R.nombre, R.fecha, C.nombre_c FROM $nombreTabla AS R INNER JOIN 
            $nombreTablaSecond AS C ON R.id_categoria_registro=C.ID;", ARRAY_A
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
                'nombre'=>$datosC['nombre'],
                'fecha'=>$datosC['fecha'],
                'id_categoria_registro'=>$datosC['categoria']
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

    static public function AgregarCategoriasM($datosC){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."categories_registers";
        $wpdb ->insert($nombreTabla, array(
                        'nombre_c'=>$datosC["nombre"]
                        ),array('%s')
                    );
        if($wpdb->show_errors){
            return "Error";
        }else{
            return "Bien";
        }
    }

    static public function SelectCategoriasM(){
        global $wpdb;
        $nombreTabla = $wpdb->prefix."categories_registers";
        $allRegister = $wpdb->get_results(
            "SELECT ID, nombre_c FROM $nombreTabla;", ARRAY_A
        );
        return $allRegister;
    }
}