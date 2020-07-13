<!-- Head -->
<?php include('head.php'); ?>
<!-- /Head -->

<!-- Header -->
<?php include('header.php'); ?>
<!-- /Header -->

<!-- Menú -->
<?php include('nav.php'); ?>
<!-- /Menú -->

<!-- CONTÁCTENOS -->
<section class="container-fluid py-4">

  <div class="container">
    <div class="row mx-0">
      
      <div class="col-sm-12 text-center">
        <div class="h3 py-2 text-e11 mb-3"><b>Contáctenos</b></div>
      </div>

      <!-- FORMULARIO -->
      <form class="col-sm-5 text-white p-4 bg-e11 rounded" id="contactenos" novalidate>

        <p class="h5 mb-2 text-center">Escríbanos sus dudas o sugerencias</p>

        <!-- NOMBRE Y APELLIDO -->
          <div class="py-1">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre y Apellido*" required>
          </div>
        <!-- /NOMBRE Y APELLIDO -->

        <!-- TELÉFONO -->
          <div class="py-1">
              <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
          </div>
          <!-- /TELÉFONO -->

          <!-- EMAIL -->
          <div class="py-1">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>
          </div>
          <!-- /EMAIL -->

          <!-- ASUNTO -->
          <div class="py-1">
              <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto*" required>
          </div>
          <!-- /ASUNTO -->

          <!-- MENSAJE -->
          <div class="py-1">
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje*" required></textarea>
          </div>
          <!-- /MENSAJE -->

        <div class="form-row pt-2">

          <div class="col-sm-4">
            <button type="submit" class="btn bnt-lg white-text rounded">Enviar</button>
          </div>
          <div class="col-sm-8">
            <small>(*)Campos obligatorios.</small>
          </div>

        </div>

        <div class="form-row">
          <div class="col-sm-12">

            <!-- Mensaje de enviado -->
            <div class="alert alert-success mt-2 d-none alert-dismissible" id="exitoMensaje" role="alert">¡Tu mensaje ha sido enviado!
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- /Mensaje de enviado -->

            <!-- Mensaje de error -->
            <div class="alert alert-danger alert-dismissible d-none mt-2" id="errorMensaje" role="alert">
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          </div>
        </div>

      </form>
      <!-- /FORMULARIO -->

      <!-- Slider -->
      <div class="col-sm-7 px-0">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.2361735930454!2d-77.08880175351037!3d-11.95814363463458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDU3JzI5LjQiUyA3N8KwMDUnMjMuNCJX!5e0!3m2!1ses!2spe!4v1542044674852" frameborder="0"></iframe>
        </div>
      </div>
      <!-- /Slider -->

    </div>

  </div>

</section>
<!-- /CONTÁCTENOS -->

<!-- Footer -->
<!-- Footer -->
<section class="container-fluid bg-e11 text-white">
  <div class="container py-3">
    
    <div class="row">

      <div class="col-sm-2 py-2 d-none d-sm-block">
        <img src="img/logo-ddp2.svg" width="135" class="img-fluid mb-4">

        <small class="text-m1 mb-0">Perteneciente al:</small>
        <img src="img/logo-myr.svg" width="110" class="img-fluid mb-2">
        <small class="text-m1 mb-0 d-block">RUC: 20603050950</small>
      </div>

      <div class="col-sm-2 py-2 d-none d-sm-block">
        <ul class="pl-0 mb-0 list-unstyled">
          <li><a href="index.php" class="item1">Inicio</a></li>
          <li><a href="nosotros.php" class="item1">Nosotros</a></li>
          <li><a href="galeria.php" class="item1">Galería</a></li>
          <li><a href="contactenos.php" class="item1">Contáctenos</a></li>
        </ul>
      </div>

      <div class="col-sm-2 py-2 d-none d-sm-block">
        <ul class="pl-0 list-unstyled">
          <li>Nacionales
            <ul class="pl-0 list-unstyled">
              <li><a href="costa.php" class="item1">Costa</a></li>
              <li><a href="sierra.php" class="item1">Sierra</a></li>
              <li><a href="selva.php" class="item1">Selva</a></li>
            </ul>
          </li>
        </ul>
        <ul class="pl-0 mb-0 list-unstyled">
          <li>Rutas cortas
            <ul class="pl-0 list-unstyled">
              <li><a href="full-day.php" class="item1">Full Day</a></li>
              <li><a href="2d1n.php" class="item1">2 Días 1 Noche</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="col-sm-2 py-2 d-none d-sm-block text-justify">
        <ul class="pl-0 mb-4 list-unstyled">
          <li>Pasajes
            <ul class="pl-0 list-unstyled">
              <li><a href="aereos.php" class="item1">Aéreos</a></li>
              <li><a href="terrestres.php" class="item1">Terrestres</a></li>
            </ul>
          </li>            
        </ul>

        <ul class="pl-0 mb-0 list-unstyled">
          <li>Links
            <ul class="pl-0 list-unstyled">
              <li><a href="http://www.promperu.gob.pe/" target="_blank" class="item1">Prom Perú</a></li>
              <li><a href="http://www.mincetur.gob.pe/" target="_blank" class="item1">Mincetur</a></li>
            </ul>
          </li>            
        </ul>
      </div>

      <div class="col-sm-4 py-2">

        <!-- REDES SOCIALES -->
        <div class="d-none d-sm-block">
          <p class="mb-0">Encuéntranos en:</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/dreamdes.peru" target="_blank" class="item3"><i class="fab fa-facebook-square fa-2x"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/dreamdestinationsac/" target="_blank" class="item3"><i class="fab fa-instagram fa-2x"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCalubXN59qd6ucCwujDL9jg" target="_blank" class="item3"><i class="fab fa-youtube fa-2x"></i></a></li>
            <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=51912667277&text=Hola%20como%20estas%20dime%20como%20podemos%20ayudarte" target="_blank" class="item3"><i class="fab fa-whatsapp fa-2x"></i></a></li>
            <li class="list-inline-item"><a href="https://www.messenger.com/t/1582459785299001" target="_blank" class="item3"><i class="fab fa-facebook-messenger fa-2x"></i></a></li>
          </ul>
        </div>
        <!-- /REDES SOCIALES -->

      </div>

    </div>

    <div class="row d-block d-sm-none">

      <!-- LOGO DDPERU y M&R -->
      <div class="col-sm-3 py-2 d-inline-flex text-center">
        <img src="img/logo-ddp2.svg" width="135" class="img-fluid">

        <div>
          <small class="text-m1 mb-0">Perteneciente al:</small>
          <img src="img/logo-myr.svg" width="110" class="img-fluid mb-2">
          <small class="text-m1 mb-0 d-block">RUC: 20603050950</small>
        </div>
      </div>

      <!-- Dirección -->
      <div class="col-sm-3 py-2">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-map-marker-alt fa-lg pr-4"></i></span>Calle Honduras Mza. B Lote. 03 P.V Caribe De Naranjal III Et Lima - San Martín de Porres</li>
        </ul>
      </div>
      <!-- /Dirección -->

      <!-- Teléfonos -->
      <div class="col-sm-3 py-2">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-phone-square fa-lg pr-4"></i></span>(01)456-1207<br>977-856-208<br>912-667-277</li>
        </ul>
      </div>
      <!-- /Teléfonos -->

      <!-- Correos -->
      <div class="col-sm-3 py-2">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-envelope fa-lg pr-4"></i></span>reservas1@ddperu.pe<br>
          info@ddperu.pe<br>
          ventas@ddperu.pe</li>
        </ul>
      </div>
      <!-- /Correos -->

      <!-- Redes Sociales -->
      <div class="col-sm-3 py-2 text-center">
        <p class="mb-0">Encuéntranos en:</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://www.facebook.com/dreamdes.peru" target="_blank" class="text-white"><i class="fab fa-facebook-square fa-2x"></i></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/dreamdestinationsac/" target="_blank" class="text-white"><i class="fab fa-instagram fa-2x"></i></a></li>
          <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCalubXN59qd6ucCwujDL9jg" target="_blank" class="text-white"><i class="fab fa-youtube fa-2x"></i></a></li>
          <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=51912667277&text=Hola%20como%20estas%20dime%20como%20podemos%20ayudarte" target="_blank" class="text-white"><i class="fab fa-whatsapp fa-2x"></i></a></li>
          <li class="list-inline-item"><a href="https://www.messenger.com/t/1582459785299001" target="_blank" class="text-white"><i class="fab fa-facebook-messenger fa-2x"></i></a></li>
        </ul>
      </div>
      <!-- /Redes Sociales -->

    </div>
  </div>
</section>
<!-- /Footer -->

<!--Autor-->
<section class="container-fluid text-m6 bg-m12">
  <div class="container py-4">
    <div class="row">
      <div class="col-sm-12 text-center">
        <small>Grupo M&R Perú Travel S.A.C.@Todos los Derechos Reservados.</small>
      </div>
    </div>
  </div>
</section>
<!-- /Autor -->

    <!-- Scripts -->
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="js/ekko-lightbox.min.js"></script>

    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
    <!-- /Scripts -->

    <script src="contactenos.js"></script>
    
  </body>
</html>
<!-- /Footer -->