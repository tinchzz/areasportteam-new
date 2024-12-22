<?php
require_once("../config/config.php");

if($con!=NULL){
    $user;
    $correo;
    $contra_uno;
    $contra_dos;

    if (isset($_POST['usuario']) and isset($_POST['correo']) and isset($_POST['contra_uno']) and isset($_POST['contra_dos']) ) {
        $user = mysqli_real_escape_string($con, $_POST['usuario'] ) ;
        $correo = mysqli_real_escape_string($con, $_POST['correo'] ) ;
        $contra_uno = mysqli_real_escape_string($con, $_POST['contra_uno'] ) ;
        $contra_dos = mysqli_real_escape_string($con, $_POST['contra_dos'] ) ;

        if($contra_dos == $contra_uno){
            $consulta = "SELECT * FROM `usuarios` WHERE usuario='$user'";

            $resultado = mysqli_query($con,$consulta);
            if(mysqli_num_rows($resultado) > 0){
                header("Location: ../../pages/login.php?user=no"); 
            }
            else
            {
                $consulta2 = "SELECT * FROM `usuarios` WHERE correo='$correo'";

                $resultado2 = mysqli_query($con,$consulta2);
                if(mysqli_num_rows($resultado2) > 0){
                    header("Location: ../../pages/login.php?correo=no"); 
                }
                else
                {
                    $insertar = "INSERT INTO `usuarios`( `usuario`, `correo`, `contrasena`, `fk_rol`, `fk_estado`) VALUES ('$user','$correo',MD5('$contra_uno'),'2','1')";

                    mysqli_query($con,$insertar);
                    header("Location: ../../pages/login.php?si=si");
                }
            }

        }else{
            header("Location: ../../pages/login.php?ok=no");
        }
        
    }else{
        header("Location: ../../pages/login.php?no=no");
    }

}