<?php

	class Plugin {
	
		var $name;
		var $version;
		var $author;
	
		public function Init_Plugin($name, $version, $author) {
			$this->name = $name;
			$this->version = $version;
			$this->author = $author;
		}
	
		public function Load_Plugin() {
			// Plugin init
		}
		
		public function Install_Plugin() {
			// install instruction
		}
	
	}

?>