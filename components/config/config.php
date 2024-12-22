<?php 

define('servidor','localhost'); //servidor
define('usuario','root'); // usuario con privilegios
define('clave',''); // clave del usuario
define('base_de_datos','areasportteam'); // nombre de la base de datos
define('puerto','3306'); // puerto en donde trabaja mysql

$con = mysqli_connect(servidor,usuario,clave,base_de_datos,puerto);

if(!$con){
    print "<p>No hay conexión 😭</p>";

}
?>