<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $nombre;
    $imagen;
    $club;
    $posicion;
    $linktm;
    if(isset($_POST['nombre']) and isset($_FILES['imagen']) and isset($_POST['club']) and isset($_POST['posicion']) and isset($_POST['link_tm'])){
        // Guardar el dato de la variable impidiendo código malicioso
        $nombre = mysqli_real_escape_string ($con,$_POST['nombre']);
        $club = mysqli_real_escape_string ($con,$_POST['club']);
        $posicion = mysqli_real_escape_string ($con,$_POST['posicion']);
        $linktm = mysqli_real_escape_string ($con,$_POST['link_tm']);

        $imagen = time(). ".jpg";
        $temporal = $_FILES ['imagen']['tmp_name'];

        move_uploaded_file($temporal,"../../../img/jugadores-pro/$imagen");
        

        $consulta = "INSERT INTO `jugadores-pro` (nombre,club,posicion,link_tm,imagen) VALUES ('$nombre','$club','$posicion','$linktm','$imagen')";

        mysqli_query($con,$consulta);

        header("Location: ../index_jug_pro.php?si=si");
    }
    else {
        header("Location: ../index_jug_pro.php?no=no");
    }
}
else {
    print "No hay conexion";
}

?>