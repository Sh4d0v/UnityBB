<?php

	abstract class _Controller {
		/**
		* @access static
		* to-do
		*/
		static $config;
		/**
		* @access static
		* Show 404 error when page is not found
		*/
		static function error404()
		{
			header('HTTP/1.1 404 Not Found');
			exit;
		}
	}
?>