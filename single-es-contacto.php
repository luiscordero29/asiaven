<?php
  include(TEMPLATEPATH.'/includes/es/header.php');
?>
  <?php while ( have_posts() ) : the_post(); ?> 
  <?php $imagen = get_field('image'); ?>
  <div class="position_page" style="background-image: url('<?php echo $imagen['url']; ?>')">
      <div class="content">
      </div>
      <div class="page">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="title">
                <?php the_title(); ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="description">                
                <?php the_field('description'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page_information">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
          <div class="contact">
            <div id="googleMap" class="googlemap"></div>
            <div class="form">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Escribir Mensaje</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="Nombres">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="lastname" placeholder="Apellidos">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Tel&eacute;fono">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Mensaje" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group" align="right">
                    <button class="btn btn-default send" type="submit">Enviar</button>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group" align="left">
                    <button class="btn btn-default reset" type="submit">Limpiar</button>
                  </div>
                </div>

              </div>  
            </div>
          </div>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="box_contant">
              <div><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></div>
              <div class="title">DIRECCION DE OFICINA</div>
              <div class="description">3900 NW 79th Ave Ste 532<br/>Doral, FL 33166</div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="box_contant">
              <div><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
              <div class="title">EMAIL</div>
              <div class="description">store@asiaven.com</div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="box_contant">
              <div><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>
              <div class="title">TELEFONO</div>
              <div class="description">+1 305-436-5801</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/es/footer.php');
?>