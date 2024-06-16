<?php
session_start();

session_destroy();

header("location:data_user.php?logout=berhasil");
?>