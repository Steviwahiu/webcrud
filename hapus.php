<?php
session_start();
if(isset($_SESSION['login_admin']))
{
include 'koneksi.php';
$nim = $_GET['nim'];

mysqli_query($koneksi,"delete from tb_anggota where nim='$nim'");
header("location:data_user.php?hapus=berhasil");
 
} else {header("location:login.php");}
?>