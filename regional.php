<?php 
	include "system.php";
	$db  = new koneksi();
	$db->konek();

	$kab_id = $_POST['kab_id'];

	$sql_kecamatan = mysql_query("SELECT * FROM wilayah where kd_wilayah='$kab_id'")or die(mysql_error());
?>
	<option>Pilih Wilayah</option>
	<?php while($row_kecamatan = mysql_fetch_array($sql_kecamatan)){ ?>
		<option value="<?php echo $row_kecamatan['nama_wilayah']; ?>"><?php echo $row_kecamatan['nama_wilayah']; ?></option>";
	<?php } ?>

