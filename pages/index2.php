<?php
include_once("../components/header.php");
?>
<body>
  <a name="inicio"></a>
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
                            <a href=../admin/noticias/panel_not.php>Panel</a>
                          ";
                        }
                        print "
                          <a href=../components/security/logout.php>Cerrar Sesion - $_SESSION[usuario]</a>
                        ";
                    } 
                        }
                    ?>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
    <div class="imagen-1">
        <img src="imagenes/imagen5.jpg" alt="">
    </div>
    <div class="contenedor">
      <section class="nosotros">
        <div class="titulo" data-aos="fade-down">
            <h1>Somos Area Sport Team</h1>
        </div>
        <div class="info-1" data-aos="fade-right">
            <p>Creemos fielmente en el trabajo constante. Nos caracterizamos por la calidez y el trato 
                personal cercano, y la amplitud e integridad de nuestros servicios. Con esos valores como 
                estandartes decidimos fundar Area Sport Team.</p>
            <img src="imagenes/imagenes-nosotros/FOTO1.jpg">
        </div>
        <div class="info-2" data-aos="fade-left">
            <img src="imagenes/imagenes-nosotros/FOTO2.png">
            <p>Nuestras actividades iniciaron el 25 de octubre de 2021 a través de una iniciativa propuesta 
                por Augusto Fernández, CEO de la organización y ex-jugador profesional de fútbol. 
                Contamos con una estructura liviana pero muy eficiente, radicada en tres puntos 
                estratégicos muy importantes como lo son Madrid, Buenos Aires y Ciudad de México.</p>
        </div>
        <div class="info-3" data-aos="fade-right">
            <p>Las metas a mediano y largo plazo son el principal propósito, ya que consideramos que
                es la única manera de solidificar y sostener a lo largo del tiempo nuestro proyecto y 
                nuestra credibilidad.</p>
            <img src="imagenes/imagenes-nosotros/FOTO3.jpg">
        </div>
        <a name="noticias"></a>
        <br>
    </section>
        <section class="noticias">
          <div class="titulo" data-aos="fade-down">
              <h1>Noticias</h1>
          </div>
          <div class="caja-noticias" data-aos="fade-right" >
              <?php 
                require_once("../components/config/config.php");
                if($con!=NULL){
        
                  $consulta = "SELECT id_noticia, titulo, imagen, DATE_FORMAT(fecha, '%d-%m-%Y') fecha_formato FROM noticias order by fecha desc";                                 
                  $resultado = mysqli_query($con,$consulta);

                  while($fila = mysqli_fetch_array($resultado)){
                    print "
                      <a href=noticia.php?id=$fila[id_noticia]>
                      <div class=tarjeta-noticias>
                        <div class=tarjeta-imagen>
                          <img src=../img/noticias/$fila[imagen] alt=$fila[titulo]>
                        </div>
                        <div class=tarjeta-texto>
                          <p>$fila[titulo]</p>
                        </div>
                        <div class=tarjeta-texto-fecha>
                          <p>$fila[fecha_formato]</p>
                        </div> 
                      </div>
                      </a>
                     ";
                  }     
                }
              ?>
          </div>
          <a name="servicios"></a>
      </section>
        <section class="servicios">
          <div class="titulo" data-aos="fade-down">
            <h1>Colaboradores</h1>
          </div>
          <div class="info-4" data-aos="fade-right">
            <img src="imagenes/marcas/bestofyou.png" alt="Best Of You">
            <img src="imagenes/marcas/ACADEMIA_MASCHERANO.png" alt="Academia Javier Mascherano">
            <img src="imagenes/marcas/PUMA.png" alt="Puma">
          </div>
        <a name="jugadores"></a>
        </section>
        <div class="contenedor-jugadores">
            <div class="titulo" data-aos="fade-right">
              <h1>Profesionales</h1>
            </div>
            <div>
              <section class="jugadores" data-aos="fade-right">
                <div class="swiper mySwiper container" data-aos=fade-right>
                <div class="swiper-wrapper content" data-aos=fade-right>
                  <?php 
                    require_once("../components/config/config.php");
                    if($con!=NULL){
            
                      $consulta = "SELECT id_jug_pro, nombre, club, posicion, link_tm, imagen FROM `jugadores-pro` order by club";                                 
                      $resultado = mysqli_query($con,$consulta);

                      while($fila = mysqli_fetch_array($resultado)){
                        print "
                            <div class='swiper-slide card'>
                              <div class='card-content'>
                                <div class='image'>
                                  <img src=../img/jugadores-pro/$fila[imagen] alt=$fila[nombre]>
                                </div>
                
                                <div class='name-profession'>
                                  <span class='name'>$fila[nombre]</span>
                                  <span class='profession'>$fila[club]</span>
                                  <span class='profession'>$fila[posicion]</span>
                
                                </div>
                                <div class='button'>
                                  <button class='aboutMe'><a href=$fila[link_tm]><img src=imagenes/tm3.png alt='Transfermarkt'></a></button>
                                </div>
                              </div>
                            </div>
                        ";
                      }     
                    }
                  ?>
                  </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </section>
            </div>
          </div>
          <div class="contenedor-jugadores">
            <div class="titulo" data-aos="fade-right">
              <h1>Juveniles</h1>
            </div>
            <div>
              <section class="jugadores" data-aos="fade-right">
                <div class="swiper-button-prev2"></div>
                <div class="swiper mySwiper2 container" data-aos="fade-right">
                  <div class="swiper-wrapper content" data-aos="fade-right">
                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Alan Coria.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Alan Coria</span>
                          <span class="profession">Defensa y Justicia</span>
                          <span class="profession">Mediapunta</span>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Alan Melognio.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Alan Melognio</span>
                          <span class="profession">Banfield</span>
                          <span class="profession">Lateral derecho</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Alex Galan.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Alex Galan</span>
                          <span class="profession">Rayo Vallecano C</span>
                          <span class="profession">Extremo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Alvaro Rodriguez.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Alvaro Gonzalez</span>
                          <span class="profession">Getafe</span>
                          <span class="profession">Mediocentro defensivo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Andreu Binimelis.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Andreu Binimelis</span>
                          <span class="profession">Real Mallorca</span>
                          <span class="profession">Extremo derecho</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Brandon Varela.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Brandon Varela</span>
                          <span class="profession">Cádiz B</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Dani Vadillo.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Dani Vadillo</span>
                          <span class="profession">Rayo Vallecano</span>
                          <span class="profession">Portero</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Fernando Farias_.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Fernando Farias</span>
                          <span class="profession">Defensa y Justicia</span>
                          <span class="profession">Defensor central</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Joaquin Gonzalez.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Joaquin González</span>
                          <span class="profession">Banfield</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Joel Fortes.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Joel Fortes</span>
                          <span class="profession">Getafe</span>
                          <span class="profession">Lateral izquierdo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Jose Capponi.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Jose Capponi</span>
                          <span class="profession">Defensa y Justicia</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Juanse Miretti.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Juanse Miretti</span>
                          <span class="profession">River Plate</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Lorenzo Brun.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Lorenzo Brun</span>
                          <span class="profession">Defensa y Justicia</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Lucas Silva.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Lucas Silva</span>
                          <span class="profession">River Plate</span>
                          <span class="profession">Nediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Marco Roman.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Marco Roman</span>
                          <span class="profession">Rayo Vallecano</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Mateo Santillan.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Mateo Santillán</span>
                          <span class="profession">Argentinos Jrs</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Nacho Zaballa.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Nacho Zaballa</span>
                          <span class="profession">River Plate</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Neri Romero.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Neri Romero</span>
                          <span class="profession">Argentinos Jrs</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Pablo Melero.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Pablo Melero</span>
                          <span class="profession">Rayo Vallecano</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Ruben Martinez.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Ruben Martinez</span>
                          <span class="profession">Albacete</span>
                          <span class="profession">Extremo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Samu Almagro.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Samu Almagro</span>
                          <span class="profession">Cádiz Juvenil DH</span>
                          <span class="profession">Central Izquierdo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Thomas Blasquez.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Thomas Blasquez</span>
                          <span class="profession">Defensa y Justicia</span>
                          <span class="profession">Mediocentro</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Thomas Dean.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Thomas Dean</span>
                          <span class="profession">RCD Espanyol B</span>
                          <span class="profession">Lateral Izquierdo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Tiziano Perrotta.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Tiziano Perrotta</span>
                          <span class="profession">Banfield</span>
                          <span class="profession">Mediapunta</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Valentin Gonzalez.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Samu Almagro</span>
                          <span class="profession">Banfield</span>
                          <span class="profession">Mediapunta</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Victor Santana.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Victor Santana</span>
                          <span class="profession">San Francisco Mall.</span>
                          <span class="profession">Extremo izquierdo</span>
      
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card">
                      <div class="card-content">
                        <div class="image">
                          <img src="imagenes/jugadores-juveniles/Yuri Menac.png" alt="">
                        </div>
      
                        <div class="name-profession">
                          <span class="name">Yuri Menac</span>
                          <span class="profession">C.D. Leganés</span>
                          <span class="profession">Extremo</span>
      
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="swiper-button-next2"></div>
                
                
              </section>
            </div>
          </div>  
        <div class="contenedor-widgets" data-aos="fade-right">
          <div id="widbox" style="width: 100%; height: 100%;" data-widbox-widget-id="IYJLNIS5M7S1CbFDM7a7"></div><script src="https://widbox.sfo3.cdn.digitaloceanspaces.com/scripts/widbox.min.js" defer></script>
        </div>
      </div>
<?php
include_once("../components/footer.php");
include_once("../components/script.php");
?>
