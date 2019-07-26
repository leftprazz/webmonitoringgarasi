<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Pendaftaran</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <br><br><br>
<tr>
<center><font color="white" font size="20px"><h2>Pendaftaran</h2></font></center>
</tr>
  <form method="post" action="proses_daftar.php" class="login">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="username" id="login" value="tuliskan username anda">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="password">
    </p>

    <p>
      <label for="login">Nama:</label>
      <input type="text" name="nama" id="login" value="tulisnkan nama anda">
    </p>

    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="login" value="tuliskan email anda">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

     <tr>
      <td colspan=2>&nbsp;</td>
      <td><input type="submit" name="submit" value="DAFTAR"></td>
     </tr>

     <br><br>
     <tr>
      <td colspan=3><a href="login.php"> Back to Login menu</a></td>
     </tr>
  </form>

  
  <section class="about">
    <p class="about-links">
      <a href="#services" target="_parent">View Article</a>
      <a href="https://www.instagram.com/zzarp_a/" target="_parent">Follow my Instagram</a>
    </p>
    <p class="about-author">
      &copy; 2017&ndash;2019 <a href="https://www.instagram.com/zzarp_a/" target="_blank">Prasetya Company</a> -
      <a href="https://www.instagram.com/zzarp_a/" target="_blank">Prasetya License</a><br>
      Original PSD by <a href="https://www.instagram.com/zzarp_a/" target="_blank">Akhmad Prasetya</a>
  </section>
</body>
</html>
