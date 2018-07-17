<?php 
	session_start();
	if(!@$_SESSION['kd_admin']){
		include "login.php";
	}else{
		include "admin.php";
	}
?>