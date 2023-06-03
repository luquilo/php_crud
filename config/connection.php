<?php 

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db= 'foods';
    $connection = mysqli_connect($server, $username, $password, $db);

    if ($connection){
        // echo "berhasil";
    } else {
        echo "gagal";
    }


?>