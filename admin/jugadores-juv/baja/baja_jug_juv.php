<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $id;
    if(isset($_GET['id_jug_juv'])){
        // Guardar el dato de la variable impidiendo código malicioso
        $id = mysqli_real_escape_string ($con,$_GET['id_jug_juv']);

        $consulta_nombre = "SELECT nombre FROM `jugadores-juv` WHERE id_jug_juv='$id'";
        $respuesta_nombre = mysqli_query($con,$consulta_nombre);
        $consulta = "DELETE FROM `jugadores-juv` WHERE id_jug_juv='$id' ";

        mysqli_query($con,$consulta);

        header("Location: ../panel_jug_juv.php?nombre='$respuesta_nombre'");
    }
}

?>