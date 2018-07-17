<?php 
	@session_start();
	session_unset(@$_SESSION['kd_admin']);
	echo "<script>alert('Selamat Tinggal');
	document.location='index.php'</script>";
?>