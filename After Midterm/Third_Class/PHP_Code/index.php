<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var1 = 10;
    $var2 = 20;
    $var3 = 30;
    
    $largest = max($var1,$var2,$var3);

    echo "The largest number is: " . $largest;
    ?>
</body>

</html>