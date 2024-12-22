<?php
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/panel/panel-mod/style.css">
    <title>Panel de Noticias - Modificar</title>
</head>
<body>
    <header>
        <h1>Panel de Noticias</h1>
        <div class="menu">
            <a href="../../../pages/index2.php">Inicio</a>
            <a href="../../panel_not.php">Panel</a>
            <a href="../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
        <h2 style="margin-bottom: 25px;">Modificar Noticias</h2>
            <?php
                if($con!=NULL){
                    $id;

                    if(isset($_GET['id_jug_pro'])){

                        $id = mysqli_real_escape_string ($con,$_GET['id_jug_pro']);

                        $consulta = "SELECT id_jug_pro, nombre, club, imagen, posicion, link_tm FROM `jugadores-pro` WHERE id_jug_pro='$id'";

                        $resultado = mysqli_query($con,$consulta);

                        while($fila = mysqli_fetch_array($resultado)){
                            print "
                            <form action=mod_jug_ok.php  method=get >
                                    <input type=hidden name=id_jug_pro value='$fila[id_jug_pro]' >
                                <div>
                                    <label for=nombre>Nombre</label>
                                    <input type=text id=nombre name=nombre value='$fila[nombre]' >
                                </div>
                                <div>
                                    <p>Si se deja vacio se guarda la misma imagen</p>
                                    <label for=imagen>Imagen</label>
                                    <input type=file name=imagen value='$fila[imagen]' >
                                </div>
                                <div>
                                    <label for=club>Club</label>
                                    <input type=text id=club name=club value='$fila[club]' >
                                </div>
                                <div>
                                    <label for=posicion>Posicion</label>
                                    <input type=text id=posicion name=posicion value='$fila[posicion]' >
                                </div>
                                <div>
                                    <label for=link_tm>Link Transfermarkt</label>
                                    <input type=text id=link_tm name=link_tm value='$fila[link_tm]' >
                                </div>
                                <div>
                                    <input type=submit value=Modificar >
                                </div>     
                            </form>'";
                        }
                    }
                    else {
                        print "no llega nada";
                    }
                }  
            ?>
        </section>
    </main>
<footer>
    <p>Area Sport Team 2024</p>
</footer>
</body>
</html>
