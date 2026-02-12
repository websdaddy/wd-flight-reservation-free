<?php
/*
Plugin Name: WD Flight Reservation
Plugin URI: https://websdaddy.com/plugins/wd-flight-reservation
Description: Flight reservation system with multi-leg search.
Version: 1.3
Author: Webs Daddy LLC
Author URI: https://websdaddy.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wd-flight-reservation
Domain Path: /languages
*/

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-wd-flight-reservation.php';

new WD_Flight_Reservation();
