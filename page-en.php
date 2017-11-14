<?php
  include(TEMPLATEPATH.'/includes/en/header.php');
?>
  <?php while ( have_posts() ) : the_post(); ?> 
    <div class="position_1">
      <?php
        // banners
        putRevSlider("en_homepage");  
      ?>
    </div>
    <div class="position_3">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="service_1">
                      <div class="title">
                        <?php the_field('services_1_title'); ?>
                      </div>
                      <div class="content">
                        <?php the_field('services_1_content'); ?>
                      </div>
                      <div class="link">
                        <a href="<?php the_field('services_1_link'); ?>">Read More...</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-4 col-lg-offset-4">
                    <div class="service_2">
                      <div class="title">
                        <?php the_field('services_2_title'); ?>
                      </div>
                      <div class="content">
                          <?php the_field('services_2_content'); ?>
                      </div>
                      <div class="link">
                        <a href="<?php the_field('services_2_link'); ?>">Read More...</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="service_logo">              
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="service_3">
                      <div class="title">
                        <?php the_field('services_3_title'); ?>
                      </div>
                      <div class="content">
                        <?php the_field('services_3_content'); ?>
                      </div>
                      <div class="link">
                        <a href="<?php the_field('services_3_link'); ?>">Read More...</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-4 col-lg-offset-4">
                    <div class="service_4">
                      <div class="title">
                        <?php the_field('services_4_title'); ?>
                      </div>
                      <div class="content">
                        <?php the_field('services_4_content'); ?>
                      </div>
                      <div class="link">
                        <a href="<?php the_field('services_4_link'); ?>">Read More...</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <div class="position_4" id="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="information">
              <div class="title">
               <?php the_field('about_title'); ?>
              </div>
              <div class="content">
               <?php the_field('about_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('about_link'); ?>">Read More...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position_5">
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/en/footer.php');
?>