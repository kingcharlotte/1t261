<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/cur3.css" type="text/css" rel="stylesheet">
    <title>Currency Converter</title>
</head>
<body>

<?php
    $name = $email = $money = $currency = $bank = $convertedValue = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $money = test_input($_POST["money"]);
        $currency = test_input($_POST["currency"]);
        $bank = test_input($_POST["bank"]);

        // Perform currency conversion to American dollars based on the selected currency
        switch ($currency) {
            case 'Rubbles':
                $convertedValue = $money * 0.013; // Replace with actual conversion rate
                break;
            case 'Canadian Dollars':
                $convertedValue = $money * 0.79; // Replace with actual conversion rate
                break;
            case 'Pounds':
                $convertedValue = $money * 1.32; // Replace with actual conversion rate
                break;
            case 'Euros':
                $convertedValue = $money * 1.18; // Replace with actual conversion rate
                break;
            case 'Yen':
                $convertedValue = $money * 0.0091; // Replace with actual conversion rate
                break;
        }

        // Round the converted value to two decimals
        $convertedValue = number_format($convertedValue, 2);

        // Check if the user is happy or not based on the comparison of initial and converted amounts
        $happinessMessage = ($convertedValue >= $money) ? "I am REALLY happy, because I have $$convertedValue American Dollars!" : "I am NOT happy, because I have $$convertedValue American Dollars!";
        $youtubeVideoLink = ($convertedValue >= $money) ? "https://youtu.be/Eab_beh07HU?si=vj-qy6bAZtUc0KBm&t=74" : "https://youtu.be/kwxIGe1oOJQ?si=3l_s5kATwDUZqMKd&t=28";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>

        <label for="money">How much money do you have?</label>
        <input type="number" name="money" value="<?php echo $money; ?>" required>

        <label>Select your currency:</label>
        <label><input type="radio" name="currency" value="Rubbles" required> Rubbles</label>
        <label><input type="radio" name="currency" value="Canadian Dollars" required> Canadian Dollars</label>
        <label><input type="radio" name="currency" value="Pounds" required> Pounds</label>
        <label><input type="radio" name="currency" value="Euros" required> Euros</label>
        <label><input type="radio" name="currency" value="Yen" required> Yen</label>

        <label for="bank">Select your banking institution:</label>
        <select name="bank" required>
            <option value="Bank of America">Bank of America</option>
            <option value="Chase Bank">Chase Bank</option>
            <option value="Banner Bank">Banner Bank</option>
            <option value="Wells Fargo">Wells Fargo</option>
            <option value="Boeing Credit Union">Boeing Credit Union</option>
        </select>

        <input type="submit" name="convert" value="Convert It">
        <p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">Reset it!</a></p>
    </form>

    <?php
        if ($convertedValue != '') {
            echo "<p>You have converted $$money $currency to $$convertedValue American Dollars.</p>";
            echo "<p>$happinessMessage</p>";
            echo "<p>Hello $name, we will be emailing you at $email with your information, as well as depositing your funds in American Dollars!</p>";
            echo "<p><a href=\"$youtubeVideoLink\" target=\"_blank\">Watch a video</a></p>";
        }
    ?>
</div>

</body>
</html>
