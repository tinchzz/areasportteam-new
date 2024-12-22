<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $id;
    $nombre;
    $club;
    $posicion;
    $linktm;

    if(isset($_GET['id_jug_pro']) and isset($_GET['nombre']) and isset($_GET['club']) and isset($_GET['posicion']) and 
    isset($_GET['link_tm'])){
        
        $id = mysqli_real_escape_string ($con,$_GET['id_jug_pro']);
        $nombre = mysqli_real_escape_string ($con,$_GET['nombre']);
        $club = mysqli_real_escape_string ($con,$_GET['club']);
        $posicion = mysqli_real_escape_string ($con,$_GET['posicion']);
        $linktm = mysqli_real_escape_string ($con,$_GET['link_tm']);

        $consulta = "UPDATE `jugadores-pro` SET nombre='$nombre', club='$club', posicion='$posicion', link_tm='$linktm' WHERE id_jug_pro='$id'";

        mysqli_query($con,$consulta);

        header("Location: ../panel_jug_pro.php");
    }
}

?>