<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
        <table style="width: 98%;">
            <form action="proses-login.php" method="post">
                <h3>LOGIN</h3>
                <tr>
                    <td>Username</td>
                </tr>
                <tr>
                    <td><input type="text" name="username" id="username" placeholder="Masukan Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" id="password" placeholder="Masukan Password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </form>
        </table>
    </div>

    
    <div id="footer">
        <b>&copy; 2024 Data Mahasiswa Website. All rights reserved.</b>
    </div>

</body>
</html>