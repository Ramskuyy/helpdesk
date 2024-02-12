<?php
session_start();
include('koneksi.php');
$username   = $_POST['username'];
$password       = $_POST['password'];



if((empty($username))||(empty($password))){
	
	echo "<script>alert('Username dan Password harus di isi')</script>";
	  echo "<script>window.location.href = \"login.php\" </script>";
	
}else{
	
	
$admin = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$chek = mysqli_num_rows($admin);
if($chek>0)
{
    $row = mysqli_fetch_array($admin);
	$_SESSION['username'] = $row['username'];
	
    
	echo "<script>alert('Anda Berhasil Login') </script>";
          echo "<script>window.location.href = \"halaman_admin.php\" </script>";
}else
{
	echo "<script>alert('Username atau Password Anda Salah') </script>";
     echo "<script>window.location.href = \"login.php\" </script>";
}
	
}





?>