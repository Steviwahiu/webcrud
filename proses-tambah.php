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

mysqli_query($koneksi,"insert into tb_anggota values('$nim','$nama','$prodi','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$lulusan','$tahun_angkatan','$hobi')");
header("location:data_user.php?tambah-berhasil");

?>