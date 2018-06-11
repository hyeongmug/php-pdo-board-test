<?php include_once('common.php'); ?>
<?php include_once('db_connect.php'); ?>


<?php
	if ( isset($_GET['table_name']) && isset($_GET['board_name']) ){

		$table_name = 'bo_'.$_GET['table_name'];
		$board_name = $_GET['board_name'];

		$sql = 'CREATE TABLE '.$table_name.' (
				    id  int(11) NOT NULL AUTO_INCREMENT,
				    title  varchar(255) NOT NULL ,
				    description  text NULL ,
				    created  datetime NOT NULL ,
				    PRIMARY KEY (id)
				)';

		$result = $db->query($sql);

		if ( $result) {

			$sql2 = 'INSERT INTO board (id, 
						table_name, 
						board_name
					) VALUES (
						"", 
						"'.$table_name.'",
						"'.$board_name.'"
					)';

			$result2 = $db->query($sql2);
			
		}
	}

	if ( $result && $result2 ) {
		alert('테이블을 생성 했습니다.');
	} else {
		alert('테이블을 생성하지 못했습니다.');
	}

?>