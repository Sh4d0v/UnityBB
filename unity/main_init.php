<?php

	include('db_init'.phpExt);
	require_once('functions/loadMainClasses'.phpExt);
	
	LoadMVC();
	$template = new _Template;
	$template -> changeDir('./'.$interface.'/templates/united_classic/');
	//_Controller::$config = '';
	
	$folder = $template->dir;
	$template -> show($folder, 'header.html');
	$template -> show($folder, 'boards.html');
	$template -> show($folder, 'footer.html');
?>