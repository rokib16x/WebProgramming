<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PineApple</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <form action="process.php" method="post">
        <table>
            <tr>
                <td>Enter the number of pineapple:</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <td>Home Delivery:</td>
                <td><select name="delivery_option">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Tip:</td>
                <td><input type="text" name="tip"></td>
            </tr>
            <tr>
                <td>Extra Salt:</td>
                <td><select name="extra_salt">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" value="Generate Bill">
                <td>
            </tr>
        </table>
    </form>
</body>

</html>