<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$lulusan = $_POST['lulusan'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$hobi = $_POST['hobi'];

mysqli_query($koneksi,"update tb_anggota set nama='$nama',prodi='$prodi',jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', alamat='$alamat', lulusan='$lulusan', tahun_angkatan='$tahun_angkatan', hobi='$hobi'  where nim='$nim'");
header("location:data_user.php?Ubah=berhasil");

?>