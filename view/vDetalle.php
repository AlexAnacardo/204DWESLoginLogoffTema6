<header id="headerDetalle">
    <img id="logo" src="webroot/images/logo.png">
    <h1>Detalle</h1>
    <p id="zonaUsuario"><input type="image" id="perfilUser" name="perfilUser" src="webroot/images/LogoUsuario.png"><?php echo($oUsuarioEnCurso->getDescUsuario()); ?></p>
    <form method='post'>
        <input type="submit" name='volver' id='volver' value='Volver'>               
    </form>
</header>  
<main id="detalle">
    <div>
        <?php

        //Funcion que muestra el nombre y el contenido de una variable superglobal en una tabla
        function mostrarSuperglobales($nombre, $global) {
            if (!empty($global)) {
                echo('<p>Variable $_' . $nombre . '</p>');
                echo '<table>';
                foreach ($global as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo '</table>';
            } else {
                echo('<p>La variable $_' . $nombre . ' esta vacia</p>');
            }
        }

        //Si la variable $_SESSION no esta definida, no se intentara mostrar su contenido
        echo('<p>Variable $_SESSION</p>');
        echo '<table>';
        foreach ($_SESSION as $clave => $valor) {
            echo("<tr><td>" . $clave . "</td>");
            echo("<td>");
            var_dump($_SESSION[$clave]);
            echo("</td></tr>");
        }
        echo '</table>';
        mostrarSuperglobales('COOKIE', $_COOKIE);
        mostrarSuperglobales('SERVER', $_SERVER);
        ?> 
    </div>
</main>
