<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
				//menjalankan session : selalu diletakkan di awal
				session_start();
				if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
					//jika level admin akan masuk ke halaman admin.php
					if ($_SESSION['level'] == "admin") {
						echo "<center><h3>Ini Halaman Admin</h3></center>";
						echo "Selamat Datang : <b>".$_SESSION['username']."</b><br>";
						echo "Level Anda sebagai : <b>".$_SESSION['level']."</b><br>";
						echo "MENU-MENU ADMIN : </b><br>";
					}
					//jika kondisi level user maka akan diarahkan ke halaman user.php
					else if($_SESSION['level'] == "user"){
						header('location:index.html');
					}
				}
				//jika user belum terdaftar maka akan diarahkan ke halaman register.php
				if (!isset($_SESSION['level'])) {
					echo "Anda tidak boleh mengakses halaman ini tanpa : ";
					echo "<a href='login.php'>Login</a><br>";
					echo "<a href='signup.php'>Belum punya User?</a>";
				}
			?>
</body>
</html>
