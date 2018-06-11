<?php
	function alert($str) {
		echo '<script>alert(\''.$str.'\'); location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
	}
?>