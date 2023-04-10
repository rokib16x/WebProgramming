<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PineApple - Bill Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$number = $_POST["number"];
$delivery_option = $_POST["delivery_option"];
$tip = $_POST["tip"];
$extra_salt = $_POST["extra_salt"];

        $pineapple_price = 23.45;
        $bill = $pineapple_price * $number;

        // Add tip to the bill
        $bill += $tip;

        // Calculate delivery cost
        if ($delivery_option == 'yes') {
            $bill += 45;
        }

        // Add extra cost for salt size
        if ($extra_salt == 'small') {
            $size_extra_cost = 1.05;
            $bill += $size_extra_cost;
        } elseif ($extra_salt == 'medium') {
            $size_extra_cost = 1.1;
            $bill += $size_extra_cost;
        } elseif ($extra_salt == 'large') {
            $size_extra_cost = 1.15;
            $bill += $size_extra_cost;
        }
    } else {
        // Set default values if no form data has been submitted yet
        $number = '';
        $delivery_option = '';
        $tip = '';
        $extra_salt = '';
        $bill = '';
    }
?>

    <h1>Bill Details</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td>Enter the number of pineapple:</td>
                <td><input type="text" name="number" value="<?php echo $number; ?>"></td>
            </tr>
            <tr>
                <td>Home Delivery:</td>
                <td>
                    <select name="delivery_option">
                        <option value="">Select an option</option>
                        <option value="yes" <?php if ($delivery_option == 'yes') echo 'selected'; ?>>Yes</option>
                        <option value="no" <?php if ($delivery_option == 'no') echo 'selected'; ?>>No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tip:</td>
                <td><input type="text" name="tip" value="<?php echo $tip; ?>"></td>
            </tr>
            <tr>
                <td>Extra Salt:</td>
                <td>
                    <select name="extra_salt">
                        <option value="">Select a size</option>
                        <option value="small" <?php if ($extra_salt == 'small') echo 'selected'; ?>>Small</option>
                        <option value="medium" <?php if ($extra_salt == 'medium') echo 'selected'; ?>>Medium</option>
                        <option value="large" <?php if ($extra_salt == 'large') echo 'selected'; ?>>Large</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Generate Bill">
                    <input type="reset" value="Clear" class="clear-button"> </td>
            </tr>
        </table>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <div class="result">
        <?php echo "Total Bill: $" . number_format($bill, 2); ?>
    </div>
    <?php endif; ?>
</body>

</html>