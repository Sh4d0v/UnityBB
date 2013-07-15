<?php
	/**
	* Load MVC model from classes folder
	*/
	function LoadMVC() {
		require_once('/../classes/classModel'.phpExt);
		require_once('/../classes/classView'.phpExt);
		require_once('/../classes/classController'.phpExt);
	}
?>