<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $id;
    $tiutlo;
    $info;
    $fecha;
    $imagen;

    if(isset($_GET['id_noticia']) and isset($_GET['titulo']) and isset($_GET['fecha']) and isset($_GET['informacion'])){
        $id = mysqli_real_escape_string ($con,$_GET['id_noticia']);
        $titulo = mysqli_real_escape_string ($con,$_GET['titulo']);
        $info = mysqli_real_escape_string ($con,$_GET['informacion']);
        $fecha = mysqli_real_escape_string ($con,$_GET['fecha']);

        $consulta = "UPDATE noticias SET titulo='$titulo', informacion='$info', fecha='$fecha' WHERE id_noticia='$id'";

        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../panel_not.php?si=si");
    }
}

?>