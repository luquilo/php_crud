<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php

        include './config/connection.php';

        ?>
        <div>
            <h1>add new data</h1>
            <div>
                <form action="createProses.php" method="post">
                    <div>
                        <label for="form_1">name</label>
                        <input type="text" id="form_1" name="name">
                    </div>
                    <div>
                        <label for="form_2">favorite food</label>
                        <input type="text" id="form_2" name="favorite_food">
                    </div>
                    <div>
                        <label for="form_3">favorite drink</label>
                        <input type="text" id="form_3" name="favorite_drink">
                    </div>
                    <div>
                        <label for="form_4">favorite fruit</label>
                        <input type="text" id="form_4" name="favorite_fruit">
                    </div>
                    <div>
                        <button>SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</body>

</html>