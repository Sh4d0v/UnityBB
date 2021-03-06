﻿<?php
	/**
	* @author Jakub Kuźma <qbakuzma@gmail.com>
	* @copyright Jakub Kuźma
	* @license GNU GPL
	* @date 15-07-2013
	*/
	class db {
		/**
		* @var string
		* @access public
		* It sets hostname of database
		*/
		public $db_host = null;
		/**
		* @var string
		* @access public
		* It sets name of database
		*/
		public $db_name = null;
		/**
		* @var string
		* @access public
		* It sets user login for database
		*/
		public $db_user = null;
		/**
		* @var string
		* @access public
		* It sets password for user
		*/
		public $db_pass = null;
		/**
		* @var string
		* @access public
		* Its informations about database connection
		*/
		public $connection = null;
		/**
		* @var string
		* @access public
		* Its informations about error in connection
		*/
		public $error = null;
		/**
		* @access public
		* Set a lot of informations about database and connection
		*/
		public function Set_DB($db_host, $db_name, $db_user, $db_pass) {
			$this->db_host = $db_host;
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
		}
		/**
		* @access public
		* Main connection to database
		*/
		public function Connect_DB() {
			if ($connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass))
			{
				if(mysql_select_db($this->db_name, $connection)) 
				{
					$this->connection = $connection;
					return true;
				} 
			} else {
				$error = mysql_error();
				return false;
			}
		}
		/**
		* @access public
		* to-do
		*/
		public function Query_DB() {
			// to-do
		}
		/**
		* @access public
		* Function to close connection with database
		*/
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
				$this->error = 'Brak aktywnego połączenia';
				return false;
			}
		}
	}
?>