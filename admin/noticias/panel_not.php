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
        <h1>Panel de Noticias</h1>
        <div class="menu">
            <a href="../../pages/index2.php">Inicio</a>
            <a href="index_not.php">Carga de Noticias</a>
            <a href="../jugadores-pro/panel_jug_pro.php">Panel de Jugadores</a>
            <a href="../jugadores-juv/panel_jug_juv.php">Panel de Jugadores Juveniles</a>
            <a href="../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
            <table>
                <caption>Noticias Cargadas</caption>
                <?php
                    if(isset($_GET['si'])){
                        print "<p style='background-color: green;' >Noticia Modificada</p>";
                    }
                    if(isset($_GET['baja'])){
                        print "<p style='background-color: green; >Noticia Eliminada</p>";
                    }
                ?>
                <thead>
                    <tr>
                        <th>Noticias</th>
                        <th>Fecha</th>
                        <th colspan="4" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($con!=NULL){
                                $consulta = "SELECT id_noticia, substr(titulo,1,60) titulo, DATE_FORMAT(fecha, '%d-%m-%Y') fecha_formato FROM noticias order by fecha";
        
                                $resultado = mysqli_query($con,$consulta);

                                while($fila = mysqli_fetch_array($resultado)){
                                    print "
                                        <tr>
                                            <td>$fila[titulo]</td>
                                            <td>$fila[fecha_formato]</td>
                                            <td><a style=color:green; href=mod/mod_noticias.php?id=$fila[id_noticia] >Modificar</a></td>
                                            <td><a style=color:red; href=baja/baja_noticias.php?id=$fila[id_noticia] >Eliminar</a></td>
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