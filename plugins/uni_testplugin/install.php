<?php
	// install instructions
	function Install() {
		
		global $database;
		
		$database -> query("");
	}
	// uninstall instructions
	function Uninstall() {
	
		global $database;
		
		$database -> query("DROP TABLE IF EXISTS `plugin_test`") 
						or die(mysql_error());
	}
?>