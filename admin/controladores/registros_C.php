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

    public function MostrarRegistroC(){
        $respuesta = RegistrosM::MostrarRegistroM();

        foreach($respuesta as $key => $value){
            echo'<div class="TableItem">
                    <article class="TableItemRegister">'.$value["nombre"].'</article>
                    <article class="TableItemRegister">'.$value["fecha"].'</article>
                    <article class="TableItemRegister"><a href="'.admin_url().'admin.php?page=registros&id='.$value["ID"].'">Editar</a></article>
                    <article class="TableItemRegister"><a href="'.admin_url().'admin.php?page=registros&idB='.$value["ID"].'">Eliminar</a></article>
                </div>';
        }
    }

    public function EliminarRegistroC(){
        if(isset($_GET["idB"])){
            $datosC=$_GET["idB"];

            $respuesta= RegistrosM::EliminarRegistroM($datosC);

            if($respuesta=="Bien"){?>
                <script>
                    location.replace(window.location.pathname + '?page=registros');
                </script>
            <?php
            }else{
                echo "Error al eliminar";
            }
        }
    }
}