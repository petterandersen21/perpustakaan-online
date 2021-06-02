<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perpustakaan Online</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Selamat Datang</h2>
		<form acction="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
			<p> Belum punya akun?
                  <a href="daftar.php">Register Here</a>
                </p>
		</form>
		<?php
		if (isset($_POST['submit'])) // untuk memeriksa sebuah objek yang disbumit
		 {
			session_start();
			include 'perpustakaan_db.php';

			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."'");
			if($cek > 0)
			{
				$data = mysqli_fetch_assoc($cek); // digunakan untuk array asosiatif
				if($data['status']=="admin"){
					$_SESSION['username'] = $user;
					$_SESSION['status'] = "admin";
		// alihkan ke halaman dashboard admin
					header("location:dashboard.php");

				}
				if($data['status']=="user"){
					$_SESSION['username'] = $user;
					$_SESSION['status'] = "user";
		// alihkan ke halaman dashboard admin
					header("location:dashboard.php");
				}
			}
			else
			{
				echo '<script>alert("Username atau Password Anda Salah!")</script>';
			}
		}
		?>
	</div>
</body>

</html>