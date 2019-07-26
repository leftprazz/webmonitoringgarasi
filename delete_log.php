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
      <td>NIM</td>
      <td>Nama Mahasiswa</td>
      <td>Alamat</td>
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

<?php
include "koneksi.php";
$query = mysql_query($koneksi,"SELECT * FROM sensor ORDER BY id DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>&ensp;No&ensp;</th>
            <th>&ensp;Jarak (dalam cm)&ensp;</th>
            <th>&ensp;Delete log&ensp;</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["value"];?></td>
            <td>
                <a href="hapus_data.php">Delete</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
<tr>
      <td colspan=3><a href="daftar.php">Daftar disini</a></td>
     </tr>