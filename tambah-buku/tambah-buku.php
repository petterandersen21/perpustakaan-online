<?php
	session_start();

	if (empty($_SESSION['username']))
	{
		header("location:login.php");
	} else { 
	echo $_SESSION['status'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Tambah Buku</title>
</head>
<body>
	<!--header-->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Perpustakaan Online</a></h1>
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
			<h3>Tambah Buku</h3>
			<div class="box">
				<form action="pross.php" method="post" enctype="multipart/form-data">
					<input type="text" name="judul_buku" placeholder="Nama Buku" class="input-control" required> <!-- guna required agar kolomnya harus terisi -->
					<input type="text" name="pengarang" placeholder="Pengarang" class="input-control" required>
					<input type="text" name="penerbit" placeholder="Penerbit" class="input-control" required>
					<input type="date" name="tahunPenerbit" placeholder="Tahun Penerbit" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				</form>
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