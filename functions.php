<?

if(!defined('B2B_DIR')) {
  define('B2B_DIR', get_theme_root().'/'.get_template().'/');
}

function register_my_menus() { 
    register_nav_menus( 
      array( 
        'poziome-menu_1' => __( 'Poziome prawe' ), 
  
        
  
      ) 
    ); 
  }
  add_action( 'init', 'register_my_menus' );
  
  require_once B2B_DIR.'libs/posttypes.php';

  flush_rewrite_rules( false );