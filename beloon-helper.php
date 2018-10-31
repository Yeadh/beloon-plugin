<?php
/**
 * Plugin Name: beloon plugin
 * Plugin URI: https://github.com/Yeadh/beloon-plugin
 * Description: After install the beloon WordPress Theme, you must need to install this "beloon-plugin" first to get all functions of beloon WP Theme.
 * Version: 1.0.0
 * Author: CodeCorns
 * Author URI: https://github.com/Yeadh
 * Text Domain: beloon
 * License: GPL/GNU.
*/


//define
define( 'PLG_URL', plugins_url() );
define( 'PLG_DIR', dirname( __FILE__ ) ); 

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
include_once(PLG_DIR. '/inc/custom-posts.php');