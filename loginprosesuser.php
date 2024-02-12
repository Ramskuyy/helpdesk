<?php
session_start();
include('koneksi.php');
$username   = $_POST['username'];
$password       = $_POST['password'];



if((empty($username))||(empty($password))){
	
	echo "<script>alert('Username dan Password harus di isi')</script>";
	  echo "<script>window.location.href = \"login_user.php\" </script>";
	
}else{
	
$user = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);


if($chek>0)
{
    $row = mysqli_fetch_array($user);
	$_SESSION['username'] = $row['username'];
	 $_SESSION['nama'] = $row['nama'];
    
	echo "<script>alert('Anda Berhasil Login') </script>";
          echo "<script>window.location.href = \"index.php\" </script>";
}else
{
	echo "<script>alert('Username atau Password Anda Salah') </script>";
     echo "<script>window.location.href = \"login_user.php\" </script>";
}
	
}





?>