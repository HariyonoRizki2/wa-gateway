<?php

$host = "containers-us-west-112.railway.app";
$username = "root";
$password = "S439wzoOogCS75UfyyTp";
$db = "railway";
error_reporting(0);
$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://localhost/wabot/";
date_default_timezone_set('Asia/Jakarta');
