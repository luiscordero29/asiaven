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
              <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_asiaven_en.png">
                </a>
              </div>
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
                  $menu_name = 'en_menu_single';
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