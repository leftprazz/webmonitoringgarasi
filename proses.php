<?php
include "koneksi.php";

$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$ttl	= $_POST['ttl'];
$status	= $_POST['status'];

$query = mysql_query('insert into anggota(nm_anggota,alamat,ttl_anggota,status_anggota) values ("'.$nama.'","'.$alamat.'","'.$ttl.'","'.$status.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='index.php#portfolio'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='index.php#portfolio'</script>\n";
}
?>