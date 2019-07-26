<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-Y H:i:s');
?>
<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
&ensp; |&ensp;Berhasil Login, 
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring Garasi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Monitoring Garasi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Monitoring</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Log monitoring</a>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat datang di Monitoring Kendaraan berbasis Arduino</div>
          <div class="intro-heading text-uppercase"></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Selengkapnya</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Home</h2>
            <h3 class="section-subheading text-muted">TENTANG MONITORING KENDARAAN</h3>
          </div>
        </div>
        <center>
        <table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1> Monitoring Kendaraan</h1> <br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
<tr>


</td>
<td width="500"> &ensp; Didalam website ini anda akan disuguhkan data dari monitoring yang dilakukan <br> &ensp; oleh sensor jarak untuk mendeteksi apakah kendaraan yang berada di Garasi <br> &ensp; anda dalam jarak aman atau tidak. Dan web ini akan mengarahkan anda secara <br>&ensp; otomatis ke Monitoring Realtime kendaraan anda, data realtime direfresh <br>&ensp; setiap 5 detik sekali. <br></td>
</tr>
<tr>
<td colspan="2" align="center">Monitoring Arduino</td>
</tr>
</table>
</center>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Monitoring Real-Time</h2>
            <h3 class="section-subheading text-muted">Data realtime, refresh setiap 3 detik sekali.</h3>
          </div>
        </div>
        <center>
        <meta http-equiv=refresh content=3;url=index_realtime.php#portfolio>
        <table width="1000" border="1">
<tr>
<td colspan="2" align="center"><h1>Monitoring Garasi</h1></td>
</tr>
<tr>


</td>
<td width="500">
<center>
<br>
<br>
<?php
 
include "koneksi_realtime.php";
 
$data = mysqli_query($koneksi,"SELECT * FROM sensor") or die (mysqli_error());
$row = mysqli_fetch_array($data);

echo "Data ke:  ".$row['id']. "   ";  
echo "Jarak Kendaraan : ".$row['value']. " cm";
    
?>
</center>
<br>
<br>
<center>
<h2>Kendaraan aman bila :</h2>
</center>
<center>
<a>
  Jarak tertulis 1 - 30 cm
</a>
</center>  
<center>
<h2>Kendaraan hilang bila :</h2>
</center>
<center>
<a>
  Jarak tertulis 0 cm
</a>
</center> 
<br>
<center>
<a>Ingin kembali kehalaman normal? </a>
<button onclick="window.location.href='index.php#portfolio'">Klik disini</button>
</center>
</table>
</center>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">LOG MONITORING</h2>
            <h3 class="section-subheading text-muted">Data - data yang sudah tercatat</h3>
          </div>
        </div>
        <center>
        <?php

mysql_connect("localhost","root","");
mysql_select_db("arduino");
$warnaGenap = "#CCCCCC";   // warna abu-abu
$warnaGanjil = "#FFFFFF";  // warna putih
$warnaHeading = "#FF0000"; // warna merah untuk heading tabel

$query = "SELECT * FROM sensor";
$hasil = mysql_query($query);

echo "<table border='1'>";
echo "<tr bgcolor='".$warnaHeading."'>
      <tr>
            <th>Id data</th>
            <th>Data Sensor (dalam cm)</th>
      </tr>

      </tr>";

$counter = 1;
while($data = mysql_fetch_array($hasil))
{

// cek apakah counternya ganjil atau genap

if ($counter % 2 == 0) $warna = $warnaGenap;
else $warna = $warnaGanjil;

echo "<tr bgcolor='".$warna."'>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['value']."</td>";
echo "</tr>";
$counter++; // menambah counter
}
echo "</table>";

?>
</center>
    </section>

    
      </section>


    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading text-muted">Isi dikolom berikut untuk saran dan bantuan yang ingin anda tanyakan.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Prasetya Website 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
