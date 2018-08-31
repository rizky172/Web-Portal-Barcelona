<?php
 include ('../admin/koneksi.php')
?>
<html>
	<head> 
		<title>FC Barcelona</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" media="all">
			   <script src="../bootstrap/js/jquery.min.js"></script>
  			 <script src="../bootstrap/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="../bootstrap/style.css">
      <link rel="stylesheet" type="text/css" href="kontak.css">
      <link rel="stylesheet" href="../bootstrap/css/font.css">
	</head>
	<body>
  <button onclick="topFunction()" id="btn-up" title="Go to top">UP</button>
    <script>
// When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btn-up").style.display = "block";
      } else {
        document.getElementById("btn-up").style.display = "none";
      }
    }
// When the user clicks on the button, scroll to the top of the document
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
  	  <div id="myCarousel" class="carousel slide" data-ride="carousel">   
    <!-- Wrapper for slides -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
             <div class="item active">
               <img src="../bootstrap/gambar/slide/slide1.jpg" alt="slide1" >
                <div class="carousel-caption">
                  <h3>MSN</h3>
                  <p>Trio Striker Mematikan</p>
                </div>
          </div>
             <div class="item">
               <img src="../bootstrap/gambar/slide/slide4.jpg" alt="slide4" >
               <div class="carousel-caption">
                  <h3>WPAP</h3>
                  <p>WPAP para Jugadors Barca</p>
                </div>
          </div>
             <div class="item">
               <img src="../bootstrap/gambar/slide/slide5.jpg" alt="slide5" >
               <div class="carousel-caption">
                  <h3>Andres Iniesta</h3>
                  <p>Playmaker Terbaik</p>
                </div>
          </div>
             </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
          </div> 
		<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-2 col-xs-12"> 		
    	        <ul class="nav navbar-nav">
    		        <li><a href="../index.php">Beranda</a></li>
  			        <li><a href="pemain.php">Profil Pemain</a></li>
      		      <li><a href="club.php">Profil Club</a></li>
      		      <li><a href="galeri.php">Gallery</a></li>
      		      <li><a href="kontak.php">Contac Us</a></li>
    	        </ul>       
          </div>
        </div>
      </div>
    </nav>
    <div class="bggaris"></div>
        <div class="contact" id="contact">
   <div class="container">
           <h3 class="tittle">Contact</h3>
      <div class="contact-form">
      <?php 
            $result = mysql_query("SELECT * FROM kontak");
               while($data=mysql_fetch_array($result)){
            ?>
          <div class="col-md-6 contact-grid contact-in">
          <form>
          <h5>Your Message</h5>
            <p class="your-para">Your Name:</p>
            <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
            <p class="your-para">Your Mail:</p>
            <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
            <p class="your-para">Your Message:</p>
            <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
            <div class="send">
              <input type="submit" value="Send" >
            </div>
          </form>
        </div>
        <div class="col-md-6 contact-in">
          <h5> Contact Info</h5>
          <p class="para1"><?php echo $data['pesan'] ?></p>
          <div class="more-address"> 
            <div class="address-more">
                <p class="location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $data['nama_kontak'] ?></p>
                <p class="mail"><i class="glyphicon glyphicon-envelope"></i><a href="#"><?php echo $data['email'] ?></a></p>
                <p class="phone"><i class="glyphicon glyphicon-phone"></i><?php echo $data['hp'] ?></p>
                <p class="location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $data['alamat'] ?></p>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
        <?php } ?>
         </div>
      </div>
    </div>
        <div class="bgfooter1">
        <div class="container">
          <div class="col-md-4 iklan1">
            <img src="../bootstrap/gambar/iklan/iklan2.jpg" alt="" style="width: 100%">
          </div>
          <div class="col-md-4 iklan1">
            <img src="../bootstrap/gambar/iklan/iklan1.gif" alt="" style="width: 100%">
          </div>
          <div class="col-md-4 iklan1">
            <img src="../bootstrap/gambar/iklan/iklan3.jpg" alt="" style="width: 100%">
          </div>
      </div>
    </div>
    <div class="bgfooter2">
      <div class="container">
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/nike.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/rakuten.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/beko.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/gilete.png" alt="" style="width: 50%">
          </div>
      </div>
      <div class="container">
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/dam.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/pes.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/bank.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="../bootstrap/gambar/sponsor/audi.png" alt="" style="width: 50%">
          </div>
      </div>
    </div>
    <div class="bgfooter3">
      <div class="container">
        <div class="col-lg-3">
          <img class="logobawah" src="../bootstrap/gambar/barca1.png" style="width: 300px">
        </div>
        <div>
        <span class="teksmail">Masukan Email untuk mendapatkan berita terbaru</span>
        <form method="POST" action="">
          <input class="search posisi" type="email" name="dbemail" placeholder="Email" required="">
          <input class="button" type="submit" name="btnemail" value="Email" required="">
      </form>
      <?PHP
        include '../setting/koneksi.php';
        if(isset($_POST['btnemail']))
        {
          $email = $_POST['dbemail'];
          $simpan = $koneksi->query("INSERT INTO email (email) VALUES ('".$email."')");
        }
      ?>
          <p class="karya">CopyRight&copy 2017 | Design By: Rizky Fathurahman | Kota : Sagaranten</p>
        </div>
    </div>     
  <div class="bgsocmed bgsocmed-warna">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12">
          <img src="../bootstrap/gambar/barca.png" class="bglogo">
            <ul class="uksocmed posisi-socmed">
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-google-plus"></a>
             <a href="#" class="fa fa-youtube"></a>
             <a href="#" class="fa fa-instagram"></a>
            </ul>
      </div>
    </div>
  </div>
  </body>
</html>