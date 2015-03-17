<?php
/*
Plugin Name: Lis7o Brief
Plugin URI: http://widegroup.net
Description: Lis7o Brief for wordpress
Version: 1.0
Author: LucasZdv
Author URI: https://github.com/LucasZdv
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// aliases
define( 'AB_PATH', dirname(__FILE__) );

// core-includes
include 'libraries/briefController.php';
include 'libraries/briefSettings.php';
include 'libraries/briefDashboard.php';

// actions menu
add_action( 'admin_menu', 'addBriefMenu' );

add_action('admin_menu', 'addBriefSettingsMenu');
