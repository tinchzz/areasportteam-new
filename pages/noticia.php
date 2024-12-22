<?php
session_start();
require_once("../components/config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/noticia/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.typekit.net/fvd3nfq.css">

    <link rel="shortcut icon" href="imagenes/areasport5.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <?php
        if($con!=NULL){
      
            if(isset($_GET['id'])){
                $id= $_GET['id'];

                $consulta_title = "SELECT titulo FROM noticias WHERE id_noticia='$id'";

                $resultado_title = mysqli_query($con,$consulta_title);
                while($fila = mysqli_fetch_array($resultado_title)){
                    print "
                    <title>$fila[titulo]</title>
                ";
                }
            }
        }
    ?>
</head>
<body>
<a name="inicio"></a>
    <header>
        <a href="index2.php"><img class="logo" src="imagenes/logos-iconos/logo-menu.png" alt="Logo"></a>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="index2.php#noticias">Inicio</a>
            <?php
                if($con!=NULL){
                if (!isset($_SESSION['usuario'])){
                        print "
                            <a href=login.php>Login/Registro</a>
                        ";
                    }
                    else {
                        if($_SESSION['fk_rol'] == 1){
                          print "
                            <a href=../admin/panel_not.php>Panel</a>
                          ";
                        }
                        print "
                          <a href=../components/security/logout.php>Cerrar Sesion</a>
                        ";
                    } 
                        }
                    ?>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
<?php 
if($con!=NULL){
      
    if(isset($_GET['id'])){
        $id= $_GET['id'];
   
        $consulta = "SELECT id_noticia,titulo,imagen,informacion,DATE_FORMAT(fecha, '%e %b %Y') fecha FROM noticias WHERE id_noticia='$id'";
                            
        $resultado = mysqli_query($con,$consulta);

        while($fila = mysqli_fetch_array($resultado)){
            print "
                <div class=contenedor-not>
                    <div class=noticia>
                        <h2>$fila[titulo]</h2>
                        <p>$fila[fecha]</p>
                        <figure>
                            <img src=../img/noticias/$fila[imagen] alt=$fila[titulo] >
                        </figure>
                        <h4>$fila[informacion]</h4>
                    </div>
                </div>
            ";
        }
    }
}
include_once("../components/footer.php");
?>
</body>
</html>