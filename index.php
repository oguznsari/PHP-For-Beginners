<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
<!--    <style>-->
<!--        body {-->
<!--            display: grid;-->
<!--            place-items: center;-->
<!--            height: 100vh;-->
<!--            margin: 0;-->
<!--            font-family: sans-serif;-->
<!--        }-->
<!--    </style>-->
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            "Do Androids Dream of Electronic Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>

    <ul>
        <?php
            foreach ($books as $book) {
                echo "<li>{$book}™</li>";
            }
        ?>
    </ul>
</body>
</html>