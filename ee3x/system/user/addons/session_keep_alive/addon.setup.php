<?php

require_once PATH_THIRD."session_keep_alive/config.php";

return array(
    'author'      => 'Hop Studios',
    'author_url'  => 'https://www.hopstudios.com',
    'name'        => 'Session Keep Alive',
    'description' => 'Keep the ExpressionEngine user session alive using a simple ajax call.',
    'version'     => HOP_SESSION_KEEP_ALIVE_VERSION,
	'namespace'   => 'HopStudios\SessionKeepAlive',
	'settings_exist'=> TRUE
);