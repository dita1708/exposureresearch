<?php 
/**
 * Plugin Name: Exposure Research Tools (Matomo Plugin)
 * Plugin URI: http://plugins.matomo.org/ExposureResearchTools
 * Description: Download unique visits as CSV, and support for merging data with pre-/post surveys for selective exposure research (see Plugin Website for details).
 * Author: Dominik J. Leiner
 * Author URI: https://github.com/BurninLeo/ExposureResearchTools
 * Version: 0.1.9
 */
?><?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\ExposureResearchTools;

 
if (defined( 'ABSPATH')
&& function_exists('add_action')) {
    $path = '/matomo/app/core/Plugin.php';
    if (defined('WP_PLUGIN_DIR') && WP_PLUGIN_DIR && file_exists(WP_PLUGIN_DIR . $path)) {
        require_once WP_PLUGIN_DIR . $path;
    } elseif (defined('WPMU_PLUGIN_DIR') && WPMU_PLUGIN_DIR && file_exists(WPMU_PLUGIN_DIR . $path)) {
        require_once WPMU_PLUGIN_DIR . $path;
    } else {
        return;
    }
    add_action('plugins_loaded', function () {
        if (function_exists('matomo_add_plugin')) {
            matomo_add_plugin(__DIR__, __FILE__, true);
        }
    });
}

class ExposureResearchTools extends \Piwik\Plugin
{
}
