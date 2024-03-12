<?php

// date function and if statment
echo date('Y');

echo '<br>';
// l = day
// F = month
// j = day #
// y = year
// h = 12 hr format
// H = 24 hr format
echo date('l, F j, Y h:i: A');

echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';

echo date('l, F j, Y h:i: A');

echo '<br>';

$name = 'Char';
$our_time = date('H:i A');
echo '<br>';


echo $our_time;

// the logic begind this, IF the time is less or equal to ll then it is morning.

// if the time is less or equal to 17, which equals 5, then it is afternoon

// now we have an else, that will mean it is evening!


if($our_time <= 11) {
   echo '<h2 style="color:yellow;">Good Morning, '.$name.'</h2>
   <img src="./images/sun.png" alt="sun">
   <p>It\'s time to get up!</p>
   
   ';

} elseif($our_time <= 17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'</h2>';
    
} else {
    echo '<h2 style="color:blue;">Good Evening!, '.$name.'</h2>';


}