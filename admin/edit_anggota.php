<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.js"></script>
<!------ Include the above in your HEAD tag ---------->
 
            <div class="col-md-12">
            <h1 align="center" style="margin-top: 20px;">Edit</h1>
            <div class="container">
            <div class="row">
            <?php 
            
            $anggota = new dataanggota;

            $arr = mysql_query("SELECT * FROM anggota WHERE kd_anggota='$_REQUEST[id]'");
            $rec = mysql_fetch_array($arr);

?>
            <form method="POST" enctype="multipart/form-data">

            <div class="col-md-8">
            <table class="table">
                <tr>
                    <td><h5>No Anggota</h5></td>
                    <td><input type="text" value="<?php echo $rec['kd_anggota']; ?>" class="form-control" name="no_anggota" disabled=""></td>
                </tr>
                 <tr>
                    <td><h5>Nama</h5></td>
                    <td><input type="text" value="<?php echo $rec['nama']; ?>" class="form-control" name="nama"></td>
                </tr>
                 <tr>
                    <td><h5>Tempat Lahir</h5></td>
                    <td><input type="text" value="<?php echo $rec['tempat_lahir']; ?>" class="form-control" name="tempat_lahir"></td>
                </tr>
                 <tr>
                    <td><h5>Tanggal Lahir</h5></td>
                    <td><input type="date" value="<?php echo $rec['tgl_lahir']; ?>" class="form-control" name="tgl_lahir"></td>
                </tr>
                 <tr>
                    <td><h5>Alamat</h5></td>
                    <td><input value="<?php echo $rec['alamat']; ?>" type="text" class="form-control" name="alamat"></td>
                </tr>
                 <tr>
                    <td><h5>Pengurus</h5></td>
                    <td><select name="pengurus" id="kabupaten" class="form-control">
                        <option>-->Pengurus<--</option> 
                        <?php 
                        $sql = mysql_query("SELECT * FROM kategori_wilayah")or die(mysql_error());
                        while($arr = mysql_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $arr['kd_wilayah']; ?>"><?php echo $arr['nama_wilayah']; ?></option>
                        <?php } ?>
                       </select></td>
                </tr>
                <tr>
                    <td>Daerah</td>
                    <td><select name="daerah" class="form-control" id="kecamatan">
                        <option>Daerah</option>
                        
                    </select></td>
                </tr>
                
                 <tr>
                    <td><h5>No Hp</h5></td>
                    <td><input type="text" class="form-control" value="<?php echo $rec['no_hp']; ?>" name="no_hp"></td>
                </tr>
                 <tr>
                    <td><h5>Email</h5></td>
                    <td><input type="Email" value="<?php echo $rec['email']; ?>" class="form-control" name="email"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class="btn btn-info" name="simpan">Simpan</button></td>
                </tr>
            </table>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto"></td>
                    </tr>
                </table>
            </div>
            </form> 
            <?php 
            if(isset($_POST['view'])){
                echo "<script>document.location='data_anggota.php'</script>";
            }
            ?>
            <?php 
            if(isset($_POST['simpan'])){
                $nama = $_POST['nama'];
                $tempat_lahir = $_POST['tempat_lahir'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $alamat = $_POST['alamat'];
                $pengurus = $_POST['pengurus'];
                $regional = $_POST['daerah'];
                $no_hp = $_POST['no_hp'];
                $email = $_POST['email'];
                $foto = $_FILES['foto'];
                $anggota->editanggota($_REQUEST['id'],$nama,$tempat_lahir,$tgl_lahir,$no_hp,$email,$alamat,$foto,$pengurus,$regional);
            }
            ?> 
             </div> <!-- /.col-xs-12 -->
        </div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>&copy; Project Iseng Iseng</p></div>
        </div>
    </div>
</footer>