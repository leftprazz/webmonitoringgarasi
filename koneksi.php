<?php 
$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "arduino";

$connection = mysqli_connect($servername, $user, $pasword, $db);
$koneksi = mysql_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
?>