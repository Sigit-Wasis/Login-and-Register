<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
</head>
<body>

    <form class="" action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>telepon</td>
                <td><input type="telepon" name="telepon" value=""></td>
            </tr>
            <tr>
                <td><a href="index.php"> Halaman Utama </a></td>
                <td><input type="Submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php

include "db.php";

if (@$_POST['submit']) {
    # code...

$username    = @$_POST['username'];
$telepone   = @$_POST['telepon'];  
$telepon    = md5($telepone);

mysqli_query($koneksi, "INSERT INTO user(username, telepon) VALUES('$username', '$telepon')");

?>
<script type="text/javascript">
    alert("data tersimpan");
    window.location.href="index.php";
</script>

<?php
}
