<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pemesanan Bunga ONLINE oleh Nitta O.I, Rohul J & J. Makni</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <h1>
                        Pemesanan Bunga Online </h1><br>
                        <h3>Toko Bunga Kirei</h3>
                    </h2>
                    <p>
                        <b>Selamat datang di Toko Bunga KIREI ONLINE</b><br>
                        
                    </p>
                    <img src="./images/Tulips.jpg" class="img-thumbnail" width="144px" height="144px">
                    <img src="./images/matahari.jpg" class="img-thumbnail" width="144px" height="144px" >
                    <img src="./images/bunga herbras.jpg" class="img-thumbnail" width="144px" height="144px" >
                    <img src="./images/bunga allamanda.jpg" class="img-thumbnail" width="144px" height="144px">
                    <img src="./images/bunga tulip.jpg" class="img-thumbnail" width="144px" height="144px" >
                    <img src="./images/bunga kamboja putih.jpg" class="img-thumbnail" width="144px" height="144px" >
                    <img src="./images/bunga raflesia.jpg" class="img-thumbnail" width="144px" height="144px" >
                    
                    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4 column">
                    <h2>
                         <span class="glyphicon glyphicon-pencil"></span> Pendaftaran
                    </h2>
                    <p>
                        Untuk dapat melakukan pemesanan<br>
                        pastikan anda telah terdaftar sebagai anggota<br>
                        di Toko Bunga Online kami atau kunjungi <br>
                        toko kami secara langsung.
                    </p>
                    <p>
                        Untuk mendaftar klik tombol 'Mendaftar'	
                    </p> <a type="button" class="btn btn-primary" href="<?php echo URL::to('/anggota'); ?>"> <span class="glyphicon glyphicon-hand-up"></span> Mendaftar</a>
                </div>
                <div class="col-md-4 column">
                    <h2>
                         <span class="glyphicon glyphicon-edit"></span> Pemesanan
                    </h2>
                    <p>
                        Untuk memesan bunga, silahkan <br>
                        klik tombol Pesan di bawah ini.
                    </p>
                    <a type="button" class="btn btn-success" href="<?php echo URL::TO('/order'); ?>"> <span class="glyphicon glyphicon-hand-up"></span> Pesan</a>
                </div>
                <div class="col-md-4 column">
                    <h2>
                        <span class="glyphicon glyphicon-picture"></span>  Daftar Bunga
                    </h2>
                    <p>
                        Jika anda belum menentukan pilihan<br>
                        bunga apa yang ingin anda beli, <br>
                        silahkan melihat-lihat daftar bunga<br>
                        yang tersedia di Toko kami
                    </p>
                    <a type="button" class="btn btn-warning" href="<?php echo URL::TO('/draft/lihat'); ?>"> <span class="glyphicon glyphicon-hand-up"></span> Daftar Bunga</a>
                </div>
            </div>
        </div>
    </body>
</html>

