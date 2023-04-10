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
    $result=0;
    $temp = 99;
    for($i=1;$i<=99;$i=$i+2){
        $result+=$i/$temp;
        $temp -=2;
    }
    echo "$result <br>";
    function add_numbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo add_numbers(5.2,9.7);    
    ?>
</body>
</html>