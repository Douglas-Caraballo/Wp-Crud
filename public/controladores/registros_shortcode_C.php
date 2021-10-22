<?php

class RegistrosShortcodeC{

    public function MostrarRegistroShortcodeC(){
        $respuesta = RegistrosM::MostrarRegistroM();

        foreach($respuesta as $key => $value){
            echo'<div class="TableItemPage">
                    <article class="TableItemPageRegister">'.$value["nombre"].'</article>
                    <article class="TableItemPageRegister">'.$value["fecha"].'</article>
                </div>';
        }
    }

}