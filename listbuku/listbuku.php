<?php
	session_start();
	include 'perpustakaan_db.php';
	if (empty($_SESSION['username']))
	{
		header("location:login.php");
	} else 
	{ 
	echo $_SESSION['status'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<title>List Buku</title>
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
			<h3>List Buku</h3>
			<div class="box">
			<?php
			if ($_SESSION['status'] == "admin"){
			echo '<p><a href="tambah-buku.php">Tambah Buku</a></p>';
			}
			?>
				
				<table border="1" cellspacing="0" class="table">
					<thead>
					<tr>
						<th>No</th>
						<th>Judul Buku</th>
						<th>Pengarang</th>
						<th>Penerbit</th>
						<th>Tahun Penerbit</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
						 	$listbuku = mysqli_query($koneksi, "SELECT * FROM buku_t ORDER BY noBuku_id DESC ");
						 	while ($row = mysqli_fetch_array($listbuku)){
						 ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['judul_buku'] ?></td>
							<td><?php echo $row['pengarang'] ?></td>
							<td><?php echo $row['penerbit'] ?></td>
							<td><?php echo $row['tahunPenerbit'] ?></td>
							<td><a href="edit.php?id=<?php echo $row['noBuku_id'] ?>">Edit || <a href="hapus.php?id=<?php  echo $row['noBuku_id'] ?>">Hapus</a></a></td>
						</tr>
						<?php } ?>
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