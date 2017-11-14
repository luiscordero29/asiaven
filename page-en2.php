<?php
  include(TEMPLATEPATH.'/includes/en/header.php');
?>
  <?php while ( have_posts() ) : the_post(); ?> 
    <div class="position_1">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-xs-4 col-xs-offset-8">
              <div class="topmenu">
              <ul class="nav nav-pills">
                <?php                        
                  unset($menu_list);
                  $menu_name = 'en_topmenu';
                  $menu_list = '';

                  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) 
                  {

                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $first = true;

                    foreach ( (array) $menu_items as $key => $menu_item ) 
                    {
                      $title = $menu_item->title;
                                                      
                      $url = $menu_item->url;

                      $object_id = $menu_item->object_id;
                                          
                      if (get_the_ID() == $object_id) {
                        $itemActive = 'active';
                      }else{
                        $itemActive = '';
                      }
                                          
                        $menu_list .= '<li class="'.$itemActive.'"><a href="' . $url . '">' . $title . '</a></li>';
                    }
                  }
                  // show elements 
                  echo $menu_list;
                ?>
              </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_asiaven_en.png">
              </a>
            </div>
            <div class="col-xs-6">
            <div class="bar">
              <a href="#">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
              </a>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8 col-xs-offset-4">
              <div class="mainmenu">
                <ul class="nav nav-pills">
                <?php                        
                  unset($menu_list);
                  $menu_name = 'en_menu';
                  $menu_list = '';

                  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) 
                  {

                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $first = true;

                    foreach ( (array) $menu_items as $key => $menu_item ) 
                    {
                      $title = $menu_item->title;
                                                      
                      $url = $menu_item->url;

                      $object_id = $menu_item->object_id;
                                          
                      if (get_the_ID() == $object_id) {
                        $itemActive = 'active';
                      }else{
                        $itemActive = '';
                      }
                                          
                        $menu_list .= '<li class="'.$itemActive.'"><a href="' . $url . '">' . $title . '</a></li>';
                    }
                  }
                  // show elements 
                  echo $menu_list;
                ?>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider">
        <?php
            // banners
            putRevSlider("en_homepage");  
        ?>
      </div>
    </div>
    <div class="banners">
      <?php
        putRevSlider("en_banners");  
      ?>
    </div>
    <div class="position_2" id="services">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <div class="information">
              <div class="title">
                <?php the_field('services_title'); ?>
              </div>
              <div class="content">
                <?php the_field('services_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('services_link'); ?>">View more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position_3">
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
            <div class="service_1">
              <div class="title">
                <?php the_field('services_1_title'); ?>
              </div>
              <div class="content">
                <?php the_field('services_1_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('services_1_link'); ?>">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-xs-offset-4">
            <div class="service_2">
              <div class="title">
                <?php the_field('services_2_title'); ?>
              </div>
              <div class="content">
                  <?php the_field('services_2_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('services_2_link'); ?>">View More</a>
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
          <div class="col-xs-4">
            <div class="service_3">
              <div class="title">
                <?php the_field('services_3_title'); ?>
              </div>
              <div class="content">
                <?php the_field('services_3_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('services_3_link'); ?>">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-xs-offset-4">
            <div class="service_4">
              <div class="title">
                <?php the_field('services_4_title'); ?>
              </div>
              <div class="content">
                <?php the_field('services_4_content'); ?>
              </div>
              <div class="link">
                <a href="<?php the_field('services_4_link'); ?>">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position_4" id="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-7">
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