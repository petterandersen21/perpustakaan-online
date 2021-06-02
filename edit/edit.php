<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<title>Edit Buku</title>
</head>
<body>
  <!--header-->
  <header>
    <div class="container">
    <h1><a href="dashboard.php"> Perpustakaan Online</a></h1>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="listbuku.php">List Buku</a></li>
        <li><a href="peminjaman.php">Peminjaman Buku</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </header>
  <!--content-->
  <div class="section">
    <div class="container">
      <h3>Edit Buku</h3>
      <div class="box">
        <table border="1" cellspacing="0" class="table">
          <tbody>
            <?php

            include 'perpustakaan_db.php';

            // cek id
            if (isset($_GET['id'])) {
              $id = $_GET['id'];

              // ambil data berdasarkan id
              $q = $koneksi->query("SELECT * FROM buku_t WHERE noBuku_id = '$id'");

              foreach ($q as $dt) :
              ?>
              <form action="proses_edit.php" method="post">
                <input type="hidden" name="noBuku_id" value="<?= $dt['noBuku_id'] ?>">
                <input type="text" name="judul_buku" value="<?= $dt['judul_buku'] ?>">
                <input type="text" name="pengarang" value="<?= $dt['pengarang'] ?>">
                <input type="text" name="penerbit" value="<?= $dt['penerbit'] ?>">
                <input type="date" name="tahunPenerbit" value="<?= $dt['tahunPenerbit'] ?>">
                <input type="submit" name="submit" value="Ubah Data" class="btn btn-primary">
              </form>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--footer-->
  <footer>
    <div class="container">
      <small>Copyright &copy; 2021 - Perpustakaan Online</small>
    </div>
  </footer>
  </body>
</html>
 <?php
  endforeach;
}