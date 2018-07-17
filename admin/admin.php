<head>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<title>Pembelian dan Pengeluaran Kas</title>
<link href="../dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/font-awesome/css/font-awesome.css">
<script type="text/javascript" src="../dist/js/jquery.js"></script> 

<script type="text/javascript" src="../dist/js/bootstrap.js"></script>
<script type="text/javascript">
        
        $(document).ready(function(){
            $('#kabupaten').change(function(){
                var kabupaten_id = $(this).val();

                $.ajax({
                    type: 'POST', //Method
                    url : 'wilayah.php', // action
                    data : 'kab_id='+kabupaten_id, //$_POST['kabupaten_id']
                    success: function(response){
                        $('#kecamatan').html(response);
                    }
                });
            });
        });
    </script>
</head>
<?php 
  include "../system.php";
  $db = new koneksi();
  $db->konek();
  //$peserta = new datapeserta();
 ?>
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#09f;border: 0">
        <div class="navbar-header">
        <a class="navbar-brand brand" href="#"><font color="white"></font></a>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
        </div>

         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-hover" style="margin-left:7%;">
               
                <li><a href="./"><font color="white">Home</font></a></li>
                <li><a href="keluar.php"><font color="white"> Keluar</font></a></li>
               </ul>
        </div>

      </nav><br><br>
        <div class="col-md-12">
        <?php 
        if(@!$_GET['p']){ 
            include 'detail_anggota.php';
         }else{
          include 'page.php';
        }
        ?>
      </div>

</body>