<?php

echo '<h1>PROJECT PAGE</h1>';

echo '<h2>Time for our navigation that will again have both a key and a value</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',

);

echo'<ul>';

foreach ($nav as $key => $value) {
    # code...
    echo '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}

echo'<ul>';


echo '<h2>Our navigation will display a different color when on the index.php page!</h2>';

// we are going to define a constant 
// if we are on the index page THIS_PAGE will be the index page
// if we are on the about page THIS_PAGE will be the about page
// ect, that is all that means

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// we are going to be adding an if statment - if we are on this_page and it is the index.php page, do something
echo '<ul>';

foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';

    } else {
        echo '<li><a style="color:green;"  href=" '.$key.' "> '.$value.' </a></li>';

    }

} // end foreach

echo '<ul>';
