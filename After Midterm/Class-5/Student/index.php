<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  

    <h1>Student Information Store</h1>
    <form action="save.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                <textarea type="text" name="address" id="" cols="30" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="user_email" placeholder=""></td>
            </tr>
           
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Save">
            </tr>
        </table>
    </form>
</body>

</html>