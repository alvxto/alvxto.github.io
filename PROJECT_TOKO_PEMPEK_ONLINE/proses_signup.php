		<?php 
					$username  = $_POST['username'];
                    $email = $_POST['email'];
					$password1 = $_POST['password'];
					$password2 = $_POST['cpassword'];
					$level = "user";//otomatis setiap register dianggap level user

					//cek kesamaan password
					if ($password1 == $password2) {
						include 'koneksi.php';

						//perlu dibuat sebarang pengacak
						$pengacak = "p3ng4c4k";

						//mengenkripsi password dengan md5() dan pengacak
						$passmd = md5($pengacak . md5($password1));

						//menyimpan username dan password terenkripsi ke database
						$query2 = "INSERT INTO tb_user VALUES('$username','$email','$passmd', '$level')";
						$hasil = mysqli_query($db_koneksi2,$query2);

						//menampilkan status pendaftaran
						if ($hasil) {
							echo "User sudah berhasil terdaftar<br>";
							echo "<a href='login.php'>Login </a>";
							echo " ||| ";
							echo "<a href='signup.php'> Kembali</a>";
						}
						else {
							echo "Username sudah ada yang memiliki<br>";
							echo "<a href='signup.php'>Kembali</a>";
						}		
					}
					else {
						echo "Password yang dimasukkan tidak sama<br>";
						echo "<a href='signup.php'>Kembali</a>";
					}		
				?>
