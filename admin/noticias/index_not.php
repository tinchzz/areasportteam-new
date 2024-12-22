<?php
require_once("../../components/security/admin.php");
require_once("../../components/config/config.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/panel/panel-mod/style.css">
    <title>Panel de Noticias</title>
</head>
<body>
    <header>
        <h1>Carga de Noticias</h1>
        <div class="menu">
            <a href="../../pages/index2.php">Inicio</a>
            <a href="panel_not.php">Panel</a>
            <a href="../../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
        <h2>Carga de Noticias</h2>
            <?php
                if(isset($_GET['si'])){
                    print "<p class='text-bg-success p-2' >Noticia cargada</p>";
                }
                if(isset($_GET['no'])){
                    print "<p class='text-bg-danger p-2'>La noticia no pudo ser cargada</p>";
                }
            ?>
            <form action="alta/alta_noticias.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="titulo">Título</label>
                    <input id="titulo" name="titulo" type="text">
                </div>
                <div>
                    <label for="imagen">Imagen</label>
                    <input id="imagen" name="imagen" type="file">
                </div>
                <div>
                    <label for="informacion">Información</label>
                    <p>Máximo 2500 caracteres</p>
                    <textarea name="informacion" id="informacion" cols="32" rows="15"></textarea>
                </div>
                <div>
                    <label for="fecha">Fecha</label>
                    <input id="fecha" name="fecha" type="date">
                </div>
                <div>
                    <input type="submit" value="Cargar Noticia">
                </div>

            </form>
            <div class="menu">
                
            </div>
        </section>
        <footer>
            <p>Area Sport Team 2024</p>
        </footer>
    </main>
</body>
</html>
