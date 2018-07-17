<?php
	switch(@$_GET['p']){
		case 'detail_anggota' 	:if(!file_exists("detail_anggota.php"))die("Halaman Tidak Ada");
						include ("detail_anggota.php");
						break;
						break;	
		case 'edit_anggota' 	:if(!file_exists("edit_anggota.php"))die("Halaman Tidak Ada");
						include ("edit_anggota.php");
						break;
						break;											
																																												
	}
?>	