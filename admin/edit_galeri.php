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

    <title>SB Admin - Bootstrap Admin Template</title>

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
                                <i class="fa fa-edit"></i> Add Berita
                            </li>
                        </ol>

                        <h1 class="page-header">
                            Edit Berita
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                    <?php
                
                $result = mysql_query("SELECT * from galeri where id_galeri='$_GET[id]'" );
                while($data=mysql_fetch_array($result)){
            
            ?>   

                      <form  action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul </label>
                                <input class="form-control" name="judul_galeri"  value="<?php echo $data['judul_galeri']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control" rows="5" name="isi_galeri"  > <?php echo $data['isi_galeri']; ?></textarea>
                            </div>

                            <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="fileupload-new thumbnail">
                                        <img class="img-responsive" src="../bootstrap/gambar/galery/<?php echo $data['gambar_galeri']; ?>"  widht="75px" height="75px"/>
                                        </div>  
                                        <input type="file" name="gambar" value="" placeholder="Masukan gambar">
                                        <input type="submit" name="rubahgambar" value="Rubah Gambar" >
                                </div>
                                    
                                <div class="btn-group">
                                    <input name="rubah" type="submit" value="Edit" class="btn btn-success">
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
                    <?php 
                         if (isset($_POST['rubahgambar'])){
                            $namapoto   = $_FILES['gambar']['name'];
                            $type       = $_FILES['gambar']['type'];
                            $ukuran     = $_FILES['gambar']['size'];

                             if ($type != "image/gif" && $type != "image/jpg" && $type != "image/jpeg") {
                                echo "<script> alert ('Format harus jpg/jpeg/gif');</script>";
                                }elseif ($ukuran > 10000000) {
                                    echo "<script> alert ('Gambar Maksimal 10 Mb');</script>";
                                }else{
                                    $uploadir   ='../bootstrap/gambar/galery/';
                                    $rnd        =date("His");
                                    $nama_file_upload   = $rnd.'-'.$namapoto;
                                    $alamatfile         = $uploadir.$nama_file_upload;

                                    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $alamatfile)){
                                        $query=mysql_query("UPDATE galeri SET 
                                            gambar_galeri           = '$nama_file_upload' where id_galeri ='$_GET[idate(format)]' ") or die(mysql_error());
                                        if ($query){
                                            echo "<script>
                                            alert ('Data Berhasil Di Ubah');
                                            window.location.href='edit_galeri.php';</script>";

                                        }else{
                                            echo"<script>alert('Data Tidak Berhasil Di Ubah');</script>";
                                        }
                                    }
                                }
                         }
                     ?>

                    <?php 
                        if (isset($_POST['rubah'])){
                            $judul_galeri           = $_POST['judul_galeri'];
                            $isi_galeri             = $_POST['isi_galeri'];
                            $query=mysql_query("UPDATE galeri SET 
                            judul_galeri          = '$judul_galeri',
                            isi_galeri          = '$isi_galeri' where id_galeri='$_GET[id]' ") or die(mysql_error());
                        if ($query){
                            echo "<script>
                            alert ('Data Berhasil disimpan');
                            window.location.href='tampilgaleri.php';</script>";

                        }else{
                            echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
                            }
                        }
                      ?>