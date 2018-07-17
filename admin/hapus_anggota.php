<?php 
		include "../system.php";
            $system = new koneksi();
            $system->konek();
	$id = $_REQUEST['id'];

	$query = mysql_query("DELETE FROM anggota WHERE kd_anggota='$id'")or die(mysql_error());
	if($query){
		echo "<script>alert('Hapus Data Berhasil');
		document.location='./'</script>";
	}else{
		echo "<script>alert('Gagal')</script>";
	}
?>