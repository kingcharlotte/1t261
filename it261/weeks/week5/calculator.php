<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles2.css" type="text/css" rel="stylesheet">
</head>
<body>

<header>
        <nav>
            <ul>
                <li><a href="/it261/website/home.php">Home</a></li>
                <li><a href="/it261/website/about.php">About</a></li>
                <li><a href="/it261/website/daily.php">Daily</a></li>
                <li><a href="/it261/website/project.php">Project</a></li>
                <li><a href="/it261/website/contact.php">Contact</a></li>
                <li><a href="/it261/website/gallery.php">Gallery</a></li>
                <li><a href="/it261/index.php">Portal</a></li>

            </ul>
        </nav>
    </header>
    <!--https://www.geeksforgeeks.org/what-is-cross-site-scripting-xss/ -->
<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

<label>Total miles driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

<label>How fast do you typically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

<!-- time for our radio button that has an additional attrubute of VALUE-->
<label>Price of gas</label>
<ul>
<li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked" ';?>> $3.00 </li>
<li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked" ';?>> $3.50 </li>
<li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked" ';?>> $4.00 </li>


</ul>

<label>Fuel efficiency</label>
<select name="mpg">
<!--<option value="" NULL <?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL) echo 'selected="unselected"';?>>Select one!</option>-->
<!-- using the function is_null which in the future we will use for arrays-->
<option value="" <?php if(isset($_POST['mpg']) && is_null($_POST['mpg'])) echo 'selected="unselected"';?>>Select one!</option>

<option value="40" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40') echo 'selected="selected"';?>>Great @40mpg</option>
<option value="30" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30') echo 'selected="selected"';?> >Decent @30mpg</option>
<option value="20" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '20') echo 'selected="selected"';?> >Bad @20mpg </option>
<option value="10" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '10') echo 'selected="selected"';?>>Terrible @10mpg</option>
</select>


<input type="submit" value="Calculate">

<p><a href="">Reset</a></p>
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

    if(empty($_POST['miles'])) {
        echo'<p class="error">Please fill out the miles!</p>';
    }

    if(empty($_POST['speed'])) {
        echo'<p class="error">Please fill out your speed!</p>';
    }

    if(empty($_POST['price'])) {
        echo'<p class="error">Please check the price!</p>';
    }
    
    if($_POST['mpg']== NULL) {
        echo'<p class="error">Please choose your fuel efficiency!</p>';

    }

    if(isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['price'],
$_POST['mpg'])) {
$name = $_POST['name'];
$miles = $_POST['miles'];
// floatval makes the strings numbers not strings
$speed = floatval($_POST['speed']);
$price = floatval($_POST['price']);
$hours = floatval($_POST['hours']);

$mpg = $_POST['mpg'];
// $dollars = $speed * $price;
// $hoursTotal = $miles / $speed;
// $days = $hoursTotal / $hours;
// $gallons = $miles / $mpg;
// $gasMoney = $gallons * $price;
// // only if everything is filled out on our form, will a msg display to the user
// //if(!empty($name && $email && $amount && $currency && $bank)) {

//      if(!empty($name && $miles && $speed && $price && $hours) && ($mpg != NULL)) {


// echo '
// <div class="box">
// <h2>Hello  '.$name.',</h2>
// <p>You will be travelling a total of <b>'.number_format($hoursTotal, 2).' hours,</b> taking <b> '.number_format($days, 2).' days</b> and, you will be using <b>'.number_format($gallons, 2).' gallons</b> of gas, costing you $<b>'.number_format($gasMoney, 2).' dollars.</b></p>
// </div>

// ';

// }
if(!empty($name && $miles && $speed && $price && $hours) && is_numeric($mpg) && $mpg != 0 && $hours != 0) {

    $dollars = $speed * $price;
    $hoursTotal = $miles / $speed;
    $days = $hoursTotal / $hours;
    $gallons = $miles / $mpg;
    $gasMoney = $gallons * $price;

    echo '
    <div class="box">
        <h2>Hello  '.$name.',</h2>
        <p>You will be travelling a total of <b>'.number_format($hoursTotal, 2).' hours,</b> taking <b> '.number_format($days, 2).' </b> days <b> and, you will be using <b>'.number_format($gallons, 2).' gallons,</b> of gas, costing you $<b>'.number_format($gasMoney, 2).' dollars.</b></p>
    </div>';
}
}

} // end server requesrt

?>
    
</body>
</html>