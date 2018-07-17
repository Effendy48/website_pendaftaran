<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
        
        $(document).ready(function(){
            $('#kabupaten').change(function(){
                var kabupaten_id = $(this).val();

                $.ajax({
                    type: 'POST', //Method
                    url : 'regional.php', // action
                    data : 'kab_id='+kabupaten_id, //$_POST['kabupaten_id']
                    success: function(response){
                        $('#kecamatan').html(response);
                    }
                });
            });
        });
    </script>
 <nav class="navbar navbar-fixed-top navbar-default" style="border-bottom: 5px solid  #4f95ff;background: #0c326d;">
      <a class="navbar-brand" style="color:#fff;"><img src="foto/logoami.png" width="100px" height="100px" class="img-responsive img-circle"></a>
      
      <h4 style="color: #fff;" align="center">Pendaftaran Anggota</h4>
      <h4 align="center" style="color: #fff;">Anak Muda Indonesia (AMI)</h4>
      <h4 align="right" style="margin-right: 10px;"><a href="admin/"><button align="right" class="btn btn-default">Admin</button></a></h4>
      </nav>
            <div class="col-md-12" style="margin-top: 60px;">
            <h1 align="center" style="margin-top: 20px;">Daftar</h1>
            <div class="container">
            <div class="row">
            <?php 
            include "http://daftarami.com/system.php";
            $system = new koneksi();
            $system->konek();
            $anggota = new dataanggota;

 $rec = mysql_query("SELECT max(kd_anggota) as kode_anggota from anggota");
    $data = @mysql_fetch_array($rec);
    $kode_anggota = $data['kode_anggota'];
    $nourut=(int) substr($kode_anggota,3);
    $nourut++;
    $char = "ANG";
    $id = $char.sprintf("%03s", $nourut);
?>
            <form method="POST" enctype="multipart/form-data">

            <div class="col-md-8">
            <table class="table">
                <tr>
                    <td><h5>No Anggota</h5></td>
                    <td><input type="text" value="<?php echo $id; ?>" class="form-control" name="no_anggota" disabled=""></td>
                </tr>
                 <tr>
                    <td><h5>Nama</h5></td>
                    <td><input type="text" class="form-control" name="nama"></td>
                </tr>
                 <tr>
                    <td><h5>Tempat Lahir</h5></td>
                    <td><input type="text" class="form-control" name="tempat_lahir"></td>
                </tr>
                 <tr>
                    <td><h5>Tanggal Lahir</h5></td>
                    <td><input type="date" class="form-control" name="tgl_lahir"></td>
                </tr>
                 <tr>
                    <td><h5>Alamat</h5></td>
                    <td><input type="text" class="form-control" name="alamat"></td>
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
                    <td><input type="text" class="form-control" name="no_hp"></td>
                </tr>
                 <tr>
                    <td><h5>Email</h5></td>
                    <td><input type="Email" class="form-control" name="email"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class="btn btn-info" name="simpan">Simpan</button>&nbsp;<button class="btn btn-danger" name="view">View</button></td>
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
                $anggota->inputanggota($id,$nama,$tempat_lahir,$tgl_lahir,$no_hp,$email,$alamat,$foto,$pengurus,$regional);
            }
            ?> 
             </div> <!-- /.col-xs-12 -->
        </div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               </div>
        </div>
    </div>
</footer>