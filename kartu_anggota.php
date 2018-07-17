<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.js"></script>

<?php 
 include "system.php";
            $system = new koneksi();
            $system->konek();
	$id = $_REQUEST['id'];
	$query = mysql_query("SELECT * FROM anggota WHERE kd_anggota='$id'")or die(mysql_error());
	$arr = mysql_fetch_array($query);

?>
<img src="foto/kartuangota.jpg" width="188px" height="340.1617658175px" align="center">
<img src="<?php echo $arr['foto']; ?>" width="50px" height="50px" style="margin-top: 100px;margin-left: -120px;">
<h4 style="margin-top: -50px;margin-left: 60px"><b><?php echo $arr['nama']; ?></b></h4>
