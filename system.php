<?php 
	class koneksi{
		function konek(){
			mysql_connect("localhost","root","");
			mysql_select_db("pendaftaran_anggota");
		}
	}
	class dataanggota{
		function inputanggota($kd,$nama,$tempat,$tgl,$no_hp,$email,$alamat,$foto_ktp,$pengurus,$regional){

				$nama_foto_ktp = $_FILES['foto']['name'];
				$foto_ktp = "foto/".$nama_foto_ktp;
				$query = mysql_query("INSERT INTO anggota()values('$kd','$nama','$tempat','$tgl',
				'$no_hp','$email','$alamat','$foto_ktp','$pengurus','$regional')");
			move_uploaded_file($_FILES['foto']['tmp_name'], $foto_ktp);

			if($query){
				echo "<script>alert('Berhasil');
				document.location='hasil_anggota.php?id=$kd'</script>";
			}else{
				echo "<script>alert('Gagal');</script>";
			}

		}

		function editanggota($kd,$nama,$tempat,$tgl,$no_hp,$email,$alamat,$foto_ktp,$pengurus,$regional){
				$nama_foto_ktp = $_FILES['foto']['name'];
				$foto_ktp = "foto/".$nama_foto_ktp;
				$query = mysql_query("UPDATE anggota SET nama='$nama',tempat_lahir='$tempat',tgl_lahir='$tgl',no_hp='$no_hp',email='$email',alamat='$alamat',foto='$foto_ktp',pengurus='$pengurus',regional='$regional' WHERE kd_anggota='$kd'");
			move_uploaded_file($_FILES['foto']['tmp_name'], $foto_ktp);

			if($query){
				echo "<script>alert('Berhasil');
				document.location='./'</script>";
			}else{
				echo "<script>alert('Gagal');</script>";
			}

		}
	}
	class login{
		function loginadmin($uname,$pass){
			$query = mysql_query("SELECT * FROM admin WHERE username='$uname' and password='$pass'")or die(mysql_error());
			$arr = mysql_num_rows($query);
			$rec = mysql_fetch_array($query);
			if($arr !=0){
				@session_start();
				@$_SESSION['kd_admin'] = $rec['kd_admin'];
				@$_SESSION['uname'] = $rec['username'];
				echo "<script>alert('Data Berhasil');
				document.location='index.php'</script>";
			}else{
				echo "<script>alert('Tidak Masuk')</script>";
			}
		}
	}
?>