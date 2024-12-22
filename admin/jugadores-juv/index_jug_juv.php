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
    <title>Panel de Jugadores Juveniles</title>
</head>
<body>
    <header>
        <h1>Panel de Jugadores Juveniles</h1>
        <div class="menu">
            <a href="../../pages/index2.php">Inicio</a>
            <a href="panel_jug_juv.php">Panel</a>
            <a href="../../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
        <h2 style="margin-bottom: 25px;">Carga de Jugadores Profesionales</h2>
            <?php
                if(isset($_GET['si'])){
                    print "<p class='text-bg-danger p-2'>Noticia cargada</p>";
                }
                if(isset($_GET['no'])){
                    print "<p class='text-bg-danger p-2'>La noticia no pudo ser cargada</p>";
                }
            ?>
            <form action="alta/alta_jug_juv.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nombre">Nombre Jugador</label>
                    <input id="nombre" name="nombre" type="text">
                </div>
                <div>
                    <label for="imagen">Imagen</label>
                    <input id="imagen" name="imagen" type="file">
                </div>
                <div>
                    <label for="club">Club</label>
                    <input id="club" name="club" type="text">
                </div>
                <div>
                    <label for="posicion">Posición</label>
                    <input id="posicion" name="posicion" type="text">
                </div>
                <div>
                    <input type="submit" value="Cargar Jugador">
                </div>

            </form>
        </section>
        <footer>
            <p>Area Sport Team 2024</p>
        </footer>
    </main>
</body>
</html>