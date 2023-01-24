<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
    </head>


    <body>
        <h1><?php echo $business['name'] ?></h1>

        <ul>
            <?php foreach($business['categories'] as $category) {
                echo '<li>' . $category . '</li>';
            } ?>
        </ul>
    </body>
</html>