<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $nombre;
    $imagen;
    $club;
    $posicion;
    if(isset($_POST['nombre']) and isset($_FILES['imagen']) and isset($_POST['club']) and isset($_POST['posicion'])){
        // Guardar el dato de la variable impidiendo código malicioso
        $nombre = mysqli_real_escape_string ($con,$_POST['nombre']);
        $club = mysqli_real_escape_string ($con,$_POST['club']);
        $posicion = mysqli_real_escape_string ($con,$_POST['posicion']);

        $imagen = time(). ".jpg";
        $temporal = $_FILES ['imagen']['tmp_name'];

        move_uploaded_file($temporal,"../../../img/jugadores-juv/$imagen");
        

        $consulta = "INSERT INTO `jugadores-juv` (nombre,club,posicion,imagen) VALUES ('$nombre','$club','$posicion','$imagen')";

        mysqli_query($con,$consulta);

        header("Location: ../index_jug_juv.php?si=si");
    }
    else {
        header("Location: ../index_jug_juv.php?no=no");
    }
}
else {
    print "No hay conexion";
}

?>