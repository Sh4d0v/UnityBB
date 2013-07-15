<?php

	abstract class _View {
		/**
		* @var string
		* @access static
		* It sets dir of templates
		*/
		static $dir = '';
		/**
		* @var string
		* @access static
		* It sets var in template
		*/
		static $var = array();
		
		protected $file;
		protected $data = array();
		
		function __construct($file)
		{
			$this->file = $file;
		}
	}
?>