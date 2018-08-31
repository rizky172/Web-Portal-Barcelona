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
                                <i class="fa fa-edit"></i> Edit Pemain
                        </ol>

                        <h1 class="page-header">
                            Pemain
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">


            <?php
                
                $result = mysql_query("SELECT * from profil_pemain where id_pemain='$_GET[id]'" );
                while($data=mysql_fetch_array($result)){      
            ?>   
                      <form  action="edit_pemain_act.php?id=<?php echo $data['id_pemain'] ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Pemain</label>
                                <input class="form-control"  name='nama_pemain'  value="<?php echo $data['nama_pemain']; ?>">
                            </div> 
                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <input class="form-control"  name='nama_panggilan'  value="<?php echo $data['nama_panggilan']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control"  name='tanggal_lahir'  value="<?php echo $data['tanggal_lahir']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Umur</label>
                                <input class="form-control"  name='umur'  value="<?php echo $data['umur']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control"  name='tempat_lahir'  value="<?php echo $data['tempat_lahir']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Negara</label>
                                <input class="form-control"  name='negara'  value="<?php echo $data['negara']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                <input class="form-control"  name='tinggi_badan'  value="<?php echo $data['tinggi_badan']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Berat Badan</label>
                                <input class="form-control"  name='berat_badan'  value="<?php echo $data['berat_badan']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Posisi</label>
                                <input class="form-control"  name='posisi'  value="<?php echo $data['posisi']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>No Punggug</label>
                                <input class="form-control"  name='no_punggung'  value="<?php echo $data['nomor_punggung']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>TimNas</label>
                                <input class="form-control"  name='timnas'  value="<?php echo $data['tim_nasional']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Karier</label>
                                <input class="form-control"  name='karier'  value="<?php echo $data['karier']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Gambar</label>
                                <input class="form-control"  name='image'  value="<?php echo $data['gambar_pemain']; ?>">
                            </div>                                  
                                <div class="btn-group">
                                    <input name="edit" type="submit" value="Edit" class="btn btn-success">
                                </div>

                                <div class="btn-group">
                                <a href="tampilpemain.php">
                                    <input  type="button" value="Batal" class="btn btn-success"></a>
                                </div>
                                <?php

                                }
                                ?>

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
