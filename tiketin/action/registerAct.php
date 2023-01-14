<?php

require './koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO user_account VALUES ('', '$email', '$password')");


echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=../login.php'>";
    