<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PineApple</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="process.php" method="post">
        <table>
            <tr>
                <td>Enter the number of pineapple:</td>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>Home Delivery:</td>
                <td><select name="user_address">
                    <option value="home">Yes</option>
                    <option value="work">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Tip:</td>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>Extra Salt:</td>
                <td><select name="user_address">
                    <option value="home">Small</option>
                    <option value="work">Medium</option>
                    <option value="add">Large</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" value="Submit">
                <td>
            </tr>
        </table>
    </form>
</body>

</html>