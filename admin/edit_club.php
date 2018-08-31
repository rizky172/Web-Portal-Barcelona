<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
    
    include "koneksi.php";
if (!isset($_SESSION['user_admin'])) 
  {
    echo "<script>alert('Anda Belum LOGIN !');window.location='index.php'</script>";
  }?>

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
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Beranda</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Edit Club
                        </ol>

                        <h1 class="page-header">
                            Club
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">


            <?php
                
                $result = mysql_query("SELECT * from profil_club where id_club='$_GET[id]'" );
                while($data=mysql_fetch_array($result)){      
            ?>   
                      <form  action="edit_club_act.php?id=<?php echo $data['id_club'] ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Club</label>
                                <input class="form-control"  name='nama_club'  value="<?php echo $data['nama_club']; ?>">
                            </div> 
                            <div class="form-group">
                                <label>Julukan Club</label>
                                <input class="form-control"  name='julukan_club'  value="<?php echo $data['julukan_club']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tentang Club</label>
                                <input class="form-control"  name='tentang_club'  value="<?php echo $data['tentang_club']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tanggal Berdiri</label>
                                <input class="form-control"  name='tanggal_berdiri'  value="<?php echo $data['tanggal_berdiri']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Tempat Club</label>
                                <input class="form-control"  name='tempat_club'  value="<?php echo $data['tempat_club']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Pendiri Club</label>
                                <input class="form-control"  name='pendiri_club'  value="<?php echo $data['pendiri_club']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Lagu Club</label>
                                <input class="form-control"  name='lagu_club'  value="<?php echo $data['lagu_club']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Rival</label>
                                <input class="form-control"  name='rival'  value="<?php echo $data['rival']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Sejarah Rival</label>
                                <input class="form-control"  name='sejarah_rival'  value="<?php echo $data['sejarah_rival']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Juara</label>
                                <input class="form-control"  name='juara'  value="<?php echo $data['juara']; ?>">
                            </div>   
                            <div class="form-group">
                                <label>Gambar</label>
                                <input class="form-control"  name='image'  value="<?php echo $data['gambar_club']; ?>">
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
