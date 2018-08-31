<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
    
    include "koneksi.php";
    $level=$_SESSION['level'];
    
    $comot_admin=mysql_query("select nama from admin where level='$level'");   
    $ngisi_admin=mysql_fetch_array($comot_admin);
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
            if($level=='admin'){
                include"nav.php";
            }else if($level=='operator'){
                include"nav_operator.php";
            }else{
                echo "Anda tidak punya hak access!! Hayoo!! sapa Loe??";
            }
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
                                <i class="fa fa-edit"></i> Edit Admin
                        </ol>

                        <h1 class="page-header">
                            Admin
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">


                         <?php
                
                $result = mysql_query("SELECT * from admin where id_admin='$_GET[id]'" );
                while($data=mysql_fetch_array($result)){
                    
            ?>   


                      <form  action="edit_admin_act.php?id=<?php echo $data['id_admin'] ?>" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control"  name='user'  value="<?php echo $data['user_admin']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control"  name='pass'  value="<?php echo $data['pass_admin']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name='level'>
                                    <option>++Pilih Level++</option>
                                     <option>Admin</option>
                                      <option>User</option>
                                </select>
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
