<?php

    include './config/connection.php';

    $name = $_POST['name'];
    $favorite_food = $_POST['favorite_food'];
    $favorite_drink = $_POST['favorite_drink'];
    $favorite_fruit = $_POST['favorite_fruit'];

    $query = "INSERT INTO foods (name, favorite_food, favorite_drink, favorite_fruit) VALUES ('$name', '$favorite_food', '$favorite_drink', '$favorite_fruit')";

    $result = mysqli_query($connection, $query);

    if($result){
        header('location: index.php');
    }else{
        echo 'gagal';
    }



?>