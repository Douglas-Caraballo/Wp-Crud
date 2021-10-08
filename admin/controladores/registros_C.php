<?php

class RegistrosC{

    public function RealizarRegistroC(){
        if (isset($_POST["NombreR"])){
            $datosC = array("nombre"=>$_POST["NombreR"], "fecha"=>$_POST["FechaR"]);
            $respuesta = RegistrosM::RealizarRegistroM($datosC);
            if($respuesta=="Bien"){
                echo "Registrado con exito";
            }else{
                echo "Ocurrió un error al registrar";
            }

        }
    }
}