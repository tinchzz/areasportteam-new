<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $titulo;
    $imagen;
    $info;
    $fecha;
    if(isset($_POST['titulo']) and isset($_FILES['imagen']) and isset($_POST['informacion']) and isset($_POST['fecha']) ){
        // Guardar el dato de la variable impidiendo código malicioso
        $titulo = mysqli_real_escape_string ($con,$_POST['titulo']);
        $info = mysqli_real_escape_string ($con,$_POST['informacion']);
        $fecha = mysqli_real_escape_string ($con,$_POST['fecha']);

        $imagen = time(). ".jpg";
        $temporal = $_FILES ['imagen']['tmp_name'];

        move_uploaded_file($temporal,"../../../img/noticias/$imagen");
        

        $consulta = "INSERT INTO noticias (titulo,imagen,informacion,fecha) VALUES ('$titulo','$imagen','$info','$fecha')";

        mysqli_query($con,$consulta);

        header("Location: ../../index_not.php?si=si");
    }
    else {
        header("Location: ../../index_not.php?no=no");
    }
}
else {
    print " no hay conexion";
}

?>