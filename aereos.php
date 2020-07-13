<!-- Head -->
<?php include('head.php'); ?>
<!-- /Head -->

<!-- Header -->
<?php include('header.php'); ?>
<!-- /Header -->

<!-- Menú -->
<?php include('nav.php'); ?>
<!-- /Menú -->

<!-- PASAJES AÉREOS -->
<section class="container-fluid px-0 py-4">

	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 text-center">
				<div class="h3 py-2 text-e11 mb-3"><b>Pasajes Aéreos</b></div>
			</div>

    </div>
  </div>

  <div class="container">
    <div class="row">


      <!-- FORMULARIO -->
      <div class="col-sm-6 p-0">
        <form class="text-white p-4 bg-e11 rounded-left" id="aereos" novalidate>

           <p class="h5 mb-2 text-center">Solicite su cotización</p>

           <div class="form-row">

             <!-- NOMBRE -->
             <div class="col-sm-6 py-1">
                <!-- Guardar la informacion en aereos -->
                 <input type="hidden" id="id_aereos" name="id_aereos">
                 <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre*" required>
             </div>
             <!-- /NOMBRE -->

             <!-- APELLIDO -->
             <div class="col-sm-6 py-1">
                 <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellido*" required>
             </div>
             <!-- /APELLIDO -->

          </div>
          <div class="form-row">

             <!-- TELÉFONO -->
             <div class="col-sm-6 py-1">
                 <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
             </div>
             <!-- /TELÉFONO -->

             <!-- EMAIL -->
             <div class="col-sm-6 py-1">
                 <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>
             </div>
             <!-- /EMAIL -->

          </div>
          <div class="form-row">

            <!-- FECHA DE IDA -->
            <div class="col-sm-6 py-1">
            <label>Fecha de ida*</label>
            <input type="date" name="fecha_ida" id="fecha_ida" class="form-control" required>
            </div>
            <!-- /FECHA DE IDA -->

            <!-- FECHA DE REGRESO -->
            <div class="col-sm-6 py-1">
            <label class="">Fecha de regreso*</label>
            <input type="date" name="fecha_vuelta" id="fecha_vuelta" class="form-control" required>
            </div>
            <!-- /FECHA DE REGRESO -->

          </div>
          <div class="form-row">

            <!-- CANTIDAD DE ADULTOS -->
            <div class="col-sm-4 py-1">
            <label class="">Cant. Adultos*</label>
            <input class="form-control" type="number" name="cant_adult" id="cant_adult" required>
            </div>
            <!-- /CANTIDAD DE ADULTOS -->

            <!-- CANTIDAD DE ADULTOS -->
            <div class="col-sm-4 py-1">
            <label class="">Cant. Niños*</label>
            <input class="form-control" type="number" name="cant_ninos" id="cant_ninos" required>
            </div>
            <!-- /CANTIDAD DE ADULTOS -->

            <!-- CANTIDAD DE ADULTOS -->
            <div class="col-sm-4 py-1">
            <label class="">Cant. Infantes*</label>
            <input class="form-control" type="number" name="cant_inf" id="cant_inf" required>
            </div>
            <!-- /CANTIDAD DE ADULTOS -->

          </div>
          <div class="form-row">

            <!-- TRANSPORTE -->
            <div class="col-sm-3 py-1">
            <label>Transporte*</label>
            </div>

            <div class="col-sm-9 py-1">
              <select class="form-control" name="transporte" id="transporte" required>
                <option>Seleccione</option>
                <option value="Latam">Latam</option>
                <option value="Avianca">Avianca</option>
                <option value="Klm">Klm</option>
                <option value="Copa-Airlines">Copa Airlines</option>
                <option value="Peruvian">Peruvian</option>
                <option value="Lcp">Lcp</option>
                <option value="Air-Europa">Air Europa</option>
                <option value="Iberia">Iberia</option>
                <option value="Air-Canada">Air Canadá</option>
                <option value="Air-France">Air-France</option>
              </select>
            </div>
            <!-- /TRANSPORTE -->

          </div>

          <div class="form-row">

            <div class="col-sm-4">
                <button type="submit" class="btn success-color-dark white-text rounded">COTIZAR</button>
            </div>

            <div class="col-sm-8">
                <small>(*)Campos obligatorios.</small>
            </div>

            <div class="col-sm-12">

              <!-- mensaje exito -->
              <div class="alert alert-success alert-dismissible fade show d-none mb-0 mt-2" role="alert" id="exitoAereo">Cotización enviado con éxito
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <!-- /mensaje exito -->

              <!-- mensaje de error -->
              <div class="alert alert-danger alert-dismissible fade show d-none mb-0 mt-2" role="alert" id="errorAereo">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- /mensaje de error -->

            </div>

          </div>

        </form>
      </div>
      <!-- /FORMULARIO -->

      <div class="col-sm-6 p-0">
        <img src="img/aereos.jpg" class="img-fluid">
      </div>

  </div>
</div>

</section>
<!-- /PASAJES AÉREOS -->

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

    <script src="scripts/aereos.js"></script>
    
  </body>
</html>
<!-- /Footer -->

