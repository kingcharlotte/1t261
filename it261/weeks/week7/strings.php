<?php 
// our str_replace and substr functions!
// substr(string,start,lenght)

$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '<br>';
echo substr($statement, 0); // starting at zero will start at the first letter of the string, so exact same string

echo '<br>';
echo substr($statement, 1); // starting at one will start at r

echo '<br>';
echo substr($statement, 11); // starting at one will start I
echo '<h2>Now I would like to display just the words - I am reading</h2>';

echo '<br>';
echo substr($statement, 11, 12); // displays 'I am reading'

echo '<br>';
echo '<h2>What if I would like to display Looming?</h2>';
echo substr($statement, -13, 9); // displays Looming T

echo '<br>';
echo substr($statement, 4, 11); // displays 'ently i am

echo '<br>';
echo substr($statement, -20, 2); // ng

echo '<h2>Now for the str_replace function!</h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!   ';

echo str_replace('the', 'The', $statement2);




