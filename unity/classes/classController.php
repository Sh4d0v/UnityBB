<?php

	abstract class _Controller {
	
		static $config;
		
		static function error404()
		{
			header('HTTP/1.1 404 Not Found');
			exit;
		}
		
		
	}
?>