<?php

	class Register {
	
		public $username;
		public $password;
		public $email;
		
		public function InitUser($username, $password, $email) {
		
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}
		
		public function AddUser() {
		
			// adding user to db
		}
	}
?>