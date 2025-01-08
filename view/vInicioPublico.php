<header>
    <img id="logo" src="webroot/images/logo.png">
    <h1>Aplicacion Login logoff</h1>
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
        <input type="submit" name='login' id='login' value='Login'>
    </form>
</header>
<main>
    <div id="imagen">

    </div>
</main>