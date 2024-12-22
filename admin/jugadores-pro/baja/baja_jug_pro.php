<?php 
require_once("../../../components/security/admin.php");
require_once("../../../components/config/config.php");

if($con!=NULL){
    $id;
    if(isset($_GET['id'])){
        // Guardar el dato de la variable impidiendo código malicioso
        $id = mysqli_real_escape_string ($con,$_GET['id']);

        $consulta = "DELETE FROM `jugadores-pro` WHERE id_jug_pro='$id' ";

        mysqli_query($con,$consulta);

        header("Location: ../panel_jug_pro.php");
    }
}

?>