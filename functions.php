<?php 

# Custom System ASIAVEN

function register_menus() {

  register_nav_menus(

    array(



        'es_topmenu_mobile'   => __( 'ES: TOPMENU MOBILE' ),

        'es_topmenu'          => __( 'ES: TOPMENU' ),

        'es_menu'             => __( 'ES: MAINMENU' ),

        'es_menu_single'      => __( 'ES: MAINMENU SINGLE' ),

        'en_topmenu_mobile'   => __( 'EN: TOPMENU MOBILE' ),

        'en_topmenu'          => __( 'EN: TOPMENU' ),

        'en_menu'             => __( 'EN: MAINMENU' ),

        'en_menu_single'      => __( 'EN: MAINMENU SINGLE' ),



    )

  );

}

add_action( 'init', 'register_menus' );


add_action( 'init', 'en_news' );



function en_news() {



  $labels = array(

    'name'                => _x( 'News English', 'Lista de Publicaciones' ),

    'singular_name'       => _x( 'Publicación', 'Información del Publicación' ),

    'add_new'             => _x( 'Añadir nuevo', 'Publicación' ),

    'add_new_item'        => __( 'Añadir nuevo Publicación' ),

    'edit_item'           => __( 'Editar Publicación' ),

    'new_item'            => __( 'Nuevo Publicación' ),

    'view_item'           => __( 'Ver Publicación' ),

    'search_items'        => __( 'Buscar Publicación' ),

    'not_found'           => __( 'No se han encontrado Publicación' ),

    'not_found_in_trash'  => __( 'No se han encontrado Publicación en la papelera' ),

    'parent_item_colon'   => ''

  );

 

  // Creamos un array para $args

  $args = array( 

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'query_var'           => true,

    'rewrite'             => array('slug' => 'news'),

    'has_archive'         => false,

    'capability_type'     => 'post',

    'hierarchical'        => false,

    'menu_position'       => null,
    
    'show_in_nav_menus'   => false,

    'supports'            => array( 'title', 'editor', 'custom-fields' )

  );

 

  register_post_type( 'ennews', $args ); 

}

add_action( 'init', 'es_news' );

function es_news() {



  $labels = array(

    'name'                => _x( 'News Spanish', 'Lista de Publicaciones' ),

    'singular_name'       => _x( 'Publicación', 'Información del Publicación' ),

    'add_new'             => _x( 'Añadir nuevo', 'Publicación' ),

    'add_new_item'        => __( 'Añadir nuevo Publicación' ),

    'edit_item'           => __( 'Editar Publicación' ),

    'new_item'            => __( 'Nuevo Publicación' ),

    'view_item'           => __( 'Ver Publicación' ),

    'search_items'        => __( 'Buscar Publicación' ),

    'not_found'           => __( 'No se han encontrado Publicación' ),

    'not_found_in_trash'  => __( 'No se han encontrado Publicación en la papelera' ),

    'parent_item_colon'   => ''

  );

 

  // Creamos un array para $args

  $args = array( 

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'query_var'           => true,

    'rewrite'             => array('slug' => 'noticias'),

    'has_archive'         => false,

    'capability_type'     => 'post',

    'hierarchical'        => false,

    'menu_position'       => null,

    'show_in_nav_menus'   => false,

    'supports'            => array( 'title', 'editor', 'custom-fields' )

  );

 

  register_post_type( 'esnews', $args ); 

}

add_action( 'init', 'en' );



function en() {



  $labels = array(

    'name'                => _x( 'Pages English', 'Lista de Publicaciones' ),

    'singular_name'       => _x( 'Publicación', 'Información del Publicación' ),

    'add_new'             => _x( 'Añadir nuevo', 'Publicación' ),

    'add_new_item'        => __( 'Añadir nuevo Publicación' ),

    'edit_item'           => __( 'Editar Publicación' ),

    'new_item'            => __( 'Nuevo Publicación' ),

    'view_item'           => __( 'Ver Publicación' ),

    'search_items'        => __( 'Buscar Publicación' ),

    'not_found'           => __( 'No se han encontrado Publicación' ),

    'not_found_in_trash'  => __( 'No se han encontrado Publicación en la papelera' ),

    'parent_item_colon'   => ''

  );

 

  // Creamos un array para $args

  $args = array( 

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'query_var'           => true,

    'rewrite'             => array('slug' => 'en'),
    
    'has_archive'         => false,

    'capability_type'     => 'post',

    'hierarchical'        => false,

    'menu_position'       => null,

    'show_in_nav_menus'   => true,

    'supports'            => array( 'title', 'editor', 'custom-fields' )

  );

 

  register_post_type( 'en', $args ); 

}



add_action( 'init', 'es' );



function es() {



  $labels = array(

    'name'                => _x( 'Pages Spanish', 'Lista de Publicaciones' ),

    'singular_name'       => _x( 'Publicación', 'Información del Publicación' ),

    'add_new'             => _x( 'Añadir nuevo', 'Publicación' ),

    'add_new_item'        => __( 'Añadir nuevo Publicación' ),

    'edit_item'           => __( 'Editar Publicación' ),

    'new_item'            => __( 'Nuevo Publicación' ),

    'view_item'           => __( 'Ver Publicación' ),

    'search_items'        => __( 'Buscar Publicación' ),

    'not_found'           => __( 'No se han encontrado Publicación' ),

    'not_found_in_trash'  => __( 'No se han encontrado Publicación en la papelera' ),

    'parent_item_colon'   => ''

  );

 

  // Creamos un array para $args

  $args = array( 

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'query_var'           => true,

    'rewrite'             => array('slug' => 'es'),

    'has_archive'         => false,
    
    'capability_type'     => 'post',

    'hierarchical'        => false,

    'menu_position'       => null,

    'show_in_nav_menus'   => true,

    'supports'            => array( 'title', 'editor', 'custom-fields' )

  );

 

  register_post_type( 'es', $args ); 

}

function news_custom_excerpt_length( $length ) {
    return 55;
}
add_filter( 'excerpt_length', 'news_custom_excerpt_length', 999 );

?>