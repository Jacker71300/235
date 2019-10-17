<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $data = file_get_contents("https://www.bungie.net/"); // or any other URL you want to use
        echo "<h1>Here's your data!!</h1>";
        echo $data;
    ?>
</body>
</html>