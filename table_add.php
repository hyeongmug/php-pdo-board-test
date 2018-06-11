<?php include_once('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			padding:0;
			margin:0;
		}
		table { 
			border-collapse: collapse;
			width:100%;
			text-align:center; 
		}
		th, td {
			border:1px solid #ccc;
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
	
<div class="table_list">
	<table>
		<thead>
			<tr>
				<th>테이블명</th>
				<th>게시판명</th>
			</tr>
		</thead>
		<tbody>

			<?php
				$tr_tag = '';
				$sql = 'SELECT * FROM board';
				$result = $db->fetch($sql);
				for ($i=0; $i < count($result); $i++) { 
					$tr_tag .= '<tr>';
					$tr_tag .= '	<td>'.$result[$i]['table_name'].'</td>';
					$tr_tag .= '	<td>'.$result[$i]['board_name'].'</td>';
					$tr_tag .= '	<td><button type="button"><span>수정</span></button></td>';
					$tr_tag .= '	<td><button type="button"><span>삭제</span></button></td>';
					$tr_tag .= '</tr>';
				}
				echo $tr_tag; 
			?>

		</tbody>
	</table>
</div>


<form action="table_update.php" method="GET">
	<label for="table_name">테이블명</label>
	<input type="text" name="table_name" id="table_name">
	<label for="board_name">게시판명</label>
	<input type="text" name="board_name" id="board_name">

	<button>게시판 생성</button>
</form>

</body>
</html>