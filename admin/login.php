<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<script src="dist/js/bootstrap.min.js"></script>
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="icon" type="text/css" href="admin/Gambar/peserta.png">
<script type="text/javascript" src="dist/js/jquery.js"></script> 
<script type="text/javascript" src="dist/js/bootstrap.js"></script>
<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
<title>Peserta</title>
</head>
<?php 
  include "../system.php";
  $db = new koneksi();
  $db->konek();
  $login = new login();
?>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../dist/js/bootstrap.js"></script>
<script src="../dist/js/jquery.js"></script>

<body style="backgroud:moz-linear-gradient(center);">
  <div class="page-header" style="border: 0"></div>
    <center style=" margin-top:5%; margin-bottom:2%;"><h1></h1></center>
    <div class="container">
      <div class="col-sm-5" style="margin-left:30%;">
          <div class="panel panel-primary" >
              <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Masuk</h3>
                 </div>   
                <div class="panel-body">
                  <form method="post">  
                        <div class="input-group" style="margin-bottom:2%">
                      <span class="input-group-addon id="sizing-addon1""><span class="glyphicon glyphicon-user"></span></span> 
                        <input type="text" name="uname" class="form-control" placeholder="Masukan Username" aria-describedby="sizing-addon1">
                        </div>
                        <div class="input-group" style="margin-bottom:3%">
                      <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-exclamation-sign"></span></span> 
                        <input type="password" name="pass" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
                        </div>
                        <button type="submit" name="kirim" class="btn btn-primary">Masuk</button>
                    </form>
                    <?php 
                    if(isset($_POST['kirim'])){
                      $uname = $_POST['uname'];
                      $pass = $_POST['pass'];
                      $login->loginadmin($uname,$pass);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>