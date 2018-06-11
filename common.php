<?php
	function alert($str) {
		echo '<script>alert(\''.$str.'\'); history.back(); </script>';
	}
?>