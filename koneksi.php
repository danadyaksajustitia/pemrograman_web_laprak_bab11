<?php
$namahost = "localhost";
$username = "root";
$password = "";
$database = "praktikumWeb";

$koneksi = mysqli_connect($namahost, $username, $password, $database) or die("Failed");
mysqli_select_db($koneksi, $database) or die("Database not exist");