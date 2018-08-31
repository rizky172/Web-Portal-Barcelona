<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
    
    include "koneksi.php";
if (!isset($_SESSION['user_admin'])) 
  {
    echo "<script>alert('Anda Belum LOGIN !');window.location='index.php'</script>";
  }
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
    <?php
        require ('nav.php');
        ?>
        ?>
    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add Kontak
                            </li>
                        </ol>

                        <h1 class="page-header">
                             Kontak
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form  action="add_pemain_act.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Pemain</label>
                                <input class="form-control" name="nama_pemain">
                            </div>
                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <input class="form-control" name="nama_panggilan">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                 <input class="form-control" rows="5" name="umur"></input>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                 <input class="form-control" rows="5" name="tempat_lahir"></input>
                            </div>
                            <div class="form-group">
                                <label>Negara</label>
                                 <input class="form-control" rows="5" name="negara"></input>
                            </div>
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                 <input class="form-control" rows="5" name="tinggi_badan"></input>
                            </div>
                            <div class="form-group">
                                <label>Berat Badan</label>
                                 <input class="form-control" rows="5" name="berat_badan"></input>
                            </div>
                            <div class="form-group">
                                <label>Posisi</label>
                                 <input class="form-control" rows="5" name="posisi"></input>
                            </div>
                            <div class="form-group">
                                <label>No Punggung</label>
                                 <input class="form-control" rows="5" name="no_punggung"></input>
                            </div>
                            <div class="form-group">
                                <label>Timnas</label>
                                 <input class="form-control" rows="5" name="timnas"></input>
                            </div>
                            <div class="form-group">
                                <label>Karier</label>
                                 <input class="form-control" rows="5" name="karier"></input>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                             <div class="btn-group">
                                    <input name="simpan" type="submit" value="simpan" class="btn btn-success">
                                </div>

                         </form>

                    </div>
                    

                      

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
