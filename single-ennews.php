<?php
  // Template para las noticias
  include(TEMPLATEPATH.'/includes/en/header.php');
?>
  <?php while ( have_posts() ) : the_post(); ?> 
  <?php $imagen = get_field('image'); ?>
  <?php if(!empty($imagen)): ?>
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
  <?php else: ?>
  <div class="page_about">
      <div class="container">
      <h1><?php the_title(); ?></h1>
  <?php endif; ?>
          <br/>
          <br/>
          
          <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/en/footer.php');
?>