<?php
include_once(WPC_RUTA. 'public/controladores/registros_shortcode_C.php');

function VerRegistrosShortCode(){
    if(is_user_logged_in()){?>
        <div class="Table">
            <div class="TableItemPage">
                <article class="TableItemPageRegister TableHeader">Nombre</article>
                <article class="TableItemPageRegister TableHeader">Fecha</article>
                <article class="TableItemPageRegister TableHeader">Categoria</article>
            </div>
            <?php
                $mostrarRegistros = new RegistrosShortcodeC();
                $mostrarRegistros -> MostrarRegistroShortcodeC();
            ?>
        </div>
<?php
    }else{?>
        <div class="WrapperPage">
            <p>No puede ver los registros si no se encuetra logueado</p>
        </div>
<?php
    }
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
        <div class="WrapperPage">
            <p>No puede registrar mientras no se encuentre logeado</p>
        </div>
    <?php
    }
}

add_shortcode( 'wpc_mostrar_registros', 'VerRegistrosShortCode');
add_shortcode( 'wpc_registrar', 'ReistrarShortCode' );