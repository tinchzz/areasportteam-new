
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script type="text/javascript">
          const mediaQuery = window.matchMedia("(max-width: 1024px)");
      
          // Función para manejar el cambio en la media query
          const handleMediaChange = (mediaQuery) => {
            if (mediaQuery.matches) {
              // La condición de la media query se cumple (ancho de la ventana <= 1024px)
              console.log("La ventana tiene un ancho igual o menor a 1024px");
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                  
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
              });
              var swiper2 = new Swiper(".mySwiper2", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                 
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next2",
                  prevEl: ".swiper-button-prev2",
                },
              });
              
            } else {
              // La condición de la media query no se cumple (ancho de la ventana > 1024px)
              console.log("La ventana tiene un ancho mayor a 1024px.");
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                  
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
              });
              var swiper2 = new Swiper(".mySwiper2", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                 
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next2",
                  prevEl: ".swiper-button-prev2",
                },
              });
            }
          };
          const mediaQuery2 = window.matchMedia("(max-width: 1024px)");
      
          // Función para manejar el cambio en la media query
          const handleMediaChange2 = (mediaQuery) => {
            if (mediaQuery.matches) {
              // La condición de la media query se cumple (ancho de la ventana <= 1024px)
              console.log("La ventana tiene un ancho igual o menor a 1024px");
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                  
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
              });
              var swiper2 = new Swiper(".mySwiper2", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                 
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next2",
                  prevEl: ".swiper-button-prev2",
                },
              });
              
            } else {
              // La condición de la media query no se cumple (ancho de la ventana > 1024px)
              console.log("La ventana tiene un ancho mayor a 1024px.");
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                  
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
              });
              var swiper2 = new Swiper(".mySwiper2", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
                pagination: {
                 
                  clickable: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next2",
                  prevEl: ".swiper-button-prev2",
                },
              });
            }
          };
      
          // Agregar un listener para detectar cambios en la media query
          mediaQuery.addListener(handleMediaChange);
          mediaQuery.addListener(handleMediaChange2);
      
          // Llama a la función handleMediaChange para verificar la condición inicialmente
          handleMediaChange(mediaQuery);
          window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle('sticky', window.scrollY > 0);
          });
      
          var menu = document.querySelector('.menu');
          var menuBtn = document.querySelector('.menu-btn');
          var closeBtn = document.querySelector('.close-btn');
      
          menuBtn.addEventListener("click", () => {
            menu.classList.add('active');
          });
      
          closeBtn.addEventListener("click", () => {
            menu.classList.remove('active');
          });
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init({
            duration: 700
          });
    </script>
</body>
</html>