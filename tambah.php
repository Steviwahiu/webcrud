<?php 
session_start();
if(isset($_SESSION['login_admin']))
{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
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
        
        <form action="proses-tambah.php" method="post">
            <table style="border-collapse: collapse; width: 98%;">
                <h3>Formulir Tambah</h3>
                <tr>
                    <td style="border: 1px solid black;">NIM</td> <td style="border: 1px solid black;"><input type="text" id="nim" Name="nim" placeholder="nim" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Nama</td> <td style="border: 1px solid black;"><input type="text" id="nama" Name="nama" placeholder="nama" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Prodi</td>
                    <td style="border: 1px solid black;">
                        Sistem Informasi<input type="radio" id="radio1" name="prodi" value="Sistem Informasi">
                        Teknik Informatika<input type="radio" id="radio2" name="prodi" value="Teknik Informatika">
                    </td>
                </tr>
                <tr>
                <td style="border: 1px solid black;">Jenis Kelamin</td>
                    <td style="border: 1px solid black;">
                        Laki-laki<input type="radio" id="radio1" name="jenis_kelamin" value="Laki-laki">
                        Perempuan<input type="radio" id="radio2" name="jenis_kelamin" value="Perempuan">
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Tempat Lahir</td> <td style="border: 1px solid black;"><input type="text" id="tempat_lahir" Name="tempat_lahir" placeholder="tempat_lahir" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Tanggal Lahir</td> <td style="border: 1px solid black;"><input type="date" id="tanggal_lahir" Name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Alamat</td> <td style="border: 1px solid black;"><input type="text" id="alamat" Name="alamat" placeholder="alamat" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Lulusan</td> <td style="border: 1px solid black;"><input type="text" id="lulusan" Name="lulusan" placeholder="lulusan" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Tahun Angkatan</td> <td style="border: 1px solid black;"><input type="year" id="tahun_angkatan" Name="tahun_angkatan" required></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">Hobi</td> <td style="border: 1px solid black;"><textarea name="hobi" id="hobi" cols="30" rows="10"></textarea></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td colspan="2"><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="footer">
        <b>&copy; 2024 Data Mahasiswa Website. All rights reserved.</b>
    </div>
</body>
</html>
<?php } else {header("location:login.php");} ?>