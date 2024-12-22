<?php
include_once("../components/header.php");
?>
<header>
        <a href="index2.php"><img class="logo" src="imagenes/logos-iconos/logo-menu.png" alt="Logo"></a>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="#inicio">Inicio</a>
            <a href="#noticias">Noticias</a>
            <a href="#servicios">Servicios</a>
            <a href="#jugadores">Jugadores</a>
            <?php
                if($con!=NULL){
                if (!isset($_SESSION['usuario'])){
                        print "
                            <a href=login.php>Login/Registro</a>
                        ";
                    }
                    else {
                        if($_SESSION['fk_rol'] == 1){
                          print "
                            <a class=href=../admin/panel_not.php>Panel</a>
                          ";
                        }
                        print "
                          <a class=href=../components/security/logout.php>Cerrar Sesion</a>
                          <a href=../users/panel.php>$_SESSION[usuario]</a>
                        ";
                    } 
                        }
                    ?>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
<section class="row" >
    <div class="registro">
    <article class="col-6" >

<h2>Registrate</h2>
<?php 

    if(isset($_GET['no'])){
        print "<p class='text-bg-danger p-3' >Todos los datos son obligatorios</p>";

    }
    if(isset($_GET['user'])){
        print "<p class='text-bg-danger p-3' >El usuario ya esta en uso</p>";

    }
    if(isset($_GET['correo'])){
        print "<p class='text-bg-danger p-3' >El correo ya esta en uso</p>";

    }
    if(isset($_GET['si'])){
        print "<p class='text-bg-success p-3' >Ya te podes loguear 💕 </p>";

    }
    if(isset($_GET['ok'])){
        print "<p class='text-bg-danger p-3' >Las contraseña no coinciden</p>";
    }
?>
    <form action="../components/security/alta_usr.php" method="post">
        <div class="mb-3" >
            <label class="form-label" for="nombre">Nombre</label>
            <input id="usuario" name="usuario" type="text" class="form-control" >
        </div>
        <div class="mb-3" >
            <label class="form-label" for="correo">Correo</label>
            <input id="correo" name="correo" type="email" class="form-control" >
        </div>
        <div class="mb-3" >
            <label class="form-label" for="contra_uno">Contraseña</label>
            <input id="contra_uno" name="contra_uno" type="password" class="form-control" >
        </div>
        <div class="mb-3" >
            <label class="form-label" for="contra_dos">Repetir Contraseña</label>
            <input id="contra_dos" name="contra_dos" type="password" class="form-control" >
        </div>
        <div class="mb-3" >
            <input type="submit" value="Registrarme!!!" class="form-control" >
        </div>

    </form>
</article>
    </div>
    <div class="login">
        <article class="col-6">
            <h2>Ingresar</h2>
                <?php 
                    if(isset($_GET['log'])){
                    print "<p class='text-bg-danger p-3' >El usuario NO esta registrado</p>";
                    }
                    if(isset($_GET['bann'])){
                    print "<p class='text-bg-danger p-3' >El usuario esta banneado, contacte al administrador</p>";
                    }
                    if(isset($_GET['pass'])){
                        print "<p class='text-bg-danger p-3'>Las contraseñas NO coinciden</p>";
                    }
                ?>
            <form action="../components/security/login.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="usuario">Usuario</label>
                    <input id="usuario" name="usuario" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label" for="clave">Contraseña</label>
                    <input id="clave" name="clave" type="password" class="form-control" >
                </div>
                <div class="mb-3">
                    <input type="submit" value="Ingresar!!" class="form-control" >
                </div> 
            </form>
        </article>
        </div>
</section>
<?php
include_once("../components/footer.php");
?>