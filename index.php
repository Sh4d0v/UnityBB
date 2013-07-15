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
?>