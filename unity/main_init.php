<?php
	
	include('db_init'.phpExt);
	require_once('functions/loadMainClasses'.phpExt);
	
	LoadMVC();
	_View::$dir = './interface/templates/';
	_Controller::$config = '';
	
?>