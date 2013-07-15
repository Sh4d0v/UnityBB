<?php
	/**
	* @author Jakub Kuźma <qbakuzma@gmail.com>
	* @copyright Jakub Kuźma
	* @license GNU GPL
	* @date 15-07-2013
	*/
	class _Template {
		/**
		* @var string
		* @access public
		* It sets dir of templates
		*/
		public $dir;
		/**
		* @var string
		* @access public
		* It sets var in template
		*/
		public $var = array();
		
		private $file = null;
		private $data = array();
		
		public function changeDir($dir) {
		
			$this->dir = $dir;
		}
		
		public function show($folder, $name) {
		
			$path = $folder . $name;

			if (file_exists($path) == false)
			{
				exit('Template not found! File: '. $folder . $path);
				return false;
			}

			// to-do
			//foreach ($this->vars as $key => $value)
			//{
			//		$$key = $value;
			//}
			
			include($path);
		}
	}
?>