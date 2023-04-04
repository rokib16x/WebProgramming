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
    
    if($var1>$var2 && $var1>$var3){
        echo "<h1>The largest number is: $var1</h1>";

    }
    if($var2>$var1 && $var2>$var3){
        echo "<h1>The largest number is: $var2</h1>";

    }
    else{
        echo '<h1 style="color: red; font-size: 24px;">The largest number is: </h1>';
    }

    $largest = max($var1,$var2,$var3);

    echo "<h1>The largest number is: $largest</h1>";
    ?>
</body>

</html> 