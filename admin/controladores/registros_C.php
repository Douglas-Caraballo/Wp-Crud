<?php

class RegistrosC{

    public function RealizarRegistroC(){
        $idUsuarios = get_current_user_id();
        if (isset($_POST["NombreR"])){
            $datosC = array("nombre"=>$_POST["NombreR"], "fecha"=>$_POST["FechaR"], "id_user"=>$idUsuarios, "categoria"=>$_POST["CategoriasR"]);
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
                    <article class="TableItemRegister">'.$value["nombre_c"].'</article>
                    <article class="TableItemRegister"><a href="'.admin_url().'admin.php?page=editar&id='.$value["ID"].'">Editar</a></article>
                    <article class="TableItemRegister"><a href="'.admin_url().'admin.php?page=registros&idB='.$value["ID"].'">Eliminar</a></article>
                </div>';
        }
    }

    public function EditarRegistroC(){
        $datosC = $_GET["id"];

        $respuesta = RegistrosM::EditarRegistroM($datosC);
        foreach($respuesta as $key => $value){
            echo   '<input type="hidden" value="'.$value["ID"].'"name="idE"">
                    <label>Nombre</label>
                    <input type="text" value="'.$value["nombre"].'"name="nombreE">
                    <input class="submint" type="submit" value="Actualizar">
                    ';
        }
    }

    public function ActualizarRegistroC(){
        if (isset($_POST["nombreE"])){
            $datosC= array("id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"]);

            $respuesta = RegistrosM::ActualizarRegistroM($datosC);
            if($respuesta=="Bien"){?>
                <script>
                    location.replace(window.location.pathname + '?page=registros');
                </script>
            <?php
            }else{
                echo "Ocurrió un error al actualizar";
            }
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

    public function AgregarCategoriasC(){
        if(isset($_POST["NombreCR"])){
            $datosC=array("nombre"=>$_POST["NombreCR"]);
            $respuesta = RegistrosM::AgregarCategoriasM($datosC);
            if($respuesta=="Bien"){
                echo "Registrado con exito";
            }else{
                echo "Ocurrió un error al registrar";
            }
        }
    }

    public function SelectCategoriasC(){
        $respuesta= RegistrosM::SelectCategoriasM();
        foreach($respuesta as $key => $value){
            echo '<option value="'.$value["ID"].'">'. $value["nombre_c"] .'</option>';
        }
    }
}