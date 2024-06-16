<?php 
session_start();
if(isset($_SESSION['login_admin']))
{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah</title>
    <link rel="stylesheet" href="style.css"> <!-- agar css terhubung -->
</head>
<body>
    <div class="navbar">
            <a href="#" class="logo">
                <img src="logo.jpg" alt="">
                WEBSITE
            </a>
            <div class="nav-links">
                <a href="home.html">Home</a>
                <a href="login.php">Login</a>
                <a href="logout.php" onclick="return confirm('anda yakin ingin logout ?')">Logout</a>
                <a href="data_user.php">Halaman Data</a>
            </div>
    </div>
    <div id="content">
        <?php
        include 'koneksi.php';
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi,"select * from tb_anggota where nim='$nim'");
        while($isi = mysqli_fetch_array($data)) { ?> 
            <form action="proses-ubah.php" method="post">
                <table style="border-collapse: collapse; width: 98%; height: 500px;">
                    <h3>Formulir Ubah</h3>
                    <tr>
                        <td style="border: 1px solid black;">NIM</td> <td style="border: 1px solid black;"><input type="Hidden" id="nim" Name="nim" value="<?php echo $isi['nim']; ?>" required><?php echo $isi['nim'];?></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Nama</td> <td style="border: 1px solid black;"><input type="text" id="Nama" Name="nama" value="<?php echo $isi['nama']; ?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Prodi</td>
                        <td style="border: 1px solid black;">
                            <select name="prodi" id="prodi">
                                <option value="<?php echo $isi['prodi'];?>"><?php echo $isi['prodi'];?></option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Jenis kelamin</td>
                        <td style="border: 1px solid black;">
                            <select name="jenis_kelamin" id="jenis_kelamin">
                                <option value="<?php echo $isi['jenis_kelamin'];?>"><?php echo $isi['jenis_kelamin'];?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Tempat Lahir</td> <td style="border: 1px solid black;"><input type="text" id="tempat_lahir" Name="tempat_lahir" value="<?php echo $isi['tempat_lahir']; ?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Tanggal Lahir</td> <td style="border: 1px solid black;"><input type="date" id="tanggal_lahir" Name="tanggal_lahir" value="<?php echo $isi['tanggal_lahir']; ?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Alamat</td> <td style="border: 1px solid black;"><input type="text" id="alamat" Name="alamat" value="<?php echo $isi['alamat']; ?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Lulusan</td> <td style="border: 1px solid black;"><input name="lulusan" id="lulusan" Name="lulusan" value="<?php echo $isi['lulusan'];?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Tahun Angkatan</td> <td style="border: 1px solid black;"><input name="tahun_angkatan" id="tahun_angkatan" Name="tahun_angkatan" value="<?php echo $isi['tahun_angkatan'];?>" required></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Hobi</td> <td style="border: 1px solid black;"><textarea name="hobi" id="hobi" cols="30" rows="10"><?php echo $isi['hobi'];?></textarea></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;" colspan="2"><input type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        <?php } ?>
    </div>
    <div id="footer">
        <b>&copy; 2024 Data Mahasiswa Website. All rights reserved.</b>
    </div>
</body>
</html>
<?php } else {header("location:login.php");} ?>