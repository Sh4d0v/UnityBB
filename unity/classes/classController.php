<?php

	abstract class _Controller {
	
		static $config;
		
		static function 404_error()
		{
			header('HTTP/1.1 404 Not Found');
			exit;
		}
		
		
	}
?>