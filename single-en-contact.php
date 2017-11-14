<?php
  include(TEMPLATEPATH.'/includes/en/header.php');
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
                  <h2>Leave a Message</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group" align="right">
                    <button class="btn btn-default send" type="submit">Send</button>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group" align="left">
                    <button class="btn btn-default reset" type="submit">Reset</button>
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
              <div class="title">OFFICE ADDRESS</div>
              <div class="description">1801 SW 3 RD SUITE 390<br/>Miami Fl 33129 USA</div>
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
              <div class="title">PHONE</div>
              <div class="description">+1 305-436-5801</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/en/footer.php');
?>