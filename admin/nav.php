<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">CONTROL PANEL</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION ['user_admin'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Beranda</a>
                    </li>
                    <li class="dropdown-header">Setup Konten</li>   
                    <li><a href="tampilberita.php"><i class="fa fa-home fa-fw"></i>Setup Berita</a></li>
                    <li><a href="tampilpertandingan.php"><i class="fa fa-home fa-fw"></i>Setup Pertandingan</a></li>
                    <li><a href="tampiltopgoal.php"><i class="fa fa-home fa-fw"></i>Setup Top Goal</a></li>
                    <li><a href="tampiltopplayer.php"><i class="fa fa-home fa-fw"></i>Setup Top Player</a></li>
                    <li><a href="tampilgaleri.php"><i class="fa fa-thumb-tack fa-fw"></i>Setup Galeri</a></li>
                    <li><a href="tampilpemain.php"><i class="fa fa-thumb-tack fa-fw"></i>Setup Pemain</a></li>
                    <li><a href="tampilclub.php"><i class="fa fa-thumb-tack fa-fw"></i>Setup Club</a></li>
                    <li><a href="tampilkontak.php"><i class="fa fa-thumb-tack fa-fw"></i>Setup Kontak</a></li>
                    <li class="dropdown-header">Menu Setup</li>
                    <li>
                    <a href="tampiladmin.php"><i class="fa fa-thumb-tack fa-fw"></i> Setup Admin</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>