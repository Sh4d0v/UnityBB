<?php
/*
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
	define('UNITY_DEBUG_MODE', 'debug');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
if (defined('UNITY_DEBUG_MODE'))
{
	switch(UNITY_DEBUG_MODE)
	{
		case 'debug':
			error_reporting(E_ALL);
		break;

		case 'release':
			error_reporting(0);
		break;

		default:
			exit('The application debug mode is not set correctly.');
	}
}
?>