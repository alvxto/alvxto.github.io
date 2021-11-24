<?php 
	//File koneksi php -> mysql
	$host="localhost";
	$user="root";
	$pass="";//kosongkan
	$db="db_pempek";
	//koneksi ke mysql
	$koneksi=mysqli_connect($host,$user,$pass);
	$db_koneksi=mysqli_select_db($koneksi,$db);
	$db_koneksi2=mysqli_connect($host,$user,$pass,$db);
	$conn="";
	if ($conn) {
		echo "KONEKSI DATABASE GAGAL!!!";
	}
?>