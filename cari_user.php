<?php
include 'koneksi.php';

$user = $_POST['user'];
$query = "SELECT * FROM tb_anggota WHERE
nim LIKE '%$user%' OR
Nama LIKE '%$user%' OR 
prodi LIKE '%$user%' OR 
jenis_kelamin LIKE '%$user%' OR 
tempat_lahir LIKE '%$user%' OR 
tanggal_lahir LIKE '%$user%' OR
alamat LIKE '%$user%' OR 
lulusan LIKE '%$user%' OR
tahun_angkatan LIKE '%$user%' OR 
hobi LIKE '%$user%'";

$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Halaman Data</h1>
    </div>

    <div id="sidebar">
        <ul>
            <a href="home.html">Home</a>
            <a href="login.php">Login</a>
            <a href="logout.php" onclick="return confirm('anda yakin ingin logout ?')">Logout</a>
            <a href="data_user.php">Halaman Data</a>
        </ul>
    </div>

    <div id="content">
        <table>
            <caption><b>Data Anggota Mahasiswa</b></caption>
            <tr>
                <form action="" method="post">
                    <td><input type="text" name="user" placeholder="Cari..."></td>
                    <td colspan="11"><input type="submit" value="Cari"></td>
                </form>
            </tr>
            <tr>
                <td colspan="12"><a href="tambah.php"><b style="color: black;">Tambah Data</b></a></td>
            </tr>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Lulusan</th>
                <th>Tahun Angkatan</th>
                <th>Hobi</th>
                <th>Ubah</th>
                <th>Hapus</th>
            </tr>
            <?php
            while($isi = mysqli_fetch_array($data)){?>
                <tr>
                    <td> <?php echo $isi['nim']; ?> </td>
                    <td> <?php echo $isi['nama']; ?> </td>
                    <td> <?php echo $isi['prodi']; ?> </td>
                    <td> <?php echo $isi['jenis_kelamin']; ?> </td>
                    <td> <?php echo $isi['tempat_lahir']; ?> </td>
                    <td> <?php echo $isi['tanggal_lahir']; ?> </td>
                    <td> <?php echo $isi['alamat']; ?> </td>
                    <td> <?php echo $isi['lulusan']; ?> </td>
                    <td> <?php echo $isi['tahun_angkatan']; ?> </td>
                    <td> <?php echo $isi['hobi']; ?> </td>
                    <td> <a href="ubah.php?nim=<?php echo $isi['nim']; ?>"><p style="color: black;">Ubah</p></a></td>
                    <td> <a href="hapus.php?nim=<?php echo $isi['nim']; ?>" onclick="return confirm('Hapus Data ?')"><p style="color: black;">Hapus</p></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div id="footer">
        <b>&copy; 2024 Data Mahasiswa Website. All rights reserved.</b>
    </div>
</body>
</html>
