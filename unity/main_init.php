<?php
	
	include('db_init.php');
	require_once('functions/loadMainClasses.php');
	
	LoadMVC();
	_View::$dir = './interface/templates/';
	_Controller::$config = '';
	
?>