<?php
// class coffee exercise 
// if today is Friday, it will be pumkin latte day
// INTRODUCING the isset() function 
// then we will introduce our first GLOBAL variable 
// our switch 


// starting the switch 
// if $GET['today'] is set, $today, then all is well, 
// but it is not set therefore the else is the day!

// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET


// what is the isset function - is asking if something has been set

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';

// } else {
//     echo 'Variable has not been set!'; 
// }

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT';
// }

// Initialize variables with default values
// $coffee = '';
// $pic = '';
// $alt = '';
// $content = ''; 

// setting a timezone otherwise I beleive it defaults to EST and we want PST
date_default_timezone_set("America/Los_Angeles");
// echo date_default_timezone_get();


if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    // assigns the day of the week
    $today = date('l');
}

switch($today) {
case 'Friday' :
$coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
$pic = 'pumpkin.jpeg';
$alt = 'Pumpkin Latte';
$content = '<p> <b>A Pumpkin Latte</b> is simply a latte made with pumkin AND esspresso.</p>';
break;

case 'Saturday' :
$coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
$pic = 'green-tea.jpeg';
$alt = 'Green Tea';
$content = '<p> <b>A green tea latte</b> is simply a latte made with green tea instead of esspresso.</p>';
break;

case 'Sunday':
$coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'Regular Joe';
$content = '<p> <b>Regular Coffee</b> is black coffee. Coffee is thought to date back to 800 A.D., where it was discovered by 9th century goat herders. It was said that they noticed their goats eating the plant and afterwards it appeared like they were "dancing".
</p>';
break;

case 'Monday':
$coffee = '<h2>Monday is our Latte Day!</h2>';
$pic = 'latte.jpeg';
$alt = 'Latte';
$content = '<p> <b>Latte</b> is esspresso with milk. Legend has it that David Schomer started the US latte art craze in the mid 1980s. However, a guy in Italy named Luigi Lupi was doing the same thing around the same time.</p>';
break;

case 'Tuesday':
$coffee = '<h2>Tuesday is our Americano Day!</h2>';
$pic = 'americano.jpeg';
$alt = 'Americano';
$content = '<p> <b>Americano</b> is esspresso with water. The americano finds its origins in World War II. Interestingly, American soldiers stationed in Italy didn\'t care for the very strong espresso that was favoured in the country, therefore they tried to recreate their beloved drip coffee from back home by adding water to the espresso shot.</p>';
break;

case 'Wednesday':
$coffee = '<h2>Wednesday is our Frappuccino Day!</h2>';
$pic = 'frap.jpeg';
$alt = 'Frappuccino';
$content = '<p> <b>Frappuccino</b> is blended esspresso, ice, milk, and flavoring + whipped cream! OOH! Starbucks launched the first Frappuccino® blended beverages, Coffee and Mocha, in the U.S. in 1995 with a proprietary blend of coffee, milk and ice. Today, almost two decades later, customers can enjoy more than 36,000 different combinations of Frappuccino® blended beverages..</p>';
break;

case 'Thursday':
    $coffee = '<h2>Thursday is our Cappuccino Day!</h2>';
    $pic = 'cap.jpeg';
    $alt = 'Cappuccino';
    $content = '<p> A <b>Cappuccino</b> is a strong drink made from equal parts steamed and foamed milk. The fiesty Cappuccino is from Italy. Thank you italians! </p>';
    break;
    

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

 * {
    padding:0;
    margin:0;
    box-sizing:border-box;

 }       

 #wrapper {
    width:940px;
    margin:20px auto;
 }
    </style>
</head>

<body>

<div id="wrapper">
<h1>Wonderful Switch Classwork Exercise (Not the Daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our daily specials</h2>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>



</ul>
</div>
<!-- end wrapper -->
</body>
</html>