<html>
	<head> 
		<title>FC Barcelona</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="all">
			   <script src="bootstrap/js/jquery.min.js"></script>
  			 <script src="bootstrap/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
      <link rel="stylesheet" href="bootstrap/css/font.css" type="text/css">
      <script type="text/javascript" src="bootstrap/js/move-top.js"></script>
      <script type="text/javascript" src="bootstrap/js/easing.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
          $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
          });
        });
      </script>
          <script src="bootstrap/js/jquery.chocolat.js"></script>
      <link rel="stylesheet" href="bootstrap/css/chocolat.css" type="text/css" media="screen">
<!--light-box-files -->
      <script type="text/javascript" >
        $(function() {
        $('.gallery a').Chocolat();
        });
      </script>
	</head>
	<body>
  <button onclick="topFunction()" id="btn-up" title="Go to top">Up</button>
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
          <div class="carousel-inner">
      	     <div class="item active">
        	     <img src="bootstrap/gambar/slide/slide1.jpg" alt="slide1" >
      	     </div>
             <div class="item">
               <img src="bootstrap/gambar/slide/slide2.jpg" alt="slide2" >
             </div>
             <div class="item">
               <img src="bootstrap/gambar/slide/slide3.jpg" alt="slide3" >
             </div>
             <div class="item">
               <img src="bootstrap/gambar/slide/slide4.jpg" alt="slide4" >
             </div>
    	    </div>		
      </div>
		<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-2 col-xs-12"> 		
    	        <ul class="nav navbar-nav">
    		        <li><a href="index.php">Beranda</a></li>
  			        <li><a href="halaman/pemain.php">Info Pemain</a></li>
      		      <li><a href="halaman/club.php">Info Club</a></li>
      		      <li><a href="halaman/galeri.php">Gallery</a></li>
      		      <li><a href="#">Pembelian Tiket</a></li>
    	        </ul>       
          </div>
        </div>
      </div>
    </nav>
    <div class="bggaris"></div>
    
    <div class="slideshow-container">
      <div class="mySlides fadebarca">
          <img src="bootstrap/gambar/beranda/beranda1.jpg" style="width:100%">
            <div class="teks-slide">Caption Text</div>
            <div class="overlay-teks">
              <div class="teksaaa">Hello World</div>
            </div>
      </div>
      <div class="mySlides fadebarca">
          <img src="bootstrap/gambar/beranda/beranda2.jpg" style="width:100%">
        <div class="teks-slide">Caption Two</div>
            <div class="overlay-teks">
              <div class="teksaaa">Hello World</div>
            </div>
      </div>
      <div class="mySlides fadebarca">
          <img src="bootstrap/gambar/beranda/beranda3.jpg" style="width:100%">
        <div class="teks-slide">Caption Three</div>
            <div class="overlay-teks">
              <div class="teksaaa">Hello World</div>
            </div>
      </div>
      <div>
        <span class="dota"></span> 
        <span class="dota"></span> 
        <span class="dota"></span> 
      </div>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dota");
      for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
      }
        slideIndex++;
      if (slideIndex> slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-barca", "");
      }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active-barca";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
      }
    </script>
      <div class="bgfooter1">
        <div class="container">
          <div class="col-md-4 iklan1">
            <img src="bootstrap/gambar/iklan/iklan2.jpg" alt="" style="width: 100%">
          </div>
          <div class="col-md-4 iklan1">
            <img src="bootstrap/gambar/iklan/iklan1.gif" alt="" style="width: 100%">
          </div>
          <div class="col-md-4 iklan1">
            <img src="bootstrap/gambar/iklan/iklan3.jpg" alt="" style="width: 100%">
          </div>
      </div>
    </div>
    <div class="bgfooter2">
      <div class="container">
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/nike.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/rakuten.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/beko.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/gilete.png" alt="" style="width: 50%">
          </div>
      </div>
      <div class="container">
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/dam.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/pes.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/bank.png" alt="" style="width: 50%">
          </div>
          <div class="col-lg-3 sponsor1">
            <img src="bootstrap/gambar/sponsor/audi.png" alt="" style="width: 50%">
          </div>
      </div>
    </div>
    <div class="bgfooter3">
      <div class="container">
        <div class="col-lg-3">
          <img class="logobawah" src="bootstrap/gambar/barca1.png" style="width: 300px">
        </div>
        <div>
        <span class="teksmail">Masukan Email untuk mendapatkan berita terbaru</span>
        <form method="POST" action="">
          <input class="search posisi" type="email" name="dbemail" placeholder="Email" required="">
          <input class="button" type="submit" name="btnemail" value="Email" required="">
      </form>
      <?PHP
        include 'setting/koneksi.php';
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
          <img src="bootstrap/gambar/barca.png" class="bglogo">
            <ul class="uksocmed posisi-socmed">
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-google-plus"></a>
             <a href="#" class="fa fa-youtube"></a>
             <a href="#" class="fa fa-instagram"></a>
            </ul>
            <div class="container">
                <!-- MODAL LOGIN -->
                    <button type="button" class="btn-signup btn-info btn-lg" data-toggle="modal" data-target="#myModalsign">Sign Up</button>
                <!-- Modal -->
                    <div class="modal fade" id="myModalsign" role="dialog">
                      <div class="modal-dialog">
                <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">FC Barcelona</h4>
                          </div>
                          <div class="modal-body">
                            <p>Sign Up</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn-signup btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- MODAL SIGNUP -->
                      <button type="button" class="btn-login btn-info btn-lg" data-toggle="modal" data-target="#myModallogin">Login</button>
                <!-- Modal -->
                      <div class="modal fade" id="myModallogin" role="dialog">
                        <div class="modal-dialog">
                <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">FC Barcelona</h4>
                            </div>
                            <div class="modal-body">
                              <p>Login</p>
                              <form method="POST" action="">
                                <p>Username *</p>
                                <input type="text" name="username" required="">
                                <br>
                                <br>
                                <p>Password *</p>
                                <input type="password" name="password" required="">
                                <br>
                                <br>
                                <input type="submit" name="modal-login" value="LOGIN">
                            </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn-login btn-default" data-dismiss="modal">Sign Up</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
      </div>
    </div>
  </div>
	</body>
</html>