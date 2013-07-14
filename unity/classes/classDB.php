<?php

	class db {
	
		var $db_host;
		var $db_name;
		var $db_user;
		var $db_pass;
		
		public $connection;
		public $error;
	
		public function Set_DB($db_host, $db_name, $db_user, $db_pass) {
			$this->db_host = $db_host;
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
		}
	
		public function Connect_DB() {
			if ($connection = mysql_connect($db_host, $db_user, $db_pass) 
			{
				if(mysql_select_db($db_name, $connection)) 
				{
					$this->connection = $connection;
					return true;
				} 
			} else {
				$error = mysql_error();
				return false;
			}
		}
		
		public function Query_DB() {
			// to-do
		}
		
		public function Close_DB() {
			if ($this->connection)
			{
				if (mysql_close($this->connection))
				{
					return true;
				} else {
					$this->error = mysql_error();
					return false;
				}
			} else {
				$this->error = 'Brak aktywnego po³¹czenia';
				return false;
			}
		}
	}

?>