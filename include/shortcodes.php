<?php
include_once(WPC_RUTA. 'public/controladores/registros_shortcode_C.php');

function VerRegistrosShortCode(){
    $mostrarRegistros = new RegistrosShortcodeC();
    $mostrarRegistros -> MostrarRegistroShortcodeC();

}

function ReistrarShortCode(){ ?>
            <div class="Wrapper">
            <div>
                <form class="WrapperForm" method="post">
                    <label>Nombre</label>
                    <input type="text" name="NombreR">
                    <label>Fecha</label>
                    <input type="date" name="FechaR">
                    <input class="submint" type="submit" value="Enviar">
                    <?php
                        $registrar = new RegistrosC();
                        $registrar -> RealizarRegistroC();
                    ?>
                </form>
            </div>
<?php
}

add_shortcode( 'wpc_mostrar_registros', 'VerRegistrosShortCode');
add_shortcode( 'wpc_registrar', 'ReistrarShortCode' );