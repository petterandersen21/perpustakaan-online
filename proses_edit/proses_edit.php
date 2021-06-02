<?php

include 'perpustakaan_db.php';

if (isset($_POST['submit'])) {
  $id = $_POST['noBuku_id'];
  $judul_buku = $_POST['judul_buku'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahunPenerbit = $_POST['tahunPenerbit'];
  
  // update data berdasarkan yg dikirimkan
  $q = $koneksi->query("UPDATE buku_t SET judul_buku = '$judul_buku', pengarang = '$pengarang', penerbit = '$penerbit', tahunPenerbit = '$tahunPenerbit' WHERE noBuku_id = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='listbuku.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='listbuku.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: listbuku.php');
}
?>