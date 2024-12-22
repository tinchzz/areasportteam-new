<?php 
session_start();
require_once("../config/config.php");

if($con!=NULL){
    $usuario;
    $clave;
    
    if(isset($_POST['usuario']) and isset($_POST['clave']) ){
        //seguridad para sql
        $usuario = mysqli_real_escape_string($con, $_POST['usuario']) ;
        $clave = mysqli_real_escape_string($con, $_POST['clave']) ;
        
            $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";

            $resultado = mysqli_query($con,$consulta);

            $datos = mysqli_fetch_array($resultado);
            //comprobar si el usuario existe
            if($datos == NULL){
                header("Location: ../../pages/login.php?log=no");
            }

            if($datos['fk_estado'] == 1 ){
                $consulta_dos = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena=MD5('$clave')";

                $resultado_dos = mysqli_query($con,$consulta_dos);

                $datos_dos = mysqli_fetch_array($resultado_dos);
                if($datos_dos == NULL){
                    header("Location: ../../pages/login.php?pass=no");
                }else{
                    //print "Usuario logueado 😁";
                    
                    if($datos_dos['fk_rol'] == 1){
                        $_SESSION = $datos_dos;
                        header("Location: ../../pages/index2.php");
                    }else{    
                        $_SESSION = $datos_dos;
                        header("Location: ../../pages/index2.php");   
                    }
                }
                //contaseña
            }else{
                header("Location: ../../pages/login.php?bann=no");
            }
            
            
            
            

      
      

        


    }

}