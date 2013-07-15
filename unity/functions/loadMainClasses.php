<?php
	/**
	* @author Jakub Kuźma <qbakuzma@gmail.com>
	* @copyright Jakub Kuźma
	* @license GNU GPL
	* @date 15-07-2013
	*/
		/**
		* Load MVC model from classes folder
		*/
		function LoadMVC() {
			require_once('/../classes/classModel'.phpExt);
			require_once('/../classes/classView'.phpExt);
			require_once('/../classes/classController'.phpExt);
		}
		/**
		* Load BBCode parser
		*/
		require_once('parserBB'.phpExt);
?>