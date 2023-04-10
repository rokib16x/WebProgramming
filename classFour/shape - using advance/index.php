<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Maker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
if (isset($_POST['size']) && isset($_POST['design'])) {
    $size = $_POST['size'];
    $design = $_POST['design'];
    echo '<div class="pattern"><table>';
    if ($design == 1) {
        for ($i = 0; $i < $size; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $i; $j++) {
                echo "<td>*</td>";
            }
            echo "</tr>";
        }
    } else {
        for ($i = 0; $i < $size; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $size; $j++) {
                echo "<td>*</td>";
            }
            echo "</tr>";
        }
    }
    echo '</table></div>';
    echo '<div class="back-button"><a href="index.php">Back</a></div>';
} else {
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td>Size:</td>
                <td><input type="text" name="size"></td>
            </tr>
            <tr>
                <td><input type="radio" name="design" value="1" checked></td>
                <td>
                    *<br>**<br>***<br>****<br>*****</td>
                    
            </tr>

            <tr>
                <td><input type="radio" name="design" value="2"></td>
                <td>
                    *****<br>*****<br>*****<br>*****<br>*****</td>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Generate"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>

</html>