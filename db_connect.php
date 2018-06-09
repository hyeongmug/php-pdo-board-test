<?php
	include_once('db_config.class.php');
	
	$dbms = 'mysql';
	$host = 'localhost';
	$dbname = 'test2';
	$charset = 'utf8';
	$id = 'root';
	$pw = '';

	$db = new DB($dbms, $host, $dbname, $charset, $id, $pw);

?>	