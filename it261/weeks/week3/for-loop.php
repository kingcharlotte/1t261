<?php

// this file will demonstrate for loops and in addition to placing your php inside your HTML!!
//The for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be execured for each iteration; }


// celcuis and farhrenheit 

// $far = ($celcuis * 9/5) + 32;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>

    <style> 
* {
    padding:0;
    margin:0;
    box-sizing:border-box;

}

table {
    width:500px;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid lightblue;
}

td, th {
    border:1px solid lightblue;
    border-collapse:collapse;
    padding:5px;
}

h1 {
    text-align:center;
    margin:10px 0;
    color:green;

}

p {
    text-align:center;
    margin:10px 0;
    color:green;

}

    </style>

</head>

<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
    <p>I used the floor function to round (down) the $far values to match your example!</p>
    <p>Also changed increment to 3, which will result in us scaling up by 3 degrees (celcius) each iteration</p>


<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>

</tr>

<?php
// use the floor function to found the $far values 
for($cel = 0; $cel <=100; $cel+= 3) {
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.floor($far).' degrees </td>';

    echo '</tr>';


}
?>

</table>


<h1>My Kilometer / Milage Table!</h1>
<h1>I used the round function to 2 decimal pts.</h1>
<p>I think using round function for $mil (miles) in this case would be better than floor or ceil because those functions do not take more than 1 parameter and therefore leave out some potentially important information</p>
<p> whilst also keeping the decimal places to a reasonable number (2)</p>
<p>Also changed increment to 3, which will result in us scaling up by 3 kilometers each iteration</p>


<table>
<tr>
<th>Kilometers</th>
<th>Miles</th>

</tr>

<?php
for($kil = 0; $kil <=100; $kil+= 3) {
    // I assume we do not want to keep all the decimals
    // lets round to two decimal places to be safe and keep some information
    // lets use the round function on $mil
    // I think using round in this case would be better than floor or ciel becuae those do not take
    // .. parameters and therefore leave out some potentially important information 
    // also changed the increment from 5 to 3
    $mil = ($kil / 1.609);
    //$mil = floor($mil);
    echo '<tr>';
    echo '<td> '.$kil.' Kilometers </td>';
    echo '<td> '.round($mil, 2).' Miles </td>';

    echo '</tr>';


}
?>

</table>


</body>

</html>