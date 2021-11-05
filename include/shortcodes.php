<?php
include_once(WPC_RUTA. 'public/controladores/registros_shortcode_C.php');

function VerRegistrosShortCode(){ ?>
    <div class="Table">
        <div class="TableItemPage">
            <article class="TableItemPageRegister">Nombre</article>
            <article class="TableItemPageRegister">Fecha</article>
            <article class="TableItemPageRegister">Categoria</article>
        </div>
        <?php
            $mostrarRegistros = new RegistrosShortcodeC();
            $mostrarRegistros -> MostrarRegistroShortcodeC();
        ?>
    </div>
<?php
}

function ReistrarShortCode(){
    if (is_user_logged_in()){ ?>
    <div class="WrapperPage">
        <div>
            <form class="WrapperPageForm" method="post">
                <label>Nombre</label>
                <input type="text" name="NombreR">
                <label>Fecha</label>
                <input type="date" name="FechaR">
                <label>Categoria</label>
                <select name="CategoriasR">
                    <?php
                        $categorrias = new RegistrosC();
                        $categorrias -> SelectCategoriasC();
                    ?>
                </select>
                <input class="submit" type="submit" value="Enviar">
                <?php
                    $registrar = new RegistrosC();
                    $registrar -> RealizarRegistroC();
                ?>
            </form>
        </div>
    </div>
<?php
    }else{ ?>
        <div>
            <p>No puede registrar mientras no se encuentre logeado</p>
        </div>
    <?php
    }
}

add_shortcode( 'wpc_mostrar_registros', 'VerRegistrosShortCode');
add_shortcode( 'wpc_registrar', 'ReistrarShortCode' );