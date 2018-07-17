<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.js"></script>
<script src="dist/js/table_filter.js"></script>
<?php
  include "system.php";
            $system = new koneksi();
            $system->konek();
?>
<nav class="navbar navbar-fixed-top navbar-default" style="border-bottom: 5px solid  #4f95ff;background: #0c326d;">
      <a class="navbar-brand" style="color:#fff;">
      <div class="container">
      </div>
      </nav>
      <br><br>
<div class="col-md-12">
<br>
<div class="panel panel-primary">
<div class="panel-heading"><h4 align="center"><i class="fa fa-users"></i> Data Anggota</h4></div>
	<div class="panel-body">
		<div class="panel-content">
		<div class="col-md-4">
		<form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
			<table class="table table-striped table-list-search">
				<tr>	
					<td style="font-weight: bold;"><i class="fa fa-lock"></i> Kode Anggota</td>
					<td style="font-weight: bold;"><i class="fa fa-user"></i> Nama</td>
					<td style="font-weight: bold;"><i class="fa fa-user"></i> TTL</td>
					<td style="font-weight: bold;"><i class="fa fa-user"></i> No HP</td>
					<td style="font-weight: bold;"><i class="fa fa-user"></i> Email</td>
					<td style="font-weight: bold;"><i class="fa fa-user"></i> Alamat</td>
					<td style="font-weight: bold;"><i class="fa fa-phone"></i> Pengurus</td>
					<td style="font-weight: bold;"><i class="fa fa-phone"></i> Wilayah</td>
					
				</tr>
				<?php 
				$query = mysql_query("SELECT * FROM anggota,kategori_wilayah WHERE anggota.pengurus = kategori_wilayah.kd_wilayah")or die(mysql_error());
				while($arr = mysql_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $arr['kd_anggota']; ?></td>
					<td><?php echo $arr['nama']; ?></td>
					<td><?php echo $arr['tempat_lahir']; ?>, <?php echo $arr['tgl_lahir']; ?></td>
					<td><?php echo $arr['no_hp']; ?></td>
					<td><?php echo $arr['email']; ?></td>
					<td><?php echo $arr['alamat']; ?></td>
					<td><?php echo $arr['nama_wilayah']; ?></td>
					<td><?php echo $arr['regional']; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
</div>
