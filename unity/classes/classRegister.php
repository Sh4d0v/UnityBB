<?php
	/**
	* @author Jakub Kuźma <qbakuzma@gmail.com>
	* @copyright Jakub Kuźma
	* @license GNU GPL
	* @date 15-07-2013
	*/
	class Register {
		/**
		* @var string
		* @access public
		* It sets name of user
		*/
		public $username;
		/**
		* @var string
		* @access public
		* It sets password for user
		*/
		public $password;
		/**
		* @var string
		* @access public
		* It sets email address for user
		*/
		public $email;
		/**
		* @access public
		* Function to init new user in register form
		*/
		public function InitUser($username, $password, $email) {
		
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}
		/**
		* @access public
		* Adding new user into database
		*/
		public function AddUser() {
		
			// adding user to db
		}
	}
?>