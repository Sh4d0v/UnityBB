<?php
/**
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