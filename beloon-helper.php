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
 /*Copyright 2018 beloon(email:yeadhhb@gmail.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//define
define( 'PLG_URL', plugins_url() );
define( 'PLG_DIR', dirname( __FILE__ ) ); 

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
include_once(PLG_DIR. '/inc/custom-posts.php');