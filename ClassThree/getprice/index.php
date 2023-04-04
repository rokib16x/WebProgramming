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

    function get_price($var)
    {

        if ($var <= 9) {
            $result = (($var * 23.49) * 1.2) + 50;
        } else if ($var >= 10 && $var <= 19) {
            $result = ((($var * 23.49) * 0.9) * 1.2) + 50;
        } else if ($var >= 20) {
            $result = ((($var * 23.49) * 0.85) * 1.2) + 50;
        }
        return $result;
    }
    echo get_price(9);
    ?>
</body>

</html>