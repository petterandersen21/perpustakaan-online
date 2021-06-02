<?php

include 'perpustakaan_db.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // perintah hapus data berdasarkan id yang dikirimkan
  $q = $koneksi->query("DELETE FROM buku_t WHERE noBuku_id = '$id'");

  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='listbuku.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='listbuku.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:listbuku.php');
}