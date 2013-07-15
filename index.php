<?php
/**
 * UnityBB
 * beta v0.1
 *
 * @author 		Jakub Kuźma, Paweł Kobel
 * @copyright	(c) 2013 Jakub Kuźma, Paweł Kobel.
 *
 */
	/**
	* The directory in which your plugins are located.
	*
	*/
	$plugins = 'plugins';
	/**
	* The directory in which your templates are located.
	*
	*/
	$interface = 'interface';
	/**
	* The directory in which the UnityBB resources are located. The system
	* directory must contain the classes and function files.
	*
	*/
	$unity = 'unity';
	/**
	* The default extension of resource files. If you change this, all resources
	* must be renamed to use the new extension.
	*
	*/
	define('phpExt', '.php');
	/**
	* Init the application
	*
	*/
	include('unity/main_init'.phpExt);
	/**
	* Include debug mode
	*
	*/
	include('debug'.phpExt);
	/**
	*---------------------------------------------------------------
	* APPLICATION DEBUG MODE
	*---------------------------------------------------------------
	*
	* You can load different configurations depending on your
	* current debug mode. Setting the debug also influences
	* things like logging and error reporting.
	*
	* This can be set to anything, but default usage is:
	*
	*     "release" - ready to use board
	*     "debug" - showing all error, for developers
	*
	*/
	define('UNITY_DEBUG_MODE', 'release');
?>