<?php include_once('common/db_connect.php');?>

<?php
	$sql = 'SELECT * FROM board';
	$result = $db->fetch($sql);
?>