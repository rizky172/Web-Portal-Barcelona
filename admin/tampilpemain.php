<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
    
    include "koneksi.php";
if (!isset($_SESSION['user_admin'])) 
  {
    echo "<script>alert('Anda Belum LOGIN !');window.location='index.php'</script>";
  }

    $showPage   = '';
    $batas      = 5;

    if (isset($_GET['page'])) $noPage = $_GET['page'];
        else $noPage = 1;
        $offset=($noPage - 1) * $batas;

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
                        <h1 class="page-header">
                           Pemain
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Pemain</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Setup Pemain

                        </ol>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="btn-group">
                      <a href="add_pemain.php"><input  type="submit" value="Tambah Pemain" class="btn" ></a>
                                    </div>
                    </div>

                    
                </div>
  <?php


    
            $result = mysql_query("SELECT * FROM profil_pemain ORDER BY nama_pemain
                         LIMIT $offset, $batas") or die (mysql_error());
                $q      = mysql_query("SELECT COUNT(id_pemain) from profil_pemain");


    $no = $offset+1;?>


                <div class="row">


                <br>
                    <div class="col-lg-12">
                                <div class="table-responsive">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr class="label-info" >
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Panggilan</th>
                                        <th class="text-center">Tanggal Lahir</th>
                                        <th class="text-center">Umur</th>
                                        <th class="text-center">Tempat Lahir</th>
                                        <th class="text-center">Negara</th>
                                        <th class="text-center">Tinggi Badan</th>
                                        <th class="text-center">Berat Badan</th>
                                        <th class="text-center">Posisi</th>
                                        <th class="text-center">No Punggung</th>
                                        <th class="text-center">TimNas</th>
                                        <th class="text-center">Karier</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                $no=1;
                
                while($data=mysql_fetch_array($result)){
            
            ?>   
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_pemain'];?></td>
                    <td><?php echo $data['nama_panggilan'];?></td>
                    <td><?php echo $data['tanggal_lahir'];?></td>
                    <td><?php echo $data['umur'];?></td>
                    <td><?php echo $data['tempat_lahir'];?></td>
                    <td><?php echo $data['negara'];?></td>
                    <td><?php echo $data['tinggi_badan'];?></td>
                    <td><?php echo $data['berat_badan'];?></td>
                    <td><?php echo $data['posisi'];?></td>
                    <td><?php echo $data['nomor_punggung'];?></td>
                    <td><?php echo $data['tim_nasional'];?></td>
                    <td><?php echo $data['karier'];?></td>
                    <td><img src="../bootstrap/gambar/pemain/<?php echo $data['gambar_pemain']; ?>" widht="50px" height="50px"></td>
                    <td colspan="2" class="text-center">
                    <a href="edit_pemain.php?id=<?php echo $data['id_pemain']?>" class="btn btn-default" title="Edit"><b class="glyphicon glyphicon-edit"></b></a>
                    <a href="hapus_pemain.php?id=<?php echo $data['id_pemain']?>" class="btn btn-warning" title="Hapus"><b class="glyphicon glyphicon-trash"></b></a>
                    </td>
                </tr>
                <?php 
                    $no++;  
                }
             ?>                                   
                                </tbody>
                            </table>
            <div class="col-md-offset-5">
                <ul class="pagination">
                <?php 
                        $jml      = mysql_fetch_array($q);
                        $jmlData  = $jml[0];
                        $jmlPage  = ceil($jmlData / $batas);

                        if($noPage > 1) echo "<li><a href=$_SERVER[PHP_SELF]?=tampilpemain&page=".($noPage-1).">&laquo;</a></li>";

                        for($i=1; $i <= $jmlPage; $i++){

                        if ((($i >= $noPage - $batas) && ($i <= $noPage + $batas)) || ($i == 1)  || $i == $jmlPage){

                          if(($showPage == 1) && ($i != 2)) echo "<li><a>...</a></li>";

                          if(($showPage != ($jmlPage - 1)) && ($i == $jmlPage)) echo "<li><a>...</a></li>";

                          if($i==$noPage) echo "<li class=active><a>$i</a></li>";

                          else echo "<li><a href=".$_SERVER['PHP_SELF']."?=tampilpemain&page=".$i." > ".$i."</a></li>";

                          $showPage=$i;
                        }  
                        }

                        if ($noPage < $jmlPage) echo "<li><a href=$_SERVER[PHP_SELF]?=tampilpemain&page=".($noPage+1).">&raquo;</a></li>";

                        ?>

                </ul>
        
            </div>
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
