<?php
	include_once "./classes/classDB.php";
	include_once "././unitybb.php";
	
	$connect = new db();
	
	// Database
	$connect -> Set_DB(HOST, NAME, USER, PASS);
	$connect -> Connect_DB();

?>