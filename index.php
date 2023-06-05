<?php

include './config/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favorite beverage</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <h1>favorite beverage table</h1>
        <a href="create.php">TAMBAH DATA BARU</a>
        <div class="table-container">
            <table>

                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">name</th>
                        <th scope="col">favorite food</th>
                        <th scope="col">favorite drink</th>
                        <th scope="col">favorite fruit</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>

                <?php

                $query = "SELECT * FROM foods";
                $result = mysqli_query($connection, $query);
                $number = 1;

                // fetch data menjadi array
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>

                    <tbody>
                        <tr>
                            <td scope="row"><?= $number++ ?></td>
                            <td scope="row"><?= $data['name']?></td>
                            <td scope="row"><?= $data['favorite_food']?></td>
                            <td scope="row"><?= $data['favorite_drink']?></td>
                            <td scope="row"><?= $data['favorite_fruit']?></td>
                            <td scope="row">
                                <a href="edit.php?id=<?= $data['food_id']?>">edit</a>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $data['food_id']?>">
                                    <button>HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>


                <?php
                }
                ?>

            </table>
        </div>
    </div>
</body>

</html>