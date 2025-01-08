<header id="headerPrograma">
    <img id="logo" src="webroot/images/logo.png">
    <h1>Bienvenido</h1>
    <form method='post'>                                                
        <div class='dropdown'>
            <?php
            $imagenIdioma = '';
            switch ($_COOKIE['Idioma']) {
                case 'es':
                    $imagenIdioma = 'españa.png';
                    break;

                case 'en':
                    $imagenIdioma = 'uk.png';
                    break;
                default:
                    $imagenIdioma = 'españa.png';
                    break;
            }
            ?>
            <img src="webroot/images/<?php echo($imagenIdioma) ?>" style="width: 40px; height: 20px">
            <div class='dropdown-content'>
                <button type="submit" name='español' id='español'>
                    <img src="webroot/images/españa.png" style="width: 40px; height: 20px">
                </button>
                <button type="submit" name='ingles' id='ingles'>
                    <img src="webroot/images/uk.png" style="width: 40px; height: 20px">
                </button>                        
            </div>
        </div>
        <input type="submit" name='logoff' id='logoff' value='Cerrar sesion'>
    </form>
</header>
<main id="programa">
    <?php

        switch ($_COOKIE['Idioma']) {
            case 'es':
                if ($oUsuarioEnCurso->T01_NumConexiones > 0) {
                ?>
                    <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, esta es la  <?php echo $oUsuarioEnCurso->T01_NumConexiones + 1 ?> vez que te conectas;
                    usted se conectó por ultima vez el: <?php echo date_format(new DateTime($oUsuarioEnCurso->T01_FechaHoraUltimaConexion), "d/m/Y H:i:s") ?></p>
                <?php
                } else {
                ?>
                    <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, es la primera vez que te conectas</p>
                <?php
            }
            break;

        case 'en':
            if ($oUsuarioEnCurso->T01_NumConexiones > 0) {
                ?>
                    <p>Welcome <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, this is the  <?php echo $oUsuarioEnCurso->T01_NumConexiones + 1 ?> time you connect;
                    your last connection was the: <?php echo date_format(new DateTime($oUsuarioEnCurso->T01_FechaHoraUltimaConexion), "d/m/Y H:i:s") ?></p>
                <?php
            } else {
                ?>
                    <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, es la primera vez que te conectas</p>
                <?php
            }
            break;
        }             
    ?>
</main>