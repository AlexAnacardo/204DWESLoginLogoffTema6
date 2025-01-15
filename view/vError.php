<header id="headerError">
    <img id="logo" src="webroot/images/logo.png">
    <h1>Error</h1>
</header>
<main id="error">
    <p>Se ha producido un error</p>
    <table>
        <tr>
            <td>Codigo</td>
            <td><?php echo($_SESSION['error']->getCodError()); ?></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><?php echo($_SESSION['error']->getDescError()); ?></td>
        </tr>
        <tr>
            <td>Archivo</td>
            <td><?php echo($_SESSION['error']->getArchivoError()); ?></td>
        </tr>
        <tr>
            <td>Linea</td>
            <td><?php echo($_SESSION['error']->getLineaError()); ?></td>
        </tr>
    </table>    
    <form>
        <input type="submit" id="volver" name="volver" value="Volver">
    </form>
</main>
