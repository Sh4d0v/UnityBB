<?php

	abstract class _View {
	
		static $dir = '';
		static $var = array();
		
		protected $file;
		protected $data = array();
		
		function __construct($file)
		{
			$this->file = $file;
		}
	}
?>