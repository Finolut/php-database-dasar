<?php

$hostname = "localhost";
$username = "root"; 
$password = "";
$database_name = "buku_novel";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi lagi error";
    die("error");
}

?>