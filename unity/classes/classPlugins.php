<?php
	/**
	* @author Jakub Kuźma <qbakuzma@gmail.com>
	* @copyright Jakub Kuźma
	* @license GNU GPL
	* @date 15-07-2013
	*/
	class Plugin {
		/**
		* @var string
		* @access public
		* It sets name of plugin
		*/
		public $name;
		/**
		* @var double
		* @access public
		* It sets number of version
		*/
		public $version;
		/**
		* @var string
		* @access public
		* It sets author of plugin
		*/
		public $author;
		/**
		* @access public
		* It init plugin using name, version and author
		*/
		public function Init_Plugin($name, $version, $author) {
			$this->name = $name;
			$this->version = $version;
			$this->author = $author;
		}
		/**
		* @access public
		* I dont know for now what the hell is that...
		*/
		public function Load_Plugin() {
			// Plugin init
		}
		/**
		* @access public
		* It install plugin using single file
		*/
		public function Install_Plugin($file) {
			
			if (!$this->file)
			{
				$this->file = 'setup'.phpExt.'?plugin=install';
			}
			include_once($this->file);
		}
		
		public function Uninstall_Plugin($file) {
			
			if (!$this->file)
			{
				$this->file = 'setup'.phpExt.'?plugin=uninstall';
			}
			include_once($this->file);
		}
	}
?>
