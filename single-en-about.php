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
    <div class="page_about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="content_ceo">
              <?php the_field('history_content'); ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="image_ceo_about">
              <img src="<?php the_field('ceo_image'); ?>" class = "responsive">
            </div>
          </div>
        </div>
      </div>
      <div class="page_persons_about">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="image_persons">
                <img src="<?php the_field('image_persons'); ?>">
              </div> 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="white">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="text_mision">
                      <?php the_field('mision_content'); ?>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="image_mision">
                      <img src="<?php the_field('mision_image'); ?>" class = "responsive">  
                    </div>
                  </div>
                </div>
              </div>
              <div class="white2">
              <div class="row">
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="image_vision">
                      <img src="<?php the_field('vision_image'); ?>" class = "responsive"> 
                    </div>
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="text_vision">
                      <?php the_field('vision_content'); ?>
                    </div>
                 </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/en/footer.php');
?>