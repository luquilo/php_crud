<?php

include "./config/connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$favorite_food = $_POST['favorite_food'];
$favorite_drink = $_POST['favorite_drink'];
$favorite_fruit = $_POST['favorite_fruit'];



$query = "UPDATE foods SET
                name = '$name',
                favorite_food = '$favorite_food',
                favorite_drink = '$favorite_drink',
                favorite_fruit = '$favorite_fruit'
                WHERE food_id = $id";



$result = mysqli_query($connection, $query);

if ($result) {
    header('location: index.php');
} else {
    echo 'ggagal';
}



?>