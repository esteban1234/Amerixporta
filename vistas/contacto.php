

<?php include 'head.php';?>

    <div class="img-fondo">
      <p class="contacto">Contáctanos</p>
    </div>
    <!-- <p class="texto_servicio"> Para más información acerca de nuestros servicios, por favor contáctenos usando el siguiente formulario y nosotros nos comunicaremos con usted lo más pronto posible.</p> -->
    <div class="cont-general">
      <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.4054559579818!2d-89.6143180450797!3d21.000215475227645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676b2ee1d8dfb%3A0x2cc0ae4659f0a811!2sCalle+27+128%2C+Col.+Mexico%2C+M%C3%A9xico%2C+97125+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1479313094027"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="direccion">
        <div class="texto-direccion">
          <span class="icon-location"></span>
          <div class="dir-text">
            <div>DIRECCION</div>
            <p>Calle 27 Num. 128 entre 26 Y 28, Col. México, Mérida,Yucatan.</p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-phone"></span>
          <div class="dir-text">
            <div>TELEFONO</div>
            <p>Pendiente </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-clock"></span>
          <div class="dir-text">
            <div>HORARIO</div>
            <p>Lunes a Viernes de 9am a 6pm </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-mail"></span>
          <div class="dir-text">
            <div>CORREO</div>
            <p>pendiente</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="img-fondo">
        <p class="contacto">Escríbenos</p>
      </div>
      <p class="texto_servicio"> Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
      <form id="form" action="" method="post">
        <div class="group-input">
          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
          </div>
          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Telefono:</label>
            <input type="text" id="telefono" name="telefono">
          </div>

          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Correo:</label>
            <input type="text" id="correo" name="correo">
          </div>
          <div class="group-comentario">
            <span id="msj"></span>
            <label class="label" for="nombre">Correo:</label>
            <textarea name="name" rows="8" cols="40"></textarea>
          </div>
        </div>
        <input type="button" class="enviar" name="name" value="Enviar">
      </form>
    </div><br><br>

  <span class="ir-arriba icon-arrow-bold-up"></span>

  <?php include 'Pie.php';?>

    <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../js/main.js"></script>
  <script type="text/javascript" src="../js/iconoarriba.js"></script>
  <script src="../js/active.js"></script>


  </body>
</html>
