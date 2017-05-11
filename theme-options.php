<?php
//admin menu tabs
  add_action('admin_menu', 'add_global_custom_options');
    function add_global_custom_options()
      {
        add_options_page('Theme Options', 'Theme Options', 'manage_options', 'functions','global_custom_options');
      }
// logo support
add_theme_support( 'custom-logo' );
?>
