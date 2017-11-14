<?php
  // Template para las noticias
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
          <div id="container">
            <div id="content">
            <br/>
            <br/>
            <?php
                // Obtener las noticias
                $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
                $type = 'ennews';
                $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'paged'          => $paged,
                'ignore_sticky_posts'=> 1);
                
                $n_query = null;
                $n_query = new WP_Query($args);
             
                if( $n_query->have_posts() ) {
                    while ($n_query->have_posts()) : $n_query->the_post(); ?>
                        
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <br>
                        <?php
                            $imagen = get_field('image');
                            if(!empty($imagen)):
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div style="width: 100%; height: 300px; background: url('<?php echo $imagen['url']; ?>') center / cover;">
                            </div>
                            </a>
                            <br>
                        <?php endif; ?>
                            <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More ></a>
                        <br><hr/><br>

                <?php endwhile; ?>
                <center>
                    <?php
                        function get_single_pagination_link( $pagenum = 1 ) {
                            global $wp_rewrite;
                            
                            if(!is_single() || !$wp_rewrite->permalink_structure ) return false;
                            
                            $pagenum = (int) $pagenum;
                            $post_id = get_queried_object_id();
                            $request = get_permalink($post_id);
                            
                            if ( $pagenum > 1 )
                                $request = trailingslashit( $request ) . user_trailingslashit( $pagenum );
                                return esc_url( $request );
                            }
                            
                            function get_next_single_page_link ( $label = null, $max_page = 0 ) {
                                global $wp_query;
                                
                                if( !is_single() ) return false;
                                if ( !$max_page ) {
                                    $max_page = $wp_query->max_num_pages;
                                }
                                $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
                                $next_page = intval($paged) + 1;
                                if ( null === $label ) {
                                    $label = __( 'Next Page &raquo;' );
                                }
                                
                                if ( ( $next_page <= $max_page ) ) {
                                    return '<a href="' . get_single_pagination_link( $next_page ) . '">' . $label . '</a>';
                                } else {
                                    return false;
                                }
                            }
                            
                            function get_previous_single_page_link( $label = null ) {
                                if( !is_single() ) return false; 
                                $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
                                $prev_page = intval($paged) - 1;
                                if ( null === $label ) {
                                    $label = __( '&laquo; Previous Page' );
                                }
                                if ( ( $prev_page > 0 ) ) {
                                    return '<a href="' . get_single_pagination_link( $prev_page ) . '">' . $label . '</a>';
                                } else {
                                    return false;
                                }
                            } 
                            echo get_previous_single_page_link().'&nbsp;';
                            echo get_next_single_page_link( null , $n_query->max_num_pages );
                    ?>
                </center>
                <?php
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
            </div><!-- #content -->
        </div><!-- #container -->
      </div>
    </div>
  <?php endwhile; ?>
<?php
  include(TEMPLATEPATH.'/includes/en/footer.php');
?>