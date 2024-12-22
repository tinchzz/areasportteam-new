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
    <title>Panel de Jugadores</title>
</head>
<body>
    <header>
        <h1>Panel de Jugadores</h1>
        <div class="menu">
            <a href="../../pages/index2.php">Inicio</a>
            <a href="../noticias/panel_not.php">Panel de Noticias</a>
            <a href="index_jug_pro.php">Carga de Jugadores</a>
            <a href="../jugadores-juv/panel_jug_juv.php">Panel de Jugadores Juveniles</a>
            <a href="../../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
            <table>
                <caption>Jugadores Profesionales</caption>
                <?php
                    if(isset($_GET['si'])){
                        print "<p style='background-color: green;' >Noticia Modificada</p>";
                    }
                    if(isset($_GET['baja'])){
                        print "<p style='background-color: green; >Noticia Eliminada</p>";
                    }
                    if(isset($_GET['mod'])){
                        print "<p style='background-color: #f51c1c; color: black;>Jugador Eliminado</p>";
                    }
                ?>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Club</th>
                        <th colspan="4" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($con!=NULL){
                                $consulta = "SELECT id_jug_pro, imagen, nombre, club FROM `jugadores-pro` order by club";
        
                                $resultado = mysqli_query($con,$consulta);

                                while($fila = mysqli_fetch_array($resultado)){
                                    print "
                                        <tr>
                                            <div class=text-panel>
                                                <td>$fila[nombre]</td>

                                                <td><a>$fila[club]</a></td>

                                                <td><a style=color:green; href=mod/mod_jug_pro.php?id_jug_pro=$fila[id_jug_pro]>Modificar</a></td>

                                                <td><a style=color:red; href=baja/baja_jug_pro.php?id_jug_pro=$fila[id_jug_pro] >Eliminar</a></td>
                                            </div>
                                        </tr>
                                    ";
                                }
                        }
                    ?>
                </tbody>
            </table>
        </section>


    </main>
    <footer>
        <p>Area Sport Team 2024</p>
    </footer>
</body>
</html>