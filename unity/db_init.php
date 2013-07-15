<?php
	include('./unitybb.php');
	include('classes/classDB.php');
	
	$connect = new db();
	
	// Database
	$connect -> Set_DB(HOST, NAME, USER, PASS);
	$connect -> Connect_DB();
	
	$connect -> Close_DB();

?>