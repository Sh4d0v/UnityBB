<?php
	include('./unitybb'.phpExt);
	include('classes/classDB'.phpExt);
	
	$connect = new db();
	
	// Database
	$connect -> Set_DB(HOST, NAME, USER, PASS);
	$connect -> Connect_DB();
	
	$connect -> Close_DB();

?>