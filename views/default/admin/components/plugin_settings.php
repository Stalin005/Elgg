<?php
/**
 * Elgg plugin settings
 *
 * @uses ElggPlugin $vars['plugin'] The plugin object to display settings for.
 *
 * @package Elgg.Core
 * @subpackage Plugins.Settings
 */

$plugin = $vars['plugin'];
$plugin_id = $plugin->getID();

if (elgg_view_exists("settings/$plugin_id/edit")) {
	
	$title = $plugin->manifest->getName();
	
	$params = array('id' => "$plugin_id-settings");
	$body = elgg_view_form("plugins/settings/save", $params, $vars);
	
	echo elgg_view_module('info', $title, $body);
}