<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3 sticky form</title>
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

// only if everything is filled out on our form, will a msg display to the user
//if(!empty($name && $email && $amount && $currency && $bank)) {

     if(!empty($name && $email && $amount && $currency) && ($bank != NULL)) {


echo '
<div class="box">
<h2>Hello  '.$name.',</h2>
<p>You know have <b>$'.number_format($dollars, 2).' American dollars </b> and we will be emailing you at <b> '.$email.' </b> with your information, as well as depositing your funds at <b> '.$bank.' bank!</b></p>
</div>

';

}
}

} // end server requesrt

?>
    
</body>
</html>