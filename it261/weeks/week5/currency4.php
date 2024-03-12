<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 4 </title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!--https://www.geeksforgeeks.org/what-is-cross-site-scripting-xss/ -->
<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

<label>EMAIL</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

<label>How much money do you have?</label>
<input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>">
<!-- time for our radio button that has an additional attrubute of VALUE-->
<label>Choose your currency</label>
<ul>
<li><input type="radio" name="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked" ';?>> Rubles </li>
<li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked" ';?>> Canadian Dollars </li>
<li><input type="radio" name="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked" ';?>> Pounds </li>
<li><input type="radio" name="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked" ';?>> Euros </li>
<li><input type="radio" name="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked" ';?>> Yen </li>


</ul>

<label>Choose your banking insitution</label>
<select name="bank">
<!--<option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"';?>>Select one!</option>-->
<!-- using the function is_null which in the future we will use for arrays-->
<option value="" <?php if(isset($_POST['bank']) && is_null($_POST['bank'])) echo 'selected="unselected"';?>>Select one!</option>

<option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected="selected"';?>>Bank of America</option>
<option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected"';?> >Chase Bank</option>
<option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected="selected"';?> >Banner Bank</option>
<option value="well" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells') echo 'selected="selected"';?>>Wells Fargo </option>
<option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected="selected"';?> >Boeing Credit Union</option>
</select>


<input type="submit" value="Convert it">

<p><a href="">Reset it!</a></p>
</fieldset>
</form>

<?php
// we start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD']== 'POST') {


    if(empty($_POST['name'])) {
        echo'<p class="error">Please fill our your name!</p>';
    }

    if(empty($_POST['email'])) {
        echo'<p class="error">Please fill our your email!</p>';
    }

    if(empty($_POST['amount'])) {
        echo'<p class="error">Please fill our your amount!</p>';
    }

    if(empty($_POST['currency'])) {
        echo'<p class="error">Please check your currency!</p>';
    }
    
    if($_POST['bank']== NULL) {
        echo'<p class="error">Please choose your banking insitution!</p>';

    }

    if(isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {
$name = $_POST['name'];
$email = $_POST['email'];
// floatval makes the strings numbers not strings
$amount = floatval($_POST['amount']);
$currency = floatval($_POST['currency']);
$bank = $_POST['bank'];
$dollars = $amount * $currency;

// Determine if the user is happy or not based on the comparison of original amount and converted amount
$originalAmount = floatval($_POST['amount']);
$convertedValue = number_format($dollars, 2);

// // Check if the user has more or less money after conversion
// $message = ($dollars > $originalAmount) ?
//     "I am REALLY happy, because I have $$convertedValue American Dollars!" :
//     "I am NOT happy, because I have $$convertedValue American Dollars!";

// // Display the message along with the conversion details
// echo '
// <div class="box">
//     <h2>Hello ' . $name . ',</h2>
//     <p>You now have <b>$' . $convertedValue . ' American dollars</b> and we will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>' . $bank . ' bank!</b></p>
//     <h2 class="happy-message">' . $message . '</h2>';

// Check if the user has more or less money after conversion
$message = ($dollars > $originalAmount) ?
    "I am REALLY happy, because I have $$convertedValue American Dollars!" :
    "I am NOT happy, because I have $$convertedValue American Dollars!";

// Determine the background color based on happiness
$backgroundColor = ($dollars > $originalAmount) ? 'lightblue' : 'lightcoral';

// Display the message along with the conversion details and set the background color
echo '
<div class="box" style="background-color: ' . $backgroundColor . ';">
    <h2>Hello ' . $name . ',</h2>
    <p>You now have <b>$' . $convertedValue . ' American dollars</b> and we will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>' . $bank . ' bank!</b></p>
    <h2 class="happy-message">' . $message . '</h2>';

// // YouTube video links based on happiness
// $happyVideo = 'https://youtu.be/Eab_beh07HU?si=d1cVkilf6eVT9b6K&t=24';
// $sadVideo = 'https://youtu.be/kwxIGe1oOJQ?si=yr-q46X5RkBSKn86&t=25';

// // Display the appropriate video link
// echo '<iframe width="560" height="315" src="' . (($dollars > $originalAmount) ? $happyVideo : $sadVideo) . '" frameborder="0" allowfullscreen></iframe>';

// Determine the video link based on happiness
$videoLink = ($dollars > $originalAmount) ?
    'https://www.youtube.com/embed/Eab_beh07HU?autoplay=1' :  // Happy video
    'https://www.youtube.com/embed/kwxIGe1oOJQ?autoplay=1';  // Sad video

// Display the appropriate video using the YouTube Embedded Player API
echo '<iframe width="560" height="315" src="' . $videoLink . '" frameborder="0" allowfullscreen></iframe>';


echo '</div>';
}

} // end server requesrt

?>
    
</body>
</html>