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
            <p class="NoRegister">No puede ver los registros si no se encuetra logueado</p>
            <figure class="ContainerRegisterPageImg">
                <img class="RegisterPageImg" src="<?= WPC_RUTA_PUBLIC.'public/img/noregister.svg';?>" alt="">
            </figure>
        </div>
<?php
    }
}

function ReistrarShortCode(){
    if (is_user_logged_in()){ ?>
    <div class="WrapperPage">
        <div class="ContainerForm">
            <form class="WrapperPageForm" method="post">
                <label>Nombre</label>
                <input class="PageFormInput" type="text" name="NombreR" required>
                <label>Fecha</label>
                <input class="PageFormInput" type="date" name="FechaR" required>
                <label>Categoria</label>
                <select class="PageFormInput" name="CategoriasR" required>
                    <?php
                        $categorrias = new RegistrosC();
                        $categorrias -> SelectCategoriasC();
                    ?>
                </select>
                <input class="SubmitPageRegistrer" type="submit" value="Enviar">
                <?php
                    $registrar = new RegistrosC();
                    $registrar -> RealizarRegistroC();
                ?>
            </form>
        </div>
        <figure class="ContainerRegisterPageImg">
            <img class="RegisterPageImg" src="<?= WPC_RUTA_PUBLIC.'public/img/forms.svg';?>" alt="">
        </figure>
    </div>
<?php
    }else{ ?>
        <div class="WrapperPage">
            <p class="NoRegister">No puede registrar mientras no se encuentre logeado</p>
            <figure class="ContainerRegisterPageImg">
                <img class="RegisterPageImg" src="<?= WPC_RUTA_PUBLIC.'public/img/noregister.svg';?>" alt="">
            </figure>
        </div>
    <?php
    }
}

add_shortcode( 'wpc_mostrar_registros', 'VerRegistrosShortCode');
add_shortcode( 'wpc_registrar', 'ReistrarShortCode' );