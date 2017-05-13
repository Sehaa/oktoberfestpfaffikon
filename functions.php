<?php

//for menu

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

include('theme-options.php');

function arphabet_widgets_init() {
   register_sidebar( array(
       'name'          => 'message',
       'id'            => 'message',
       'before_widget' => '  <div class="col-lg-8 col-lg-offset-2 text-center">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2>',
       'after_title'   => '</h2>',
   ) );

   register_sidebar( array(
       'name'          => 'phone',
       'id'            => 'phone',
       'before_widget' => '<div >',
       'after_widget'  => '</div>',
       'before_title'  => '<i>',
       'after_title'   => '</i>',
   ) );

   register_sidebar( array(
       'name'          => 'mail',
       'id'            => 'mail',
       'before_widget' => '<div >',
       'after_widget'  => '</div>',
       'before_title'  => '<i>',
       'after_title'   => '</i>',
   ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>
