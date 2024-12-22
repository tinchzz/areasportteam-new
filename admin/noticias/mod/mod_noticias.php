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
            <a href="../panel_not.php">Panel</a>
            <a href="../components/security/logout.php">Cerrar Sesion - <?php print "$_SESSION[usuario]";?></a>
        </div>
    </header>
    <main>
        <section>
        <h2>Modificar Noticias</h2>
            <?php
                if($con!=NULL){
                    $id;
                    if(isset($_GET['id'])){

                    $id = mysqli_real_escape_string ($con,$_GET['id']);

                    $consulta = "SELECT id_noticia, titulo, imagen, informacion, fecha FROM noticias WHERE id_noticia='$id' ";

                    $resultado = mysqli_query($con,$consulta);

                    while($fila = mysqli_fetch_array($resultado)){
                        print "
                            <form action=mod_not_ok.php  id=form method=get >
                            <input type=hidden name=id_noticia value='$fila[id_noticia]' >
                                <div>
                                    <label for=titulo>Titulo</label>
                                    <input type=text id=titulo name=titulo value='$fila[titulo]' placeholder=Escribir_nuevo_titulo_acá... >
                                </div>
                                <div>
                                    <label for=imagen>Imagen</label>
                                    <input type=file name=imagen value=$fila[imagen] >
                                </div>
                                <div>
                                    <textarea name=informacion id=informacion cols=32 rows=15'>$fila[informacion]</textarea>
                                </div>
                                <div>
                                    <label for=date>Fecha</label>
                                    <input id=fecha name=fecha type=date value='$fila[fecha]'>
                                </div>
                                <div>
                                    <input type=submit value=Modificar >
                                </div>     
                            </form>
                        ";
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
