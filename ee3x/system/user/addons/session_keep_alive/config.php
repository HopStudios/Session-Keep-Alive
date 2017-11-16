<?php

/**
 * Session Keep Alive - Config
 *
 * NSM Addon Updater config file.
 *
 * @package		Hop Studios:Session Keep Alive
 * @author		Hop Studios, Inc.
 * @copyright	Copyright (c) 2017, Hop Studios, Inc.
 * @link		http://www.hopstudios.com/
 * @version		1.0.0
 */

$config['name']='Session Keep Alive';
$config['version']='1.0.0';
$config['nsm_addon_updater']['versions_xml']='http://www.hopstudios.com/software';

// Version constant
if (!defined('HOP_SESSION_KEEP_ALIVE_VERSION')) {
	define('HOP_SESSION_KEEP_ALIVE_VERSION', $config['version']);
}
