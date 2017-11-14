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
   <div class="wp_empresas">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page_empresas">
            <div class="content">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="text_description">
                      <?php the_field('description'); ?>
                    </div>
                    <div class="image_content">
                      <img src="<?php the_field('e_image'); ?> " class = "img-responsive">  
                    </div>
                    <div class="text_content">
                      <?php the_content(); ?>
                    </div>
                </div>
              </div>
              <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="title_information_c1">
                        <?php the_field('title_information_c1'); ?>
                      </div>
                      <div class="text_information_c1">
                        <?php the_field('information_c1'); ?>
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="title_information_c2">
                        <?php the_field('title_information_c2'); ?>
                      </div>
                      <div class="text_information_c2">
                        <?php the_field('information_c2'); ?>
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="title_information_c3">
                        <?php the_field('title_information_c3'); ?>
                      </div>
                      <div class="text_information_c3">
                        <?php the_field('information_c3'); ?>
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