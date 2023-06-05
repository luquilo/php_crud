<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <?php

        include './config/connection.php';

        $id = $_GET['id'];
        $query = "SELECT * FROM foods WHERE food_id = '$id'";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);

        ?>
        <div>
            <h1>edit data</h1>
            <div>
                <form action="editProses.php" method="post">
                    <input type="hidden" name='id' value="<?= $data['food_id'] ?>">
                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <label for="form_1">name</label>
                        <input type="text" id="form_1" name="name" value="<?= $data['name'] ?>">
                    </div>
                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <label for="form_2">favorite food</label>
                        <input type="text" id="form_2" name="favorite_food" value="<?= $data['favorite_food'] ?>">
                    </div>
                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <label for="form_3">favorite drink</label>
                        <input type="text" id="form_3" name="favorite_drink" value="<?= $data['favorite_drink'] ?>">
                    </div>
                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <label for="form_4">favorite fruit</label>
                        <input type="text" id="form_4" name="favorite_fruit" value='<?= $data['favorite_fruit'] ?>'>
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</body>

</html>