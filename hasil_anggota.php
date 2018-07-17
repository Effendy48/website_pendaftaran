<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.js"></script>

<div class="alert alert-success" role="alert">
 	<h1 align="center">SELAMAT ADA TELAH TERDAFTAR</h1>
 	<h3 align="center">Anggota Anak Muda Indonesia</h3>
 	<h3 align="center">AMI</h3>
</div>
<?php 
 include "system.php";
            $system = new koneksi();
            $system->konek();
	$id = $_REQUEST['id'];
	$query = mysql_query("SELECT * FROM anggota,kategori_wilayah WHERE anggota.pengurus = kategori_wilayah.kd_wilayah and anggota.kd_anggota='$id'")or die(mysql_error());
	$arr = mysql_fetch_array($query);

?>
<div class="col-md-12">
	<div class="col-md-8">
		<table class="table">
			<tr>
				<td>No Anggota</td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?php echo $arr['nama']; ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $arr['tempat_lahir']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?php echo $arr['tgl_lahir']; ?></td>
			</tr>
			<tr>
				<td>Pengurus</td>
				<td><?php echo $arr['nama_wilayah']; ?></td>
			</tr>
			<tr>
				<td>Regional</td>
				<td><?php echo $arr['regional']; ?></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td><?php echo $arr['no_hp']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $arr['email']; ?></td>
			</tr>
			
		</table>

	</div>

	<div class="col-md-4">
		<table class="table">
		<tr>
			<td>
			<img class="img-responsive" src="<?php echo $arr['foto']; ?>">
			</td>
		</tr>
		<tr>
			<td><a href="kartu_anggota.php?id=<?php echo $id; ?>"><button class="btn btn-success">Print</button></a></td>
		</tr>
	</table>
	</div>
</div>