<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php wp_head(); ?>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.gif" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(25.7752879,-80.303005),
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php if (is_user_logged_in()): ?>
      <style type="text/css">
        #mobile {
          margin-top: 30px;
        }
      </style>
    <?php endif;  ?>
  </head>
  <body>

<nav id="mobile" class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>es/">
        <img width="120px" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_asiaven_footer.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
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

      <ul class="nav navbar-nav navbar-right">
        <li id="redes"><a target="_get" href="https://www.facebook.com/Grupo-Asiaven-937057073051975/?ref=br_rs"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>
        <li id="redes"><a target="_get" href="https://twitter.com/grupo_asiaven"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></li>
        <li id="redes"><a target="_get" href="https://www.instagram.com/grupoasiaven/"><i class="fa fa-lg fa-instagram" aria-hidden="true"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Idiomas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              unset($menu_list);
              $menu_name = 'es_topmenu_mobile';
              $menu_list = '';

              if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) )
              {

                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);

                foreach ( (array) $menu_items as $key => $menu_item )
                {
                  $title = $menu_item->title;

                  $url = $menu_item->url;

                  $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
              }
              // show elements
              echo $menu_list;
            ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
