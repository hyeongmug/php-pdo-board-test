<?php include_once('db_connect.php');?>
<?php include_once('common.php'); ?>

<?php
	if ( isset($_GET['table_name']) ){

		$table_name = $_GET['table_name'];

		$sql = 'CREATE TABLE '.$table_name.' (
			    id  int(11) NOT NULL AUTO_INCREMENT,
			    title  varchar(255) NOT NULL ,
			    description  text NULL ,
			    created  datetime NOT NULL ,
			    PRIMARY KEY (id)
			)';

		$result = $db->query($sql);

		if ( $result ) {
			alert($table_name.' 테이블을 생성하였습니다.');
		} else {
			alert($table_name.' 테이블 생성을 실패 하였습니다.');
		}
	}
?>