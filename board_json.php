<?php include_once('db_connect.php');?>

<?php
	$sql = 'SELECT * FROM board';
	$result = $db->fetch($sql);
	echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>