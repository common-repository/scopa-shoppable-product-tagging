<?php
/**
 * Scopa Shoppable Product Tagging
 *
 * @package   Scopa_Script
 * @author    Scopa Analytics <info@scopaanalytics.com>
 * @license   GPL-3.0
 * @link      https://www.scopaanalytics.com/
 * @copyright 2022, Scopa Analytics
 *
 * @wordpress-plugin
 * Plugin Name:       Scopa Shoppable Product Tagging
 * Description:       This plugin places the necessary code snippets to integrate Scopa Analytics tags into your Wordpress website
 * Version:           1.0.1
 * Stable Version:    1.0.1
 * Author:            Scopa Analytics
 * Author URI:        https://www.scopaanalytics.com/
 * Text Domain:       scopa-script
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/ScopaAnalytics/Wordpress-ScopaScript
 * GitHub Branch:     master
 */
 
if ( ! defined( 'WPINC' ) ) {
	die;
}

function scopa_script_init() {
    wp_enqueue_script(
        'scopa_script',
        'https://scopa-script.s3.amazonaws.com/scopaScript.min.js',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts',  'scopa_script_init');
?>
