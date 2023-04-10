<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="post">
    <table>
        <tr><td>Name:</td><td><input type="text" name="user_name"></td></tr>
        <tr><td>Address:</td><td><textarea  name="user_address"></textarea></td></tr>
        <tr><td colspan="2" align="center"> <input type="submit" value="Submit"><td></tr>
    </table>
    </form>
</body>
</html>