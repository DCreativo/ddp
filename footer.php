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
        
        <!-- FORMULARIO DE SUSCRIPCION -->
        <h6 class="mb-0 ">Suscríbete</h6>

        <form class="form py-1 mb-4" id="suscripcion" novalidate>
          <input type="text" class="form-control my-2" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
          <input type="email" class="form-control my-2" name="email" id="email" placeholder="Correo Electrónico" required>
          <button type="submit" class="btn btn-light">Enviar</button>

          <!-- mensaje exito -->
          <div class="alert alert-success alert-dismissible fade show d-none mb-0 mt-2" role="alert" id="exitoSuscrip">Tu suscripción fue exitosa
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!-- /mensaje exito -->

          <!-- mensaje de error -->
          <div class="alert alert-danger alert-dismissible fade show d-none mb-0 mt-2" role="alert" id="errorSuscrip">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- /mensaje de error -->
        </form>
        <!-- /FORMULARIO DE SUSCRIPCION -->

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
          <li><span class="fa-li"><i class="fas fa-map-marker-alt fa-lg pr-4"></i></span>Calle Sta. María de la Gracia 1ra. Etapa Mz.A Lt.1 Urb. Antares - SMP</li>
        </ul>
      </div>
      <!-- /Dirección -->

      <!-- Teléfonos -->
      <div class="col-sm-3 py-2">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-phone-square fa-lg pr-4"></i></span> 923-432-349 / 977-856-208 / 912-667-277</li>
        </ul>
      </div>
      <!-- /Teléfonos -->

      <!-- Correos -->
      <div class="col-sm-3 py-2">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-envelope fa-lg pr-4"></i></span>
          info@ddperu.pe<br>
          ventas@ddperu.pe<br>
          mtorres@ddperu.pe</li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script src="js/ekko-lightbox.min.js"></script>

    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
    <!-- /Scripts -->

    
    
  </body>
</html>

<script src="scripts/suscriptores.js"></script>