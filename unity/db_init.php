<?php
/**
* @author Jakub Kuźma <qbakuzma@gmail.com>
* @copyright Jakub Kuźma
* @license GNU GPL
* @date 15-07-2013
*/
	/**
	* Database init
	*
	*	NOTE: You can change database param into unitybb.php file
	*
	*/
	include('./unitybb'.phpExt);
	include('classes/classDB'.phpExt);
	/**
	* Init database
	*
	*/
	$connect = new db();
	/**
	* Set information for database connector
	*
	*/
	$connect -> Set_DB(HOST, NAME, USER, PASS);
	/**
	* Start connection to database
	*
	*/
	$connect -> Connect_DB();
	/**
	* Close connection with selected database
	*
	*/
	$connect -> Close_DB();
?>