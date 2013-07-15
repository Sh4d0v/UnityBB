<?php
	// Init plugins with class
	include_once('./plugins'.phpExt);

	// create new class based on Plugin() class
	$plugin = new Plugin();
	
	// Defines about plugin
	define('PLUGIN_NAME', 'test');
	define('PLUGIN_VERSION', '1.0');
	define('PLUGIN_AUTHOR', 'Palit');
	
	//  Load plugin file
	$plugin -> Init_Plugin(PLUGIN_NAME, PLUGIN_VERSION, PLUGIN_AUTHOR);

	// Install, if plugin is not installed yet
	// $plugin -> Install_Plugin();
?>