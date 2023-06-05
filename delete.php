<?php

    include './config/connection.php';

    $id = $_POST['id'];
    $query = "DELETE FROM foods where food_id = '$id'";
    $result = mysqli_query($connection, $query);

    if($result){
        header('location: index.php');
    }else{
        echo 'data gagal dihapus';
    }



?>