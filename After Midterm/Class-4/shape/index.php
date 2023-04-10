<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>

<body>
    <form action="process.php" method="post">
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
</body>

</html>
