<?php
  include(TEMPLATEPATH.'/includes/en/header.php');
?>
  <?php while ( have_posts() ) : the_post(); ?> 
  <?php $imagen = get_field('image'); ?>
  <div class="position_page" 
    style="
      background-image: url('<?php echo $imagen['url']; ?>');
      background-position: left top;
      background-size: 100%;
      background-repeat: no-repeat;">
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
                  $menu_name = 'es_menu_single';
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
                <div class="col-xs-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                  </div>
                </div>
                <div class="col-xs-6">
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
          <div class="col-xs-4">
            <div class="box_contant">
              <div><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></div>
              <div class="title">OFFICE ADDRESS</div>
              <div class="description">1801 SW 3 RD SUITE 390<br/>Miami Fl 33129 USA</div>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="box_contant">
              <div><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
              <div class="title">EMAIL</div>
              <div class="description">store@asiaven.com</div>
            </div>
          </div>
          <div class="col-xs-4">
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