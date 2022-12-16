<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "wav4";
error_reporting(0);
$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://localhost/wabot/";
date_default_timezone_set('Asia/Jakarta');
