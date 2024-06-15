<?php
/*
Plugin Name:  metadata
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: پلاگین metadata
Author: محمد حسین عالی پور
Version: 2.0.0
License: GPLv2 or later
Author URI: http://math.ir
*/
defined('ABSPATH') || exit;
define('YAS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('YAS_PLUGIN_URL', plugin_dir_url(__FILE__));
const YAS_PLUGIN_INC = YAS_PLUGIN_DIR . '_inc/';

if (is_admin()) {
    include YAS_PLUGIN_INC . 'admin/menus.php';
    include YAS_PLUGIN_INC . 'admin/meta-box.php';
}
