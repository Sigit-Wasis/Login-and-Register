<?php

$server     = 'localhost';
$username   = 'root';
$password   = '123';
$database   = 'register';

$koneksi  =  new mysqli ($server, $username, $password, $database);
if ($koneksi->koneksi_error) {
    echo gagal;
}


// Sigit wasis subekti

?>