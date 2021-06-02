<?php
	session_start();

	if (empty($_SESSION['username']))
	{
		header("location:login.php");
	} else { 
	echo $_SESSION['status'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Dashboard</title>
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
				<li><a href="logout.php">Logout</a></li>			</ul>
		</div>
	</header>
	<!--content-->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang Di Perpustakaan Online</h4>
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
	}
?>