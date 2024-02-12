<?php


function Registrasi($tabel,$stb,$nama,$user,$pass) {
	include('koneksi.php');

	$query 	= "INSERT INTO $tabel (stambuk, nama, username, password) VALUES ('$stb','$nama','$user','$pass')";
	$tambah	= mysqli_query($koneksi, $query);
	  echo "<script>alert('Registrasi Berhasil') </script>";
	   echo "<script>window.location.href = \"login_user.php\" </script>";

	if (!$tambah) {
		echo "<script>alert('Gagal Menambah Data') </script>".$tabel;
		exit();
	}
}

function deleteMahasiswa($id) {
	include('koneksi.php');

	$query 	= "DELETE FROM user WHERE stambuk='$id'";
	mysqli_query($koneksi, $query);

	
	
}


?>