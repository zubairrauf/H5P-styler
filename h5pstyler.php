<?php
/**
 * H5P Mods Plugin.
 *
 * Alters the way the H5P plugin works.
 *
 * @package   H5P
 * @author    Joubel <contact@joubel.com>
 * @license   MIT
 * @link      http://joubel.com
 * @copyright 2015 Joubel
 *
 * @wordpress-plugin
 * Plugin Name:       H5P Styler
 * Plugin URI:        https://zubairrauf.com/
 * Description:       Alter the dsign of H5P by adding your own CSS.
 * Version:           0.0.1
 * Author:            Zubair
 * Author URI:        https://zubairrauf.com
 * Text Domain:       h5pstyler
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/h5p/h5pmods-wordpress-plugin
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}


/**
 * Allows you to alter which stylesheets are loaded for H5P. This is
 * useful for adding your own custom styles or replacing existing once.
 *
 * In this example we're going add a custom script which keeps track of the
 * scoring for drag 'n drop tasks.
 *
 * @param object &styles List of stylesheets that will be loaded.
 * @param array $libraries The libraries which the styles belong to.
 * @param string $embed_type Possible values are: div, iframe, external, editor.
 */
function h5pmods_alter_styles(&$styles, $libraries, $embed_type) {
  $styles[] = (object) array(
    // Path can be relative to wp-content/uploads/h5p or absolute.
    'path' => 'http://localhost/cna/wp-content/plugins/h5pstyler/custome-h5p.css',
    'version' => '?ver=1.3.7' // Cache buster
  );
}
add_action('h5p_alter_library_styles', 'h5pmods_alter_styles', 10, 3);

