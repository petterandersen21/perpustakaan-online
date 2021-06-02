<?php 
include 'perpustakaan_db.php';
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahunPenerbit = $_POST['tahunPenerbit'];

echo $penerbit;
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO buku_t values(NULL,'$judul_buku','$pengarang','$penerbit','$tahunPenerbit')");
header('Location: listbuku.php');
?>
