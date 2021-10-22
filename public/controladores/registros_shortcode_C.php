<?php

class RegistrosShortcodeC{

    public function MostrarRegistroShortcodeC(){
        $respuesta = RegistrosM::MostrarRegistroM();

        foreach($respuesta as $key => $value){
            echo'<div class="TableItem">
                    <article class="TableItemRegister">'.$value["nombre"].'</article>
                    <article class="TableItemRegister">'.$value["fecha"].'</article>
                </div>';
        }
    }

}