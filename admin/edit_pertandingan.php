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
                                <i class="fa fa-edit"></i> Edit Pertandingan
                        </ol>

                        <h1 class="page-header">
                            Pertandingan
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">


                         <?php
                
                $result = mysql_query("SELECT * from pertandingan where id_pertandingan='$_GET[id]'" );
                while($data=mysql_fetch_array($result)){
                    
            ?>   


                      <form  action="edit_pertandingan_act.php?id=<?php echo $data['id_pertandingan'] ?>" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Laga</label>
                                <input class="form-control"  name='laga'  value="<?php echo $data['laga']; ?>">
                            </div> 
                            <div class="form-group">
                                <label>Jadwal & Jam</label>
                                <input class="form-control"  name='jadwal'  value="<?php echo $data['jadwal']; ?>">
                            </div> 
                            <div class="form-group">
                                <label>Home</label>
                                <input class="form-control"  name='home'  value="<?php echo $data['home']; ?>">
                            </div> 
                            <div class="form-group">
                                <label>Away</label>
                                <input class="form-control"  name='away'  value="<?php echo $data['away']; ?>">
                            </div>                           
                                <div class="btn-group">
                                    <input name="edit" type="submit" value="Edit" class="btn btn-success">
                                </div>

                                <div class="btn-group">
                                <a href="tampilkontak.php">
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
