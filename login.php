<?php
include "db.php";

$username = $_POST['username'];
$telepon = (md5($_POST['telepon']));

$query = "SELECT * FROM user WHERE username='$username' AND telepon='$telepon'";
$apa   = $koneksi->query($query);

if ($apa->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header ("location: user.php");
} else {
    echo "gagal login";
}

?>