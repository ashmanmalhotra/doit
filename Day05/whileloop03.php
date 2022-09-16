<?php
    $fruits = ["apple", "banana", "orange", "grape", "mango"];
    $length = count($fruits);
    $i = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        while($i < $length){
        ?>
        <li><?php echo $fruits[$i]; ?></li>
        <?php
            $i++;
        }
        ?>
    </ul>
</body>
</html>