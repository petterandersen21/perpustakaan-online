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
<title>Peminjaman Buku</title>
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
			<h3>Peminjaman Buku</h3>
			<div class="box">
				<table>
				 <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <?php
                            include 'perpustakaan_db.php';
                            $query = $koneksi->query("SELECT * FROM anggota");?>
                            <select name="id_anggota">
                                <?php while($res = $query->fetch_assoc()): ?>
                                <option value="<?php echo $res['id_anggota'] ?>"><?php echo $res['nama'] ?></option>
                            <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Buku</td>
                        <td>:</td>
                        <td>
                            <?php $query2 = $conn->query("SELECT * FROM buku") ?>
                            <select name="kode_buku">
                                <?php while($res2 = $query2->fetch_assoc()): ?>
                                    <option value="<?php echo $res2['kode_buku'] ?>"><?php echo $res2['kode_buku'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
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
	}
?>