<?php
/**
 * Plugin Name: Cooach - Admin
 * Description: Admin panel for the cooach plugins
 * Author: Stefan
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit;
 }

if ( !class_exists('Cooach_Admin')) {
    class Cooach_Admin {
        public function __construct() {
            define ( 'COOACH_ADMIN_DIR', plugin_dir_path(__FILE__));
        }

        public function init() {
            require_once( COOACH_ADMIN_DIR . 'admin.php');
        }
    }
}

$cooach_admin = new Cooach_Admin();
$cooach_admin->init();
if (is_admin())
{
    require_once( COOACH_ADMIN_DIR . 'admin.php');
}