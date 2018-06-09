<?php include_once('db_connect.php');?>

<?php
	$sql = 'SELECT * FROM test1';
	$json = json_encode( $db->fetch($sql) );

	echo $json;
?>
 