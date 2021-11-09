<?php

class CategoriasC {
    public function MostrarCategoriasC(){
        $respuesta = CategoriasM::MostrarCategoriasM();

            foreach($respuesta as $key => $value){
                echo '<div class="TableCategory">
                        <article class="CategoryItem">'.$value["nombre_c"].'</article>
                        <article><a href="'.admin_url().'admin.php?page=categorias&idBC='.$value["ID"].'">Eliminar</a></article>
                    </div>';
            }
    }

    public function EliminarCategoriasC(){
        if(isset($_GET["idBC"])){
            $datosC=$_GET["idBC"];

            $respuesta= CategoriasM::EliminarCategoriasC($datosC);

            if($respuesta=="Bien"){?>
                <script>
                    location.replace(window.location.pathname + '?page=categorias');
                </script>
            <?php
            }else{
                echo "Error al eliminar";
            }
        }
    }
}
