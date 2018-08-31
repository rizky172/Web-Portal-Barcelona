<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
    
    include "koneksi.php";
    $level=$_SESSION['level'];
    
    $comot_admin=mysql_query("select nama from admin where level='$level'");   
    $ngisi_admin=mysql_fetch_array($comot_admin);

    $showPage   = '';
    $batas      = 10;

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
                        <h1 class="page-header">
                            Daftar Promo
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="tampilslider.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Setup Promo

                        </ol>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="btn-group">
                      <a href="add_promo.php"><input  type="submit" value="Tambah Promo" class="btn" ></a>
                                    </div>
                    </div>


                </div>


  <?php

    
            $result = mysql_query("SELECT id_slide,judul_slide,gambar_slide 
                         FROM gambar_slide  ORDER BY judul_slide
                         LIMIT $offset, $batas") or die (mysql_error());
                $q      = mysql_query("SELECT COUNT(id_slide) from gambar_slide");

    $no = $offset+1;?>


                <div class="row">


                <br>
                    <div class="col-lg-12">
                                <div class="table-responsive">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr class="label-info" >
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nama Promo</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                
                $result = mysql_query("SELECT id_slide, judul_slide,gambar_slide from gambar_slide");
                while($data=mysql_fetch_array($result)){
            
            ?>   
                    <tr>
                    <td><?php echo $data['id_slide']; ?></td>
                    <td><?php echo $data['judul_slide'];?></td>
                    <td><img src="../bootstrap/gambar/<?php echo $data['gambar_slide']; ?>" widht="75px" height="75px"></td>
                    <td colspan="2" class="text-center">
                    <a href="edit_promo.php?id=<?php echo $data['id_slide']?>" class="btn btn-default" title="Edit"><b class="glyphicon glyphicon-edit"></b></a>
                    <a href="hapus_promo.php?id=<?php echo $data['id_slide']?>" class="btn btn-warning" title="Hapus"><b class="glyphicon glyphicon-trash"></b></a>
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

                        if($noPage > 1) echo "<li><a href=$_SERVER[PHP_SELF]?tampilslider&page=".($noPage-1).">&laquo;</a></li>";

                        for($i=1; $i <= $jmlPage; $i++){

                        if ((($i >= $noPage - $batas) && ($i <= $noPage + $batas)) || ($i == 1)  || $i == $jmlPage){

                          if(($showPage == 1) && ($i != 2)) echo "<li><a>...</a></li>";

                          if(($showPage != ($jmlPage - 1)) && ($i == $jmlPage)) echo "<li><a>...</a></li>";

                          if($i==$noPage) echo "<li class=active><a>$i</a></li>";

                          else echo "<li><a href=".$_SERVER['PHP_SELF']."tampilslider.php".$i." > ".$i."</a></li>";

                          $showPage=$i;
                        }  
                        }

                        if ($noPage < $jmlPage) echo "<li><a href=$_SERVER[PHP_SELF]?tampilslider.php".($noPage+1).">&raquo;</a></li>";

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
